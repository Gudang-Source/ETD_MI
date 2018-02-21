<?php
class M_Prodi extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM `Prodi` where status is null");
        return $query->result();
    }

    function lihat_prodi()
    {
        $query=$this->db->query("SELECT * FROM `Prodi`");
        return $query->result();
    }

    function lihat_per_prodi($id)
    {
        $query=$this->db->query("SELECT * FROM `Prodi` where id_prodi='$id'");
        return $query->result();
    }

    function prodi($prodi)
    {
        $query=$this->db->query("SELECT * FROM `Prodi`where id_prodi='$prodi'");
        return $query->result();
    }


    function tambah($new)
    {
      $id_prodi = $this->input->post('id_prodi');
      $nama = $this->input->post('nama');

      $data = array(
          'id_prodi'=>$id_prodi,
          'nama_prodi'=>$nama,
          'logo'=>$new
      );
      $cek=$this->db->insert('prodi',$data);
      return $cek;
    }

    function Edit($id,$new)
    {
      $data = array(
          'id_prodi'=>$id_prodi,
          'nama_prodi'=>$nama,
          'logo'=>$new
      );


          $this->db->where('id_prodi',$id);
          $cek=$this->db->update('prodi',$data);
          return $cek;

    }



    function hapus($id)
    {
      $query=$this->db->where('id_prodi', $id);
      $cek=$this->db->delete('prodi');
      return $cek;
    }


}
