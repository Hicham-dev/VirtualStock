<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>@yield('title') </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"
  />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta content="" name="description" />
  <meta content="" name="author"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="http://virtuelstock.ma/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
  <link href="http://virtuelstock.ma/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="http://virtuelstock.ma/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="http://virtuelstock.ma/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
  @yield('css')
  <!-- start table-->
  <link href="http://virtuelstock.ma/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="http://virtuelstock.ma/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
  <link href="http://virtuelstock.ma/assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
  <!-- end table-->
  <!-- start wedget-->
  <link href="http://virtuelstock.ma/assets/plugins/jquery-metrojs/MetroJs.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- end wedget-->
  <link href="http://virtuelstock.ma/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
  <link class="main-stylesheet" href="http://virtuelstock.ma/pages/css/pages.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="http://virtuelstock.ma/assets/css/style.css" class='costume-stylesheet'>
</head>

<script>
  window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token()
  ]) !!};
</script>

<body class="fixed-header ">
  <!-- BEGIN SIDEBPANEL-->
  <nav class="page-sidebar" data-pages="sidebar">

    <!-- BEGIN SIDEBAR MENU HEADER-->
    <div class="sidebar-header">
      <!-- logo -->
      <img src="http://virtuelstock.ma/assets/img/logo-white.png" alt="logo" class="brand" data-src="http://virtuelstock.ma/assets/img/logo-white.png" data-src-retina="http://virtuelstock.ma/assets/img/logo.png"
        width="80">
        <!--end logo -->
        <div class="sidebar-header-controls">
          <button style="margin-left: 50px;" type="button" class="text-left btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
    </div>
    <!-- END SIDEBAR MENU HEADER-->

    <!-- START SIDEBAR MENU -->
    <div class="sidebar-menu">
      <!-- BEGIN SIDEBAR MENU ITEMS-->
      <ul class="menu-items">
        <li class="m-t-30 ">
          <a href="/accueil" class="detailed">
            <span class="title">Accueil</span>
            <span class="details">0 nouveau article</span>
          </a>
          <span class="@yield('accueil') icon-thumbnail"><i class="pg-home"></i></span>
        </li>
        <li>
          <a href="/dashboard" class="detailed">
            <span class="title" style="width: 150px;">Tableau de bord</span>
          </a>
          <span class="@yield('tdb') icon-thumbnail"><i class="fa fa-tasks" aria-hidden="true"></i></span>
        </li>
        <li>
          <a href="/monstock/{{session('stock')}}" class="detailed">
            <span class="title">Mon Stock</span>
            <span class="details">0 article</span>
          </a>
          <span class="@yield('monstock') icon-thumbnail"><i class="fa fa-th-large" aria-hidden="true"></i></span>
        </li>
        <li>
          <a href="/commandes" class="detailed">
            <span class="title" style="width: 150px;">Mes commandes</span>
            <span class="details">0 commande</span>
          </a>
          <span class="@yield('commandes') icon-thumbnail"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
        </li>
        <li>
          <a href="/masociete" class="detailed">
            <span class="title" style="width: 150px;">Ma société</span>
          </a>
          <span class="@yield('societe') icon-thumbnail"><i class="fa fa-building" aria-hidden="true"></i></span>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
  </nav>
  <!-- END SIDEBAR -->
  <!-- END SIDEBPANEL-->



  <div class="page-container ">
    <!-- START HEADER -->
    <div class="header ">
      <!-- START MOBILE CONTROLS -->
      <div class="container-fluid relative">
        <!-- LEFT SIDE -->
        <div class="pull-left full-height visible-sm visible-xs">
          <!-- START ACTION BAR -->
          <div class="header-inner">
            <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
              <span class="icon-set menu-hambuger"></span>
            </a>
          </div>
          <!-- END ACTION BAR -->
        </div>
        <div class="pull-center hidden-md hidden-lg">
          <div class="header-inner">
            <div class="brand inline">
              <!--logo mobile -->
              <img src="http://virtuelstock.ma/assets/img/logo.png" alt="logo" data-src="http://virtuelstock.ma/assets/img/logo.png" data-src-retina="http://virtuelstock.ma/assets/img/logo_2x.png" width="80">
              <!-- end logo mobile -->
            </div>
          </div>
        </div>


      </div>
      <!-- END MOBILE CONTROLS -->
      <div class=" pull-left sm-table hidden-xs hidden-sm">
        <div class="header-inner">
          <!-- logo -->
          <div class="brand inline">
            <img src="http://virtuelstock.ma/assets/img/logo.png" alt="logo" data-src="http://virtuelstock.ma/assets/img/logo.png" data-src-retina="http://virtuelstock.ma/assets/img/logo_2x.png" width="90">
          </div>
          <!-- end logo -->
          <!-- START NOTIFICATION LIST -->
          <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">
            <li class="p-r-15 inline">
              <div class="dropdown">
                <a href="javascript:;" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown">
                  <!--<span class="bubble"></span>-->
                </a>
                <!-- START Notification Dropdown -->
                <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                  <!-- START Notification -->
                  <div class="notification-panel">
                    <!-- START Notification Body-->
                    <div class="notification-body scrollable">
                      <!-- START Notification Item-->
                      <div class="notification-item unread clearfix">
                        <!-- START Notification Item-->
                        <div class="heading open">
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item Right Side-->
                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                    </div>
                    <!-- END Notification Body-->
                    <!-- START Notification Footer-->
                    <div class="notification-footer text-center">
                      <a href="#" class="">Read all notifications</a>
                      <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                        <i class="pg-refresh_new"></i>
                      </a>
                    </div>
                    <!-- START Notification Footer-->
                  </div>
                  <!-- END Notification -->
                </div>
                <!-- END Notification Dropdown -->
              </div>
            </li>
            <li class="p-r-15 inline">
              <a href="#" class="icon-set clip "></a>
            </li>
            <li class="p-r-15 inline">
              <a href="#" class="icon-set grid-box"></a>
            </li>
          </ul>
          <!-- END NOTIFICATIONS LIST -->
          <!-- recherche -->
          <a href="#" class="search-link" data-toggle="search"><i class="pg-search"></i>Taper n'importe où pour <span class="bold">rechercher</span></a></div>
      </div>
      <div class=" pull-right">
        <!-- START User Info-->
        <div class="visible-lg visible-md m-t-10">
          <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
            <span class="semi-bold">Bonjour, {{ Auth::user()->user_name }}</span>
          </div>
          <div class="dropdown pull-right">
            <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="http://virtuelstock.ma/assets/img/profiles/b.jpg" alt="" data-src="http://virtuelstock.ma/assets/img/profiles/b.jpg" data-src-retina="http://virtuelstock.ma/assets/img/profiles/b2x.jpg" width="32" height="32">
            </span>
              </button>
            <ul class="dropdown-menu profile-dropdown" role="menu">
              <li><a href="#"><i class="pg-settings_small"></i> Paramètres</a>
              </li>
              <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
              </li>
              <li><a href="#"><i class="pg-signals"></i> Aide</a>
              </li>
              <li class="bg-master-lighter">
                <a href="{{ url('/logout') }}" class="clearfix" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <span class="pull-left">Déconnexion</span>
                  <span class="pull-right"><i class="pg-power"></i></span>
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </div>
        </div>
        <!-- END User Info-->
      </div>
    </div>
    <!-- END HEADER -->
    <!-- END PAGE CONTENT WRAPPER -->


    <div class="page-content-wrapper ">
      <!-- START PAGE CONTENT -->
      <div class="content ">
        <!-- START CONTAINER FLUID -->
        
        <div class="container-fluid container-fixed-lg">
        <ul class="breadcrumb">
          <li>
            <a href="/accueil">Home</a>
          </li>
          @yield('breadcrumb')
        </ul>


          <!-- START PANEL -->

          @yield('content')

          <!-- END CONTAINER FLUID -->
        </div>
            <div class="container-fluid container-fixed-lg footer">
              <div class="copyright sm-text-center">
                <p class="small no-margin pull-left sm-pull-reset">
                  <span class="hint-text">Copyright &copy; 2017 </span>
                  <span class="font-montserrat">Wild Technologie groupe</span>.
                  <span class="hint-text">Tous les droits sont réservés. </span>
                  <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Conditions d'utilisation</a> | <a href="#" class="m-l-10">Confidentialité</a></span>
                </p>
                <p class="small no-margin pull-right sm-pull-reset">
                  <span class="hint-text">Powered by LOVE &amp; </a> <a href="#" >Wild Code®</a>
              </p>
              <div class="clearfix"></div>
            </div>
          </div>
        <!-- END PAGE CONTENT WRAPPER -->
      </div>


      <!-- END PAGE CONTAINER -->
      <!--START QUICKVIEW -->


    <!-- START recherch -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="http://virtuelstock.ma/assets/img/logo.png" alt="logo" data-src="http://virtuelstock.ma/assets/img/logo.png" data-src-retina="http://virtuelstock.ma/assets/img/logo_2x.png"
            width="90">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="liveSearch" name='liveSearch' class="no-border overlay-search bg-transparent" placeholder="Recherche..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="localSearch" type="checkbox">
              <label for="localSearch"><i class="fa fa-search"></i> Recherche dans votre stock</label>
            </div>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions pour </strong>
            </span>
            <span id="overlay-suggestions"></span>
            <span id='suggestions-list'></span>
            <br>
            <div class="search-results m-t-40">
              <p class="bold">Pages Search Results</p>
              <div class='row row row-eq-height'>
                  <!-- result -->
                
              </div>
            </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
    </div>
    <!-- end recherch !-->

    <!--js de menu et recherch -->
    <script src="http://virtuelstock.ma/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="http://virtuelstock.ma/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="http://virtuelstock.ma/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="http://virtuelstock.ma/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="http://virtuelstock.ma/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://virtuelstock.ma/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="http://virtuelstock.ma/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="http://virtuelstock.ma/assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="http://virtuelstock.ma/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="http://virtuelstock.ma/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="http://virtuelstock.ma/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="http://virtuelstock.ma/assets/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="http://virtuelstock.ma/assets/plugins/classie/classie.js"></script>
    <script src="http://virtuelstock.ma/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="http://virtuelstock.ma/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script type="text/javascript" src="http://virtuelstock.ma/assets/plugins/dropzone/dropzone.min.js"></script>
    <script type="text/javascript" src="http://virtuelstock.ma/assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="http://virtuelstock.ma/assets/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
    <!-- js tables-->
    <script src="http://virtuelstock.ma/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="http://virtuelstock.ma/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="http://virtuelstock.ma/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://virtuelstock.ma/assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="http://virtuelstock.ma/assets/plugins/datatables-responsive/js/lodash.min.js"></script>
    <!-- js wedget-->
    <script src="http://virtuelstock.ma/assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>

    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="http://virtuelstock.ma/pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="http://virtuelstock.ma/assets/js/datatables.js" type="text/javascript"></script>
    @yield('script')
    <script src="http://virtuelstock.ma/assets/js/scripts.js" type="text/javascript"></script>

    <!--<script src="http://virtuelstock.ma/assets/js/widget.js"></script>-->
    <!-- END PAGE LEVEL JS -->
</body>

</html>