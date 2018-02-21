<?php
class M_Dosen extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM `dosen`");
        return $query->result();
    }

    function lihat_nip($id)
    {
        $query=$this->db->query("SELECT * FROM `dosen` where nip='$id'");
        return $query->result();
    }



    function tambah()
    {
      $data = array(
          'nip'=>$this->input->post('nip'),
          'nama'=>$this->input->post('nama')

      );
      $cek=$this->db->insert('dosen',$data);
      return $cek;
    }

    function Edit($id)
    {
      $data = array(
          'nip'=>$this->input->post('nip'),
          'nama'=>$this->input->post('nama')

      );

          $this->db->where('nip',$id);
          $cek=$this->db->update('dosen',$data);
          return $cek;

    }



    function hapus($id)
    {
      $query=$this->db->where('nip', $id);
      $cek=$this->db->delete('dosen');
      return $cek;
    }


}
