<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Upload extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $admin=$this->session->userdata('level');

         $this->load->model('M_Dosen');
         $this->load->model('M_Bidang_Minat');

         if(empty($level)==0){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{

          $data['bidang_minat'] = $this->M_Bidang_Minat->lihat();
          $data['dosen'] = $this->M_Dosen->lihat();
       		$this->load->view('Upload',$data);
       	}




   }
?>
