<?php
class M_Judul extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM ta INNER JOIN mahasiswa on mahasiswa.npm=ta.npm left JOIN prodi on mahasiswa.id_prodi=prodi.id_prodi LEFT JOIN bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='1'");
        return $query->result();
    }
    function konfirmasi()
    {
        $query=$this->db->query("SELECT * FROM ta INNER JOIN mahasiswa on mahasiswa.npm=ta.npm left JOIN prodi on mahasiswa.id_prodi=prodi.id_prodi LEFT JOIN bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='0'");
        return $query->result();
    }






}
