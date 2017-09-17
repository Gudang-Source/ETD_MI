<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Konfirmasi extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $admin=$this->session->userdata('admin');
         $this->load->model('M_Judul');

          if($admin==1){
             redirect("login/logout");
            }
  			 }


         public function index()
       	{
          $data['lihat'] = $this->M_Judul->konfirmasi();
       		$this->load->view('Konfirmasi',$data);
       	}




   }
?>
