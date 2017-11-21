<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>pages d'authentification </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta content="" name="description" />
  <meta content="" name="author" />
  <!-- actualise-->
  <link href="{{ URL::asset('assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('assets/plugins/boostrapv3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
  <link class="main-stylesheet" href="{{ URL::asset('pages/css/pages.css') }}" rel="stylesheet" type="text/css" />
  <link class="main-stylesheet" href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

</head>
<body class="fixed-header ">
  <!--Login Background Pic Wrapper-->
  <div class="login-wrapper ">
    <div class="bg-pic">
      <!-- php-->
      <?php 
        $xml=simplexml_load_file("http://www.bing.com/HPImageArchive.aspx?format=xml&idx=0&n=1&mkt=en-US");
        $bingimage = $xml->image[0]->url;
        $bingimage=str_replace('1366x768','1920x1080',$bingimage);
        echo '<img src="http://www.bing.com/'.$bingimage.'" alt="Bing Image" class="lazy"/>'
      ?>
      <!--end php-->

     <!--login-box-->
      <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20 login-box">
        <h2 class="semi-bold text-white">
          Virtual Stock rendent facile de profiter de ce qui compte le plus dans la vie</h2>
        <p class="small">
          Virtual Stock affichées sont uniquement à des fins de représentation seulement, Tous les travaux copyright de leur propriétaire
          respectif, sinon © 2016-2017 REVOX.
        </p>
      </div>
      <!--END login-box-->
    </div>
    <!-- END Login Background Pic Wrapper-->

    <!-- START Login Right Container-->
    <div class="login-container bg-white">
      <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <!-- START LOGO -->
        <img src="pages/img/logo.png" alt="virtual stock" width="150px">
        <!-- END LOGO-->
        <p class="p-t-35">Connectez-vous à votre compte de Virtual Stock</p>
        <div class="row">
          <div class="col-sm-6  facebook-col">
            <button class="btn-animated from-top fa fa-facebook btn-facebook" type="submit"><span>S'authentifier avec <br> facebook</span> </button>
          </div>
          <div class="col-sm-6 google-col">
            <button class="btn btn-danger btn-animated from-top fa fa-google-plus" type="submit"> <span>S'authentifier avec <br> Google</span></button>
          </div>
        </div>
        <!-- START Login Form -->
        <form id="form-login" class="p-t-15" role="form" method="POST" action="{{ url('/') }}">
          <!-- START Form Control-->
          {{ csrf_field() }}

          <div class="form-group form-group-default">
            <label>Identifier</label>
            <div class="controls">
              <input type="text" name="user_name" placeholder="Nom d'utilisateur" class="form-control" value="{{ old('email') }}" required>
            </div>
          </div>
          <!-- END Form Control-->
          <!-- START Form Control-->
          <div class="form-group form-group-default">
            <label>Mot de passe</label>
            <div class="controls">
              <input type="password" class="form-control" name="password" placeholder="Lettres de créance" required>
            </div>
          </div>
          @if ($errors->has('user_name')||$errors->has('password'))
            <div class="row">
              <div class="col-sm-12">
                <div class="errors-login">
                  <label for="checkbox1">Nom d'utilisateur ou mot de passe incorrect</label>
                </div>
              </div>
            </div>
          @endif
          <!-- START Form Control-->
          <div class="row">
            <div class="col-sm-6">
              <div class="checkbox ">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="checkbox1">
                <label for="checkbox1">Me tenir connecté</label>
              </div>
            </div>
            <div class="col-sm-6 text-right">
              <a href="#" class="text-info small">Aidez-moi? Contacter l'assistance technique</a>
            </div>
          </div>
          <!-- END Form Control-->
          <button class="btn btn-primary btn-cons m-t-10" type="submit">se connecter</button>
        </form>
        <!--END Login Form-->
        <div class="pull-bottom sm-pull-bottom">
          <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
            <div class="row">
              <div class="col-xs-2 small-logo-main">
                <img src="pages/img/logo.png"alt="virtual stock"width="60px">
              </div>
              <div class="col-xs-10 ">
                <p>
                  <small id="anotherElement">
								<strong><a href="/inscription" class="subscribtion">Créez un compte de Virtual Stock.</a></strong> Si vous avez un compte facebook ou un compte Google, connectez-vous à ce processus.
								</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Login Right Container-->
  </div>
  <!-- BEGIN VENDOR JS -->
  <script src="{{ URL::asset('assets/plugins/jquery/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/boostrapv3/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
  <!-- END VENDOR JS -->
  <script src="{{ URL::asset('pages/js/pages.min.js') }}"></script>
  <script>
    $(function(){
      $('#form-login').validate();
    })
   </script>
</body>
</html>