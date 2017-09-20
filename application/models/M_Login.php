<?php
    class M_login extends CI_Model{
        function login(){

			$username = $this->input->post('username');
			$password= $this->input->post('password');
			$password=md5($password);
            $sql="SELECT * FROM user where username='$username' and password='$password'";
			$query = $this->db->query($sql);

        return $query->result();
            }

      function mhs($username){


          $sql="SELECT * FROM mahasiswa where npm='$username' ";
          $query = $this->db->query($sql);

            return $query->result();
                }


		function daftar(){
			$password_baru = md5($this->input->post('password'));
			$ulangi_password = md5($this->input->post('ulangi_password'));
			if($password_baru==$ulangi_password){
				$mahasiswa = array(
				  'npm'=>$this->input->post('npm'),
				  'nama'=>$this->input->post('nama'),
				  'alamat'=>$this->input->post('alamat'),
				  'email'=>$this->input->post('email'),
				  'id_prodi'=>$this->input->post('prodi'),
				  'no_hp'=>$this->input->post('no_hp')


				);
				$user = array(
				  'username'=>$this->input->post('npm'),
				  'nama_lengkap'=>$this->input->post('nama'),
				  'level'=>0,
				  'password'=>$password_baru

				);

			$cek1=$this->db->insert('mahasiswa',$mahasiswa);
			$cek2=$this->db->insert('user',$user);
			if($cek1 && $cek2){
				return true;
			}else{
				return false;
			}

			}else{
				return false;
			}
		}
	}
?>
