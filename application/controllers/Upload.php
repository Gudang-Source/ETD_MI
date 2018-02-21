<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Upload extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $level=$this->session->userdata('level');
         $login=$this->session->userdata('login');

         $this->load->model('M_Dosen');
         $this->load->model('M_Bidang_Minat');
         $this->load->model('M_Judul');
         $this->load->model('M_konfirmasi');
         if(($level!=0) || (empty($login)==true)){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{
          $username=$this->session->userdata('login');
          $cek=$this->M_Judul->cek_upload($username);
          if($cek){
            redirect("detail_judul?id=$username");
          }else{
              $prodi=$this->session->userdata('prodi');
              $data['bidang_minat'] = $this->M_Bidang_Minat->lihat_prodi($prodi);
              $data['dosen'] = $this->M_Dosen->lihat();
           		$this->load->view('Upload',$data);
          }
       	}

        public function proses_tambah()
       {

         $pdf1;
         $pdf2;

         $pdf_full =$this->input->post('publikasi');
         if($pdf_full==2){
             $pdf_2=$this->upload_full();
         }

         if($pdf=$this->upload()){

           $username=$this->session->userdata('login');


                $pdf_full =$this->input->post('publikasi');
                if($pdf_full==2){
                  $pdf1=$pdf_2.".pdf";
                  $pdf2=$pdf_2."1.pdf";
                }else{
                  $pdf1=$pdf.".pdf";
                  $pdf2="";
                }
                $this->load->model('M_Upload');
          			$cek=$this->M_Upload->tambah($pdf1,$username,$pdf2);
          			if($cek){
          				$this->tambah_berhasil();
          				redirect('Upload');
          			}else{
          				$this->tambah_gagal();
          				redirect('upload');
          }
           }

       }

       public function upload_full()
      {
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'pdf|PDF';
        $config['max_size']      = 20000;
        $config['max_width']     = 10240;
        $config['max_height']    = 7680;
        $new_name =$_FILES["pdf2"] ['name'];
        $username=$this->session->userdata('login');
        $new_name2="full".$username;
        $config['file_name']=$new_name2;
        $this->load->library('upload', $config);
        $this->upload->do_upload('pdf2');
        unset($config);

        return $new_name2;

      }
       public function upload()
      {

        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'pdf|PDF';
        $config['max_size']      = 20000;
        $config['max_width']     = 10240;
        $config['max_height']    = 7680;
        $new_name =$_FILES["pdf"] ['name'];
        $username=$this->session->userdata('login');
        $new_name3=$username;
        $config['file_name']=$new_name3;
        $this->load->library('upload', $config);
        $this->upload->do_upload('pdf');
        unset($config);

        return $new_name3;
      }


       public function batalkan()
       {
              $id=$_GET ['id'];
              $file=$_GET ['file'];
              $file2=$_GET ['file2'];
              unlink("./uploads/$file");
              unlink("./uploads/$file2");
              $cek= $this->M_konfirmasi->batalkan($id);
              if($cek){
                $this->batalkan_berhasil();
                redirect("upload");
              }else{
                $this->batalkan_gagal();
              redirect("upload");
              }

       }


       function tambah_berhasil(){
        $this->session->set_flashdata('pesan', '
                <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Berhasil!</strong> Data Berhasil Di Tambahkan!.
                </div>');
      }
      function konfirmasi_berhasil(){
       $this->session->set_flashdata('pesan', '
               <div class="alert alert-success fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Berhasil!</strong> Berhasil Di konfirmasi!.
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
      function batalkan_berhasil(){
        $this->session->set_flashdata('pesan', '
                <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Berhasil!</strong> Data Dibatalkan!.
                </div>');
      }
                function batalkan_gagal(){
                  $this->session->set_flashdata('pesan', '
                          <div class="alert alert-danger fade in">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Gagal!</strong> Gagal Dibatalkan!.
                          </div>');
      }
       function file_upload(){
        $this->session->set_flashdata('pesan', '
                <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Gagal!</strong> File Upload Tidak Sesuai!.
                </div>');
      }




   }
?>
