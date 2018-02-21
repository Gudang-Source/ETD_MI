<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Prodi extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();

         $this->load->model('M_Prodi');
         $this->load->model('M_Bidang_Minat');

  	  }


      public function index(){
        $admin=$this->session->userdata('level');
        $data['lihat'] = $this->M_Prodi->lihat_prodi();

        if($admin!=2){
           redirect("login/logout");
          }

       	$this->load->view('Prodi',$data);
      }

      public function edit(){
        $id=$_GET ['id'];
        $data['lihat'] = $this->M_Prodi->lihat_per_prodi($id);
       	$this->load->view('edit_prodi',$data);
      }

      public function proses_tambah_prodi(){
        $config['upload_path']   = './assets/Image';
        $config['allowed_types'] = 'jpg|JPD|JEPG|PNG|png';
        $config['max_size']      = 20000;
        $config['max_width']     = 10240;
        $config['max_height']    = 7680;
        $new_name =$_FILES["gambar"] ['name'];
        $username=$this->session->userdata('login');

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar')) {

             $this->upload();
             redirect('prodi');
        }

        else {

             $this->load->model('M_Prodi');
             $cek=$this->M_Prodi->tambah($new_name);
             if($cek){
               $this->tambah_berhasil();
               redirect('prodi');
             }else{
               $this->tambah_gagal();
               redirect('prodi');
             }
        }

    	}

      public function proses_edit_prodi(){
          $id=$_GET ['id'];
          $cek= $this->M_Prodi->edit($id);
          if($cek){
            $this->edit_berhasil();
            redirect('prodi');
          }else{
            $this->edit_gagal();
            redirect("edit_prodi?id=$id");
          }
      }

      public function proses_hapus_prodi(){
          $id=$_GET ['id'];
          $cek= $this->M_Prodi->hapus($id);
          if($cek){
            $this->hapus_berhasil();
            redirect('prodi');
          }else{
            $this->hapus_gagal();
            redirect('prodi');
          }
      }

      function tambah_berhasil(){
       $this->session->set_flashdata('pesan', '
               <div class="alert alert-success fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Berhasil!</strong> Data Berhasil Di Tambahkan!.
               </div>');
     }
     function tambah_gagal(){
       $this->session->set_flashdata('pesan', '
               <div class="alert alert-danger fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Gagal!</strong> Data Gagal ditambahkan!.
               </div>');
     }
     function edit_berhasil(){
       $this->session->set_flashdata('pesan', '
               <div class="alert alert-success fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Berhasil!</strong> Data Berhasil Di Perbaharui!.
               </div>');
     }
     function edit_gagal(){
       $this->session->set_flashdata('pesan', '
               <div class="alert alert-danger fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Gagal!</strong> Data Gagal Di Perbaharui!.
               </div>');
     }
     function hapus_berhasil(){
       $this->session->set_flashdata('pesan', '
               <div class="alert alert-success fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Berhasil!</strong> Data Berhasil Dihapus!.
               </div>');
     }
     function hapus_gagal(){
       $this->session->set_flashdata('pesan', '
               <div class="alert alert-danger fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Gagal!</strong> Data Gagal Di Hapus!.
               </div>');
     }
      function upload(){
       $this->session->set_flashdata('pesan', '
               <div class="alert alert-danger fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Gagal!</strong> File Upload Tidak Sesuai!.
               </div>');
     }





   }
?>
