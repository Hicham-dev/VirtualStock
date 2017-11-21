(function($) {

    'use strict';
    
    $(document).ready(function() {
        // Initializes search overlay plugin.
        // Replace onSearchSubmit() and onKeyEnter() with 
        // your logic to perform a search and display results
        
        $(".list-view-wrapper").scrollbar();

        $('[data-pages="search"]').search({
            // Bind elements that are included inside search overlay
            searchField: '#liveSearch',
            closeButton: '.overlay-close',
            suggestions: '#overlay-suggestions',
            brand: '.brand',
            // Callback that will be run when you hit ENTER button on search box
            onSearchSubmit: function(searchString) {
                console.log("Search for: " + searchString);
            },
            // Callback that will be run whenever you enter a key into search box. 
            // Perform any live search here.  
            onKeyEnter: function(searchString) {
                console.log("Live search for: " + searchString);
                var searchField = $('#liveSearch');
                var searchResults = $('.search-results');
                var SearchResultsHtml = '';
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                });
                var data = {};
                if($('#localSearch').is(':checked')){
                    data['localSearch'] = 1;
                }
                else
                {
                    data['localSearch'] = 0;
                }
                data['liveSearch'] = $('#liveSearch').val();
                $.ajax({

                    type: 'POST',
                    url: '/livesearch',
                    dataType: "json",
                    data: data,
                    success:function(data){
                        var html = ":&nbsp;";
                        console.log(data);
                        if(data[1].length>0){
                            var i;
                            for(i=0;i<data[1].length;i++){
                                html += "<a href=''>"+data[1][i].ref+"</a>&nbsp;";
                            }
                            
                            for(i=0;i<data[0].length;i++){
                                SearchResultsHtml += '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">'+
                                '<div id="portlet-circular" class="panel panel-default portlet">'+
                                    '<a href="/article/'+data[0][i].id+'" class="text-decoration-none"><div class="panel-body" style="display: block;height:150px;">'+
                                        '<div class="col-md-4" >'+
                                            '<img src="/storage/photos/EliteBook840G3.jpg" alt="EliteBook840G3" width="100%">'+
                                            '<p class="small hint-text text-center"> Occasion </p>'+
                                        '</div>'+
                                        '<div class="col-md-8">'+
                                            '<p class="bold">'+data[0][i].ref+'</p>'+
                                            '<p>'+ ((data[0][i].preview.length > 80 )? data[0][i].preview.substring(0,80) + ' ...': data[0][i].preview) +'</p>'+
                                        '</div>'+  
                                    '</div></a>'+
                                '</div>'+
                                '</div>';
                            }
                        }
                        
                        $('#suggestions-list').html(html);
                        console.log(html);
                    },
                    error:function(data){
                        
                    }
                })


                // Timeout is used for DEMO purpose only to simulate an AJAX call
                clearTimeout($.data(this, 'timer'));
                searchResults.fadeOut("fast"); // hide previously returned results until server returns new results
                var wait = setTimeout(function() {
                    if (searchField.val().length != 0) {
                            $(".search-results div").html(SearchResultsHtml);
                            searchResults.fadeIn("fast"); // reveal updated results
                        }
                }, 500);
                $(this).data('timer', wait);
            }
        
        })
    });

    $('.panel-collapse label').on('click', function(e){
        e.stopPropagation();
    })
    
})(window.jQuery);