<?php
class M_Konfirmasi extends CI_Model{

    function setuju($id)
    {
      $data = array(
          'verifikasi'=>1

      );
          $this->db->where('npm',$id);
          $cek=$this->db->update('ta',$data);
          return $cek;

    }

    function ya($id)
    {
      $data = array(
          'verifikasi'=>1

      );
          $this->db->where('npm',$id);
          $cek=$this->db->update('mahasiswa',$data);
          return $cek;

    }



    function batalkan($id)
    {
      $query=$this->db->where('npm', $id);
      $cek1=$this->db->delete('ta');

      $query=$this->db->where('npm', $id);
      $cek2=$this->db->delete('bimbing');

      if($cek2 && $cek1){
        return true;
      }else{
        return FALSE;
      }
    }

    function no($id)
    {
      $query=$this->db->where('npm', $id);
      $cek1=$this->db->delete('mahasiswa');

        return $cek1;
    }


}
