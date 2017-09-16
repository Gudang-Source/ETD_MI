<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Upload extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $admin=$this->session->userdata('level');
        //  $this->load->model('M_Kabupaten');
        //  $this->load->model('M_Kecamatan');
        //  $this->load->model('M_Jalan');
         if(empty($level)==0){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{

       		$this->load->view('Upload');
       	}




   }
?>
