<?php
class M_Bidang_Minat extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM `Dosen`");
        return $query->result();
    }



    function tambah()
    {
      $nama_lengkap = $this->input->post('nama_lengkap');
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $data = array(
          'nama_lengkap'=>$nama_lengkap,
          'username'=>$username,
          'password'=>$password
      );
      $cek=$this->db->insert('admin',$data);
      return $cek;
    }

    function Edit($id,$admin)
    {
      $nama_lengkap = $this->input->post('nama_lengkap');
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $data = array(
          'nama_lengkap'=>$nama_lengkap,
          'username'=>$username

      );
      if($password==$admin){
          $this->db->where('username',$id);
          $cek=$this->db->update('admin',$data);
          return $cek;
      }else{
        return false;
      }
    }



    function hapus($id)
    {
      $query=$this->db->where('username', $id);
      $cek=$this->db->delete('admin');
      return $cek;
    }


}
