
//here r the options of date picker

$(document).ready(function() {
    

    $('#myDatepicker,#myDatepicker1').datepicker({
      language : 'fr'
    });

    $('#myDatepicker,#myDatepicker1').datepicker(
      "setDate" , new Date()
    );


    $('#qte').change(function(){
      var qte = $('#qte').val();
      if(qte>1)
      {
        $('#alert-qte').css('display','block');
      }
      else
      {
        $('#alert-qte').css('display','none');
      }
  })
    
    $('#cat').change(function(){
      $('.cat-loading').css('display','block');
      $('#s2id_marque a span.select2-chosen').html('');
      $('#s2id_ref a span.select2-chosen').html('');
      getAjaxField('cat','marque');
      var cat = $("#cat").val();
      if(cat == "op")
      {
        $('#num-cpu').attr('disabled','');
        $('#alimentation').css('display','none');
        $('.op').css('display','block');
        $('.ob').css('display','none');
      }
      else{
        $('#num-cpu').removeAttr('disabled');
        $('#alimentation').css('display','block');
        $('.op').css('display','none');
        $('.ob').css('display','block');
      }
    })

    $('#checkbox31').change(function(){
      var isGrapgicCard = $('#checkbox31').is(':checked');
      if(isGrapgicCard){
        $('.isGrapgicCard').css('display','block');
      }
      else
      {
        $('.isGrapgicCard').css('display','none');
      }
    })
        
        $('#add-new-stockage').click(function(){
          $('#new-stockage').append('<div class="row clearfix">'+
                                        '<div class="col-md-3">'+
                                          '<div class="form-group form-group-default form-group-default-select2 ">'+
                                            '<label class="">Référence</label>'+
                                            '<select class="full-width select2-offscreen" data-placeholder="Selectionnez une référence" data-init-plugin="select2" tabindex="-1" title="">'+
                                              
                                            '</select>'+
                                          '</div>'+

                                        '</div>'+
                                        '<div class="col-md-3">'+
                                          '<div class="form-group form-group-default form-group-default-select2 ">'+
                                            '<label class="">capacité</label>'+
                                            '<select class="full-width select2-offscreen storage-capaity" data-placeholder="Selectionnez une capacité" data-init-plugin="select2" tabindex="-1" title="">'+
                                              '<option value="16 GO">16 GO</option>'+
                                              '<option value="32 GO">32 GO</option>'+
                                              '<option value="64 GO">64 GO</option>'+
                                              '<option value="128 GO">128 GO</option>'+
                                              '<option value="250 GO">250 GO</option>'+
                                              '<option value="256 GO">256 GO</option>'+
                                              '<option value="320 GO">320 GO</option>'+
                                              '<option value="500 GO">500 GO</option>'+
                                              '<option value="512 GO">512 GO</option>'+
                                              '<option value="640 GO">640 GO</option>'+
                                              '<option value="1 TO">1 TO</option>'+
                                              '<option value="2 TO">2 TO</option>'+
                                              '<option value="3 TO">3 TO</option>'+
                                              '<option value="4 TO">4 TO</option>'+
                                            '</select>'+
                                          '</div>'+
                                        '</div>'+


                                        '<div class="col-md-3">'+
                                          '<div class="form-group form-group-default form-group-default-select2 ">'+
                                            '<label class="">taille</label>'+
                                            '<select class="full-width select2-offscreen" data-placeholder="Selectionnez la taille" data-init-plugin="select2" tabindex="-1" title="">'+
                                              
                                            '</select>'+
                                          '</div>'+
                                        '</div>'+
                                        '<div class="col-md-3">'+
                                          '<div class="form-group form-group-default">'+
                                            '<label>Quantité</label>'+
                                            '<input type="number" value="1" class="form-control">'+
                                          '</div>'+
                                        '</div>'+
                                      '</div>');
                                      $('[data-init-plugin="select2"]').select2();
        })
        

        $('#marque').change(function(){
          $('.ref-loading').css('display','block');
          getAjaxField('marque','ref');
          isNeedYear($('#marque').val());
        })

        $('#add-new-ram').click(function(){
          $('#new-ram').append('<div class="row clearfix" >'+
                                        '<div class="col-md-4">'+
                                          '<div class="form-group form-group-default form-group-default-select2 ">'+
                                            '<label class="">taille memoire</label>'+
                                            '<select class="full-width select2-offscreen ram-memoire"  data-init-plugin="select2">'+
                                              '<option value=""></option>'+
                                              '<option value="1">1GO</option>'+
                                              '<option value="2">2GO</option>'+
                                              '<option value="4">4GO</option>'+
                                              '<option value="8">8GO</option>'+
                                              '<option value="16">16GO</option>'+
                                              '<option value="32">32GO</option>'+
                                              '<option value="64">64GO</option>'+
                                              '<option value="128">128GO</option>'+
                                            '</select>'+
                                          '</div>'+

                                        '</div>'+
                                        '<div class="col-md-4">'+
                                          '<div class="form-group form-group-default form-group-default-select2 ">'+
                                            '<label class="">fréquence</label>'+
                                            '<select class="full-width select2-offscreen" data-placeholder="Selectionnez une fréquence" data-init-plugin="select2">'+
                                            '</select>'+
                                          '</div>'+
                                        '</div>'+
                                        '<div class="col-md-4">'+
                                          '<div class="form-group form-group-default">'+
                                            '<label>Quantité</label>'+
                                            '<input type="number" value="1" class="form-control ram-qte">'+
                                          '</div>'+
                                       '</div>'+
                                      '</div>');
                                
                                    $('[data-init-plugin="select2"]').select2();
                                
        })
        
        var cp = 0;

        $('#btn-next').click(function(){
          //cat preview

          $('.refImage').html($('#ref option[value='+$('#ref').val()+']').text());
          var cat = $('#cat').val();
          if(cat =='op'){
            $('.cat').html('Ordinateur portable');
          }

          if(cat =='ob'){
            $('.cat').html('Ordinateur bureau');
          }

          //year of production
          var p_year = $('#production-year').val();
          $('.production-year').html(p_year);

          //stat 
          var stat = $('#stat').val();
            
          $('.stat').append(' <span class="small hint-text stat">('+stat+')</span>');
          var cat = $("#cat").val();
          if(cat == "op")
          {
            $('#num-cpu').attr('disabled','');
            $('#alimentation').css('display','none');
            $('.op').css('display','block');
            $('.ob').css('display','none');
          }
          else{
            $('#num-cpu').removeAttr('disabled');
            $('#alimentation').css('display','block');
            $('.op').css('display','none');
            $('.ob').css('display','block');
            }
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }

        });
         


});

//ajax content 
function getAjaxField(ID_field,OUTPUT_field){
            var xdata = {};
            xdata['id'] = $('#'+ID_field).val();
            xdata['field-name']= $("#"+ID_field).attr('name');
            $.ajax({
              type:'POST',
              url:'/monstock',
              data: xdata,
              dataType: "json",
              success:function(data){
                var listm =$.parseJSON(JSON.stringify(data));
                var content = '';
                for(i=0 ;i<listm.length;i++)
                {
                  content = content + '<option value='+listm[i].id+'>'+ listm[i].desc +'</option>';
                }
                console.log(listm);
                console.log(content);
                $('#'+OUTPUT_field).html('<option></option>'+content);
                $('.loading').css('display','none');
              }
            });
         }

        
function isNeedYear(ID){
    var xdata = {};
    xdata['id'] = ID;
    xdata['field-name'] = 'isNeedYear';
    $.ajax({
          type:'POST',
          url:'/monstock',
          data: xdata,
          dataType: "json",
          success:function(data){
            var listm =$.parseJSON(JSON.stringify(data));
            console.log(listm[0].product_year);
            if(listm[0].product_year){
            $(".p_y").prop("disabled", false);
            $(".p_y-container").removeClass('disabled');
            }
            else{
            $(".p_y").prop("disabled", true);
            $(".p_y-container").addClass('disabled');
            }

          }
        });

}

function getProductImage(ID){
  var xdata = {};
    xdata['id'] = ID;
    xdata['field-name'] = 'ProductImage';
    $.ajax({
          type:'POST',
          url:'/monstock',
          data: xdata,
          dataType: "json",
          success:function(data){
            var listm =$.parseJSON(JSON.stringify(data));
            console.log(listm[0].image);
            $('.ProductImage').attr('src','<?=Storage::url("photos/");?>'+listm[0].image);
            $('.loading').css('display','none');
          }
        });
}

function getCpuList(ID){
  var xdata = {};
    xdata['id'] = ID;
    xdata['field-name'] = 'CpuList';
    $.ajax({
          type:'POST',
          url:'/monstock',
          data: xdata,
          dataType: "json",
          success:function(data){
            var listm =$.parseJSON(JSON.stringify(data));
            console.log(listm);
            var content = '';
            for(i=0 ;i<listm.length;i++)
                  {
                    content = content + '<option value="'+listm[i].ref+'">'+ listm[i].ref +'</option>';
                  }
            $('#output-cpu').html('<option></option>'+content);
          }
        });
}

function getRamList(ID){
  var xdata = {};
    xdata['id'] = ID;
    xdata['field-name'] = 'RamType';
    $.ajax({
          type:'POST',
          url:'/monstock',
          data: xdata,
          dataType: "json",
          success:function(data){
            var listm =$.parseJSON(JSON.stringify(data));
            console.log(listm);
            var content='',content2 = '';
            for(i=0 ;i<listm.length;i++)
            {
              content = content + '<option value='+listm[i].id+'>'+ listm[i].desc +'</option>';
            }

            for(i=0 ;i<listm.length;i++)
            {
              content2 = content2 + '<option value='+listm[i].id+'>'+ listm[i].frequency +' Mhz </option>';
            }
            
            $('#output-Freq').html('<option></option>'+content2);   
            $('#output-ram').html('<option></option>'+content);
          }
        });
  }

  function getMonStock(){
    $.ajax({
      type: 'POST',
      url: '/getMonStock',
      dataType: "json",
      success:function(data){
        alert('ok!');
        },
      error:function(data){
        alert('Error ajax 1!');
      }
    })
  }

  function getDesc(){
    //if issperete's checked
    var desc,gpu='',htmldesc,ram=0,storage='',i,j=0,accessoires='';
    var cpu = $('#output-cpu').val();
    //getting the sum of ram
    i=1;
    while($($('.ram-memoire')[i]).val()!=null) {
      ram += parseInt($($('.ram-memoire')[i]).val()*parseInt($($('.ram-qte')[j]).val()));
      i+=2;
      j++;
    }
    //getting the storage and the 
    i=1;
    while($($('.storage-capaity')[i]).val()!=null) {
      storage += $($('.storage-capaity')[i]).val()+' ';
      i+=2;
    }

    for(i=0;i<6;i++){
      if($($('.accessoire')[i]).is(':checked')){
        accessoires+=$($('.accessoire')[i]).val()+', ';
      }
    }
    if($('#checkbox31').is(':checked')){
      gpu =', GPU : '+ $($('.gpu-marque')[1]).val()+' '+$($('.gpu-ref')[1]).val()+' '+$($('.gpu-memoire')[1]).val() ;
    }
    return 'CPU : '+cpu+', RAM : '+ram+' GO, Stokage : '+storage+gpu+', '+accessoires;
  }


//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////// this next block is just for referenece //////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  function getpreview(){
    var preview,ram=0,i=1,j=0;
    //ram sum
    while($($('.ram-memoire')[i]).val()!=null){
      ram+= parseInt($($('.ram-memoire')[i]).val()*parseInt($($('.ram-qte')[j]).val()));
      i+=2;
      j++;
    }
    alert(ram);
    while($($('.ram-memoire')[i]).val()!=null){
      ram+= parseInt($($('.ram-memoire')[i]).val()) ;
      i+=2;
    }
  }

  
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////// end of block ////////////////////////////
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
  

  function addArticle(){
    var xdata = {};
    xdata['idUser'] =  '{{ Auth::user()->id }}' ;
    xdata['qte'] = $('#qte').val();
    xdata['refid'] = $('#ref').val();
    xdata['etat'] = $('#etat').val();
    xdata['cpu'] = 'test';
    xdata['nbrCpu'] = $('#num-cpu').val();
    xdata['ram'] = $('#').val();
    xdata['stockage'] = $('#').val();
    xdata['gpu'] = $('#gpu').val();
    xdata['resolution'] = $('#resolution').val();
    xdata['clavier'] = $('#clavier').val();
    xdata['tactile'] = $('#tactile').is(':checked');
    xdata['3D'] = $('#3D').is(':checked');
    xdata['camera'] = $('#').is(':checked');
    xdata['retro'] = $('#retro').is(':checked');
    xdata['gsm'] = $('#gsm').is(':checked');
    xdata['empreinte'] = $('#empreinte').is(':checked');
    xdata['sas'] = $('#sas').is(':checked');
    xdata['cRaid'] = $('#cRaid').is(':checked');
    xdata['cReseau'] = $('#cReseau').is(':checked');
    xdata['cFibre'] = $('#cFibre').is(':checked');
    xdata['sasprice'] = $('#sasprice').val();
    xdata['cRaidprice'] = $('#cRaidprice').val();
    xdata['cReseauprice'] = $('#cReseauprice').val();
    xdata['cFibreprice'] = $('#cFibreprice').val();
    xdata['prixAchat'] = $('#prixAchat').val();
    xdata['prixRevendeur'] = $('#prixRevendeur').val();
    xdata['prixVente'] = $('#prixVente').val();
    xdata['preview']= getDesc();
    if($('#isSeperete').is(':checked')){
      xdata['isSeperete'] = 1;
    }
    else
    {
      xdata['isSeperete'] = 0;
    }
    
    if($('#indexed').is(':checked')){
      xdata['indexed'] = 1;
    }
    else
    {
      xdata['indexed'] = 0;
    }
    
    console.log(xdata);
    $.ajax({
      type: 'POST',
      url: '/addtomonstock',
      data: xdata,
      dataType: "json",
      success:function(data){
        alert('ok!');
        },
      error:function(data){
        alert('Error ajax 1!');
      }
    })

  }

function showstock(){
    alert('<?php echo Auth::user()->id;?>');
  $.ajax({
      type: 'POST',
      url: '/getMonStock',
      data: xdata,
      dataType: "json",
      success:function(data){
        var content =$.parseJSON(JSON.stringify(data));
        var set = [];
        for(i=0;i<content.length;i++){
          set[i] = {'0':'<a href="#">'+content[i][0]+'</a>','1':content[i][1],'2':content[i][2],'3':content[i][3],'4':content[i][4]+' DH','5':content[i][5]+' DH','6':content[i][6]+' DH','7':content[i][7]};
        }
        console.log(set);
        console.log(content);
        var table = $('#tableWithExportOptions').DataTable();
          table.rows.add(
            set
          ).draw();
        },
      error:function(data){
        alert('Error ajax 1!');
      }
    })
}

$('.time').html(function(){var d = new Date();

var month = d.getMonth()+1;
var day = d.getDate();

return output = 
    ((''+day).length<2 ? '0' : '') + day + '-' +
    ((''+month).length<2 ? '0' : '') + month + '-' +
    d.getFullYear()  ;
    
    })

$(function(){
  getAjaxField('cat','marque');
  })