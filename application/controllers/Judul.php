<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Judul extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Judul');

  			 }


         public function index()
       	{
          $admin=$this->session->userdata('level');
         if($admin==0){
              redirect("login/logout");

             }

          $data['lihat'] = $this->M_Judul->lihat();
       		$this->load->view('Semua_judul',$data);
       	}

        public function detail_judul()
       {
         $id=$_GET['id'];
         $data['ta'] = $this->M_Judul->detail_judul($id);
         $data['pembimbing1'] = $this->M_Judul->pembimbing($id,1);
         $data['pembimbing2'] = $this->M_Judul->pembimbing($id,2);
         $this->load->view('detail_judul',$data);
       }




   }
?>
