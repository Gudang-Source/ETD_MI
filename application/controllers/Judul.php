<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Judul extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $admin=$this->session->userdata('level');
         $this->load->model('M_Judul');

        if($admin==0){
             redirect("login/logout");

            }
  			 }


         public function index()
       	{
          $data['lihat'] = $this->M_Judul->lihat();
       		$this->load->view('Semua_judul',$data);
       	}




   }
?>
