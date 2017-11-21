<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>virtual stock</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta content="" name="description" />
  <meta content="" name="author" />

  <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- start table-->
  <link href="assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet"
    type="text/css" />
  <link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"
  />
  <!-- end table-->
  <!-- start wedget-->
  <link href="assets/plugins/jquery-metrojs/MetroJs.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- end wedget-->
  <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
  <link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />

</head>

<body class="fixed-header ">
  <!-- BEGIN SIDEBPANEL-->
  <nav class="page-sidebar" data-pages="sidebar">
    <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
    <div class="sidebar-overlay-slide from-top" id="appMenu">
      <div class="row">
        <div class="col-xs-6 m-t-20 no-padding">
          <a href="#" class="p-l-40"><img src="assets/img/demo/calendar_app.svg" alt="socail">
          </a>
        </div>
        <div class="col-xs-6 m-t-20 no-padding">
          <a href="#" class="p-l-10"><img src="assets/img/demo/add_more.svg" alt="socail">
          </a>
        </div>
      </div>
    </div>
    <!-- END SIDEBAR MENU TOP TRAY CONTENT-->

    <!-- BEGIN SIDEBAR MENU HEADER-->
    <div class="sidebar-header">
      <!-- logo -->
      <img src="assets/img/logo.png" alt="logo" class="brand" data-src="assets/img/logo.png" data-src-retina="assets/img/logo.png"
        width="80">
      <!--end logo -->
      <div class="sidebar-header-controls">
        <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
        <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
      </div>
    </div>
    <!-- END SIDEBAR MENU HEADER-->

    <!-- START SIDEBAR MENU -->
    <div class="sidebar-menu">
      <!-- BEGIN SIDEBAR MENU ITEMS-->
      <ul class="menu-items">
        <li class="m-t-30 ">
          <a href="index.html" class="detailed">
            <span class="title">Dashboard</span>
          </a>
          <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
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
              <!--logo mobil -->
              <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="80">
              <!-- end logo mobil -->
            </div>
          </div>
        </div>
        <!-- RIGHT SIDE -->
        <div class="pull-right full-height visible-sm visible-xs">
          <!-- START ACTION BAR -->
          <div class="header-inner">
            <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
              <span class="icon-set menu-hambuger-plus"></span>
            </a>
          </div>
          <!-- END ACTION BAR -->
        </div>
      </div>
      <!-- END MOBILE CONTROLS -->
      <div class=" pull-left sm-table hidden-xs hidden-sm">
        <div class="header-inner">
          <!-- logo -->
          <div class="brand inline">
            <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="90">
          </div>
          <!-- end logo -->
          <!-- START NOTIFICATION LIST -->
          <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">
            <li class="p-r-15 inline">
              <div class="dropdown">
                <a href="javascript:;" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown">
                  <span class="bubble"></span>
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
          <a href="#" class="search-link" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a></div>
      </div>
      <div class=" pull-right">
        <!-- START User Info-->
        <div class="visible-lg visible-md m-t-10">
          <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
            <span class="semi-bold">David</span> <span class="text-master">Nest</span>
          </div>
          <div class="dropdown pull-right">
            <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
            </span>
              </button>
            <ul class="dropdown-menu profile-dropdown" role="menu">
              <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
              </li>
              <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
              </li>
              <li><a href="#"><i class="pg-signals"></i> Help</a>
              </li>
              <li class="bg-master-lighter">
                <a href="{{ url('/logout') }}" class="clearfix" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="pull-left">Logout</span>
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
        <div class="container-fluid padding-25 sm-padding-10 ">
          <!-- START PANEL -->
          <div class="row">
            <div class="col-sm-12 col-md-9  bg-white">
              <div class="panel panel-transparent">
                <div class="panel-heading">
                  <div class="panel-title">Table de stockage
                  </div>
                  <div class="export-options-container pull-right"></div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <!--bigin table-->
                  <table class="table table-striped display" id="tableWithExportOptions">
                    <thead>
                      <tr>
                        <th>Article</th>
                        <th>Société</th>
                        <th>Description</th>
                        <th>Prix revendeur</th>
                        <th>Quantité</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center"> 4</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center"> 4</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center"> 4</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center"> 4</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center"> 4</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center"> 4</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center"> 4</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center"> 4</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                      </tr>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center"> 4</td>
                        <td class="center">X</td>
                      </tr>
                      <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                      </tr>
                    </tbody>
                  </table>
                  <!--end table-->
                </div>
              </div>
              <!-- END PANEL -->
            </div>
            <!--START wedget -->
            <div class="col-sm-12 col-md-3">
              <div class="ar-1-1 widget-1-wrapper">
                <div class="widget-3 panel no-border bg-complete no-margin widget-loader-bar">
                  <div class="panel-body no-padding">
                    <div class="metro live-tile" data-mode="carousel" data-start-now="true" data-delay="3000">
                      <div class="slide-front tiles slide active">
                        <div class="padding-30">
                          <div class="pull-top">
                            <div class="pull-left visible-lg visible-xlg">
                              <i class="pg-map"></i>
                            </div>
                            <div class="pull-right">
                              <ul class="list-inline ">
                                <li>
                                  <a href="#" class="no-decoration"><i class="pg-comment"></i>
                                        </a>
                                </li>
                                <li>
                                  <a href="#" class="widget-3-fav no-decoration"><i class="pg-like"></i>
                                        </a>
                                </li>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="pull-bottom p-b-30">
                            <p class="p-t-10 fs-12 p-b-5 hint-text">21 Jan</p>
                            <h3 class="no-margin text-white p-b-10">Carefully
                              <br>designed for a
                              <br>great
                              <span class="semi-bold">experience</span>
                            </h3>
                          </div>
                        </div>
                      </div>
                      <div class="slide-back tiles">
                        <div class="padding-30">
                          <div class="pull-top">
                            <div class="pull-left visible-lg visible-xlg">
                              <i class="pg-map"></i>
                            </div>
                            <div class="pull-right">
                              <ul class="list-inline ">
                                <li>
                                  <a href="#" class="no-decoration"><i class="pg-comment"></i>
                                        </a>
                                </li>
                                <li>
                                  <a href="#" class="widget-3-fav no-decoration"><i class="pg-like"></i>
                                        </a>
                                </li>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="pull-bottom p-b-30">
                            <p class="p-t-10 fs-12 p-b-5 hint-text">21 Jan</p>
                            <h3 class="no-margin text-white p-b-10">A whole new
                              <br>
                              <span class="semi-bold">page</span>
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            




          </div>
          <!-- END CONTAINER FLUID -->
        </div>
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>


    <!-- END PAGE CONTAINER -->
    <!--START QUICKVIEW -->
    <div class="container-fluid container-fixed-lg footer">
      <div class="copyright sm-text-center">
        <p class="small no-margin pull-left sm-pull-reset">
          <span class="hint-text">Copyright &copy; 2014 </span>
          <span class="font-montserrat">REVOX</span>.
          <span class="hint-text">All rights reserved. </span>
          <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
        </p>
        <p class="small no-margin pull-right sm-pull-reset">
          <a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Love ®</span>
        </p>
        <div class="clearfix"></div>
      </div>
    </div>

    <!-- START recherch -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png"
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
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>

          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
    </div>
    <!-- end recherch !-->

    <!--js de menu et recherch -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- js tables-->
    <script src="assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
    <!-- js wedget-->
    <script src="assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>

    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/js/datatables.js" type="text/javascript"></script>
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <script src="assets/js/widget.js"></script>
    <!-- END PAGE LEVEL JS -->
</body>

</html>