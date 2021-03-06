<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Bidang_minat extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $admin=$this->session->userdata('level');
         $this->load->model('M_Bidang_Minat');
         $this->load->model('M_Prodi');
         if(empty($level)==0){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{
          $id=($this->session->userdata('prodi'));
          $data['lihat'] = $this->M_Bidang_Minat->lihat_bidang_minat_prodi($id);
          $data['prodi'] = $this->M_Prodi->lihat();
       		$this->load->view('Bidang_minat',$data);
       	}

        public function edit()
       {
         $id=$_GET ['id'];
         $data['lihat'] = $this->M_Bidang_Minat->lihat_edit($id);
         $data['prodi'] = $this->M_Prodi->lihat();
         $this->load->view('Edit_bidang_minat',$data);
       }
       public function proses_edit()
      {
        $id=$_GET ['id'];
        $cek= $this->M_Bidang_Minat->edit($id);
        if($cek){
          $this->edit_berhasil();
          redirect('bidang_minat');
        }else{
          $this->edit_gagal();
          redirect("edit_bidang_minat?id=$id");
        }
      }

        public function proses_tambah()
       {
         $cek= $this->M_Bidang_Minat->tambah();
         if($cek){
           $this->tambah_berhasil();
           redirect('bidang_minat');
         }else{
           $this->tambah_gagal();
           redirect('bidang_minat');
         }
       }

       public function proses_hapus_bidang_minat(){
           $id=$_GET ['id'];
           $cek= $this->M_Bidang_Minat->hapus($id);
           if($cek){
             $this->hapus_berhasil();
             redirect('bidang_minat');
           }else{
             $this->hapus_gagal();
             redirect('bidang_minat');
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
