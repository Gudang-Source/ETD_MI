<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Cari extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Judul');
  			 }


         public function index()
       	{
          $id=$_GET['id'];
          $data['cari'] = $this->M_Judul->cari($id);
       		$this->load->view('Cari',$data);
       	}

        public function cari_prodi()
       {
         $id=$_GET['id'];
         $prodi=$_GET['prodi'];
         $data['cari'] = $this->M_Judul->cari_prodi($id,$prodi);
         $this->load->view('Cari',$data);
       }




   }
?>
