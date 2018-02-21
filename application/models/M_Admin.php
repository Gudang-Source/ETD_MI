<?php
class M_Admin extends CI_Model{
    function cek_password($id,$password)
    {
        $query=$this->db->query("SELECT * FROM `mahasiswa` where npm='$id' and password='$password'");
        return $query->result();
    }
    function cek_password_admin($id,$password)
    {
        $query=$this->db->query("SELECT * FROM `user` where username='$id' and password='$password'");
        return $query->result();
    }
    function lihat_admin()
    {
        $query=$this->db->query("SELECT * FROM `user`");
        return $query->result();
    }

    function admin($id)
    {
        $query=$this->db->query("SELECT * FROM `user` where username='$id'");
        return $query->result();
    }

    function profil($id)
    {
        $query=$this->db->query("SELECT * FROM `mahasiswa` left join prodi on prodi.id_prodi=mahasiswa.id_prodi left join bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where npm='$id'");
        return $query->result();
    }

    function tambah_admin()
    {

      $password = md5($this->input->post('password'));
      $ulangi_password = md5($this->input->post('ulangi_password'));
        if($password==$ulangi_password){
          $data = array(
              'nama_lengkap'=>$this->input->post('nama_lengkap'),
              'username'=>$this->input->post('username'),
              'level'=>$this->input->post('level'),
              'id_prodi'=>$this->input->post('prodi'),
              'password'=>$password
          );
          $cek=$this->db->insert('user',$data);
          return $cek;
        }else{
          return false;
        }
      }


    function ubah_profil($id,$admin)
    {

      $mahasiswa = array(
        'npm'=>$this->input->post('npm'),
        'nama'=>$this->input->post('nama'),
        'alamat'=>$this->input->post('alamat'),
        'email'=>$this->input->post('email'),
        'id_prodi'=>$this->input->post('prodi'),
        'no_hp'=>$this->input->post('no_hp'),
        'id_bidang_minat'=>$this->input->post('bidang_minat')

      );

          $this->db->where('npm',$admin);
          $cek=$this->db->update('mahasiswa',$mahasiswa);
          return $cek;

    }

    function ubah_password($id,$password_baru)
    {

      $data = array(
          'password'=>$password_baru

      );

          $this->db->where('npm',$id);
          $cek=$this->db->update('mahasiswa',$data);
          return $cek;

    }

    function ubah_password_admin($id,$password_baru)
    {

      $data = array(
          'password'=>$password_baru

      );

          $this->db->where('username',$id);
          $cek=$this->db->update('user',$data);
          return $cek;

    }

    function edit_admin()
    {
      $query=$this->db->query("");
      return $query->result();
    }


    function proses_hapus_admin($id)
    {
      $query=$this->db->where('username', $id);
      $cek=$this->db->delete('user');
      return $cek;
    }


}
