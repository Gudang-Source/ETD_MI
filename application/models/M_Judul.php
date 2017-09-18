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
    function judul100()
    {
        $query=$this->db->query("SELECT *, mahasiswa.nama as nama_mahasiswa, mahasiswa.npm as npm_mahasiswa FROM mahasiswa LEFT JOIN ta on ta.npm=mahasiswa.npm LEFT JOIN bimbing on bimbing.npm=mahasiswa.npm LEFT join dosen on dosen.nip=bimbing.nip left join prodi on prodi.id_prodi=mahasiswa.id_prodi left join bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='1' ORDER by ta.tgl_upload DESC LIMIT 100");
        return $query->result();
    }
    function judul100_prodi($id)
    {
        $query=$this->db->query("SELECT *, mahasiswa.nama as nama_mahasiswa, mahasiswa.npm as npm_mahasiswa FROM mahasiswa LEFT JOIN ta on ta.npm=mahasiswa.npm LEFT JOIN bimbing on bimbing.npm=mahasiswa.npm LEFT join dosen on dosen.nip=bimbing.nip left join prodi on prodi.id_prodi=mahasiswa.id_prodi left join bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='1'and mahasiswa.id_prodi='$id' ORDER by ta.tgl_upload DESC LIMIT 100");
        return $query->result();
    }

    function cari($id)
    {
        $query=$this->db->query("SELECT *, mahasiswa.nama as nama_mahasiswa, mahasiswa.npm as npm_mahasiswa FROM mahasiswa LEFT JOIN ta on ta.npm=mahasiswa.npm LEFT JOIN bimbing on bimbing.npm=mahasiswa.npm LEFT join dosen on dosen.nip=bimbing.nip left join prodi on prodi.id_prodi=mahasiswa.id_prodi left join bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='1'and lower(mahasiswa.nama) LIKE lower('%$id%') or lower(prodi.nama_prodi) LIKE lower('%$id%') or lower(mahasiswa.npm) LIKE lower('%$id%') OR lower(ta.judul) like lower('%$id%') or lower(bidang_minat.nama_bidang_minat) like lower('%$id%') or lower(ta.Abstrak) like lower('%$id%')");
        return $query->result();
    }
    function cari_prodi($id,$prodi)
    {
        if($prodi==0){
          $query=$this->db->query("SELECT *, mahasiswa.nama as nama_mahasiswa, mahasiswa.npm as npm_mahasiswa FROM mahasiswa LEFT JOIN ta on ta.npm=mahasiswa.npm LEFT JOIN bimbing on bimbing.npm=mahasiswa.npm LEFT join dosen on dosen.nip=bimbing.nip left join prodi on prodi.id_prodi=mahasiswa.id_prodi left join bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='1'and lower(mahasiswa.nama) LIKE lower('%$id%') or lower(prodi.nama_prodi) LIKE lower('%$id%') or lower(mahasiswa.npm) LIKE lower('%$id%') OR lower(ta.judul) like lower('%$id%') or lower(bidang_minat.nama_bidang_minat) like lower('%$id%') or lower(ta.Abstrak) like lower('%$id%')");
        }else{
          $query=$this->db->query("SELECT *, mahasiswa.nama as nama_mahasiswa, mahasiswa.npm as npm_mahasiswa FROM mahasiswa LEFT JOIN ta on ta.npm=mahasiswa.npm LEFT JOIN bimbing on bimbing.npm=mahasiswa.npm LEFT join dosen on dosen.nip=bimbing.nip left join prodi on prodi.id_prodi=mahasiswa.id_prodi left join bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='1'and prodi.id_prodi='$prodi'");
          
        }
        return $query->result();
    }







}
