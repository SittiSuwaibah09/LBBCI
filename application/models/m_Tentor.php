<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_Tentor extends CI_Model
{
     public function get_data()
  {
    $query = $this->db->get('tbl_tentor');
    return $query;
  }
    public function tambah_tentor($nama, $alamat, $ahli, $nohp, $jk)
    {
        $this->db->query("INSERT INTO tbl_tentor (ID_TENTOR, NAMA_TENTOR, ALAMAT_TENTOR, KEAHLIAN, NOHP_TENTOR, ID_JK) VALUES ('', '" . $nama . "', '" . $alamat . "', '" . $ahli . "', '" . $nohp . "', '" . $jk . "');");
        return $this->db->affected_rows();
    }
}
