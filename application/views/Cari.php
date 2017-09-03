<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Cari</title>
  <?php echo $this->load->view('common/head', '', TRUE);?>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/waves/waves.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/examples/css/pages/user.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="<?php echo site_url(); ?>assets/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="<?php echo site_url(); ?>assets/global/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="<?php echo site_url(); ?>assets/global/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="site-navbar-small page-user">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <?php echo $this->load->view('common/menu', '', TRUE);?>
  <!-- Page -->
  <div class="page animsition">
    <div class="page-content">
      <!-- Panel -->

      <div class="example example-buttons">

      </div>
      <div class="panel">
        <div class="panel-body">

          <div class="nav-tabs-horizontal">

            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
              <li class="active" role="presentation"><a data-toggle="tab" href="#all_contacts" aria-controls="all_contacts"
                role="tab">Ditemukan</a></li>

              </li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane animation-fade active" id="all_contacts" role="tabpanel">
                <ul class="list-group">
              				<div class="panel">
                          <header class="panel-heading">
                          <br>
                          </header>
                          <div class="panel-body">
                            <label class="form-inline">Show
                              <select id="exampleShow" class="form-control input-sm">
                                <option value="5">5</option>
                                <option value="10" selected="selected">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                              </select>
                              entries
                            </label>
                            <table class="" id="examplePagination" data-page-size="10">
                              <thead>

                              </thead>
                              <tbody>
                                <tr>

                                  <td>
                                    <li class="list-group-item">
                                      <div class="media">
                                        <div class="media-left">
                                          <div class="avatar avatar-online">
                                            <img src="<?php echo site_url(); ?>assets/global/portraits/1.jpg" alt="...">
                                            <i class="avatar avatar-busy"></i>
                                          </div>
                                        </div>

                                        <div class="media-body">

                                          <h4 class="media-heading">
                                            Nama
                                            <small>NPM</small>
                                          </h4>
                                          <p>
                                            Judul
                                          </p>
                                          <div>
                                              <h6>
                                            <a class="text-action" href="javascript:void(0)">
                                            <i class="icon icon-color md-email" aria-hidden="true"> Prodi</i>
                                            </a>
                                            <a class="text-action" href="javascript:void(0)">
                                              <i class="icon icon-color md-email" aria-hidden="true"> Bidang Minat</i>
                                            </a>


                                          </div>
                                        </div>
                                        <div class="media-right">
                                          <button type="button" class="btn btn-primary btn-sm">Follow</button>
                                        </div>
                                      </div>
                                    </li>

                                  </td>

                                </tr>



                                <tr>

                                  <td>
                                    <li class="list-group-item">
                                      <div class="media">
                                        <div class="media-left">
                                          <div class="avatar avatar-online">
                                            <img src="<?php echo site_url(); ?>assets/global/portraits/1.jpg" alt="...">
                                            <i class="avatar avatar-busy"></i>
                                          </div>
                                        </div>

                                        <div class="media-body">

                                          <h4 class="media-heading">
                                            Nama
                                            <small>NPM</small>
                                          </h4>
                                          <p>
                                            Judul
                                          </p>
                                          <div>
                                              <h6>
                                            <a class="text-action" href="javascript:void(0)">
                                            <i class="icon icon-color md-email" aria-hidden="true"> Prodi</i>
                                            </a>
                                            <a class="text-action" href="javascript:void(0)">
                                              <i class="icon icon-color md-email" aria-hidden="true"> Bidang Minat</i>
                                            </a>


                                          </div>
                                        </div>
                                        <div class="media-right">
                                          <button type="button" class="btn btn-primary btn-sm">Follow</button>
                                        </div>
                                      </div>
                                    </li>

                                  </td>

                                </tr>


                              </tbody>
                              <tfoot>
                                <tr>
                                  <td colspan="5">
                                    <div class="text-right">
                                      <ul class="pagination"></ul>
                                    </div>
                                  </td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                        </div>

                    </ul>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    </div>
  </div>
  <!-- End Page -->
  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© 2016 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
    <div class="site-footer-right">
      Crafted with <i class="red-600 icon md-favorite"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
  </footer>
  <!-- Core  -->
  <script src="<?php echo site_url(); ?>assets/global/vendor/jquery/jquery.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/animsition/animsition.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/waves/waves.js"></script>
  <!-- Plugins -->
  <script src="<?php echo site_url(); ?>assets/global/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/intro-js/intro.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/aspaginator/jquery.asPaginator.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/global/vendor/footable/footable.all.min.js"></script>
  <!-- Scripts -->
  <script src="<?php echo site_url(); ?>assets/global/js/core.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/site.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/sections/menu.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/sections/menubar.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/sections/sidebar.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/configs/config-colors.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/configs/config-tour.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/asscrollable.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/animsition.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/slidepanel.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/switchery.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/tabs.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/aspaginator.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/plugins/responsive-tabs.js"></script>
    <script src="<?php echo site_url(); ?>assets/assets/examples/js/tables/footable.js"></script>
  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>
