<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Page d'inscription</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="{{ URL::asset('assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('assets/plugins/boostrapv3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <link href="{{ URL::asset('assets/plugins/bootstrap-select2/select2.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <link href="{{ URL::asset('assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <link href="{{ URL::asset('pages/css/pages-icons.css') }}" rel="stylesheet" type="text/css">
  <link class="main-stylesheet" href="{{ URL::asset('pages/css/pages.css') }}" rel="stylesheet" type="text/css" />
  <link class="main-stylesheet" href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
  <!--[if lte IE 9]>
        <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
  <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
</head>

<body class="fixed-header ">
  <div class="register-container full-height sm-p-t-30">
    <div class="container-sm-height full-height">
      <div class="row row-sm-height">
        <div class="col-sm-12 col-sm-height col-middle">
          <a href="../"><img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo" data-src="{{ URL::asset('assets/img/logo.png') }}" data-src-retina="{{ URL::asset('assets/img/logo_2x.png') }}" width="78" height="auto"></a>
          
          @yield('content')
          
        </div>
      </div>
    </div>
  </div>

  
  <!-- BEGIN VENDOR JS -->
  <script src="{{ URL::asset('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/jquery/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/boostrapv3/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/jquery-bez/jquery.bez.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-select2/select2.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/plugins/classie/classie.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/switchery/js/switchery.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
  <!-- END VENDOR JS -->
  <script src="{{ URL::asset('pages/js/pages.min.js') }}"></script>
  <script>
    $(function()
    {
      $('#form-register').validate()
    })
    </script>
</body>

</html>