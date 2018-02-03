<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Upload Skripsi/ Tugas Akhir</title>
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
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-responsive/dataTables.responsive.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/examples/css/tables/datatable.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/toastr/toastr.css">
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
<body class="site-navbar-small " >
<?php echo $this->session->flashdata('pesan')?>

<?php echo $this->load->view('common/menu', '', TRUE);?>


  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Tugas Akhir / Skripsi</h1>


    </div>
    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel  ">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="clearfix hidden-xs"></div>
            <div class="col-sm-10 col-md-10">
              <!-- Example Horizontal Form -->


              <?php
                 $i=0;
                 foreach($ta as $ta){
                 $i++;
               ?>
                <div class="example">

                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Judul</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="textarea" name="textarea" rows="4" disabled><?php echo $ta->judul?></textarea>
                        </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Abstrak</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="textarea" name="textarea" disabled rows="10"><?php echo $ta->abstrak?></textarea>
                      </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Prodi</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="select" disabled required name="bidang_minat">
                        <option value=""><?php echo $ta->nama_prodi?></option>
                          </select>
                      </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Bidang minat</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="select" disabled required name="bidang_minat">
                        <option value=""><?php echo $ta->nama_bidang_minat?></option>
                          </select>
                      </div>
                    </div>
                    <?php
                       $i=0;
                       foreach($dosen as $dosen){
                       $i++;
                     ?>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Dosen Pembimbing <?php echo $dosen->pembimbing?></label>
                      <div class="col-sm-9">

                          <select class="form-control" disabled id="select" required name="dosen1">
                                 <option value=""><?php echo $dosen->nama?></option>

                              </select>

                      </div>
                    </div>
                    <?php
                  }
                     ?>
                     <div class="form-group form-material">
                       <label class="col-sm-3 control-label">Tanggal Sidang</label>
                       <div class="col-sm-9">
                         <select class="form-control" id="select" disabled required name="bidang_minat">
                         <option value=""><?php echo $ta->tgl_sidang?></option>
                           </select>
                       </div>
                     </div>

                     <?php
                     $level=$this->session->userdata('level');
                     if($level!=null){

                     ?>
                     <div class="form-group ">
                       <label class="col-sm-3 control-label"><b>Baca</b></label>
                       <div class="col-sm-9">
                         <object width="100%" height="400" readonly type="application/pdf" data="<?php echo site_url();?>uploads/<?php echo $ta->pdf?>">
                           <embed src="<?php echo site_url();?>uploads/<?php echo $ta->pdf?>" type="application/pdf" />
                         </object>
                       </div>
                     </div>
                   <?php }else{ ?>
                     <br>
                     <br>
                     <div class="form-group ">
                       <label class="col-sm-3 control-label"><b>Baca</b></label>
                       <div class="col-sm-9">
                         <div role="alert" class="alert dark alert-success alert-dismissible">
                      <button aria-label="Close" data-dismiss="alert" class="close" type="button">
                        <span aria-hidden="true">×</span>
                      </button>
                      <h4>Pesan</h4>
                      <p>
                            Untuk Membaca Skripsi/ Ta Anda Harus Login Terlebih Dahulu
                      </p>
                      <p class="margin-top-15">
                        <a href="<?php echo site_url(); ?>login"><button class="btn btn-success btn-inverse waves-effect waves-light" type="button">Login</button></a>
                        <a href="<?php echo site_url(); ?>daftar"><button class="btn btn-link white waves-effect waves-light" type="button">Daftar</button></a>
                      </p>
                    </div>
                  <?php }?>





                    </div>
                  </div>





                    <?php
                    $level=$this->session->userdata('level');

                    if($ta->verifikasi==0 && $level==0){
                    ?>
                    <div class="form-group form-material">
                      <div class="col-sm-9 col-sm-offset-3">
                        <a href="<?php echo base_url()?>upload/batalkan?id=<?php echo $ta->npm?>&&file=<?php echo $ta->pdf?>"><button type="submit" class="btn btn-warning waves-effect waves-light">Batalkan</button></a>
                      </div>
                    </div>

                  <?php
                  } ?>

                </div>
                <?php
                  }
                 ?>
              <!-- End Example Horizontal Form -->
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End Page -->
  <!-- Footer -->
  <?php echo $this->load->view('common/footer', '', TRUE);?>
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
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-responsive/dataTables.responsive.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-tabletools/dataTables.tableTools.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootbox/bootbox.js"></script>
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
  <script src="<?php echo site_url(); ?>assets/global/js/components/datatables.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/examples/js/tables/datatable.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/examples/js/uikit/icon.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/toastr/toastr.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/toastr.js"></script>
</body>
</html>
