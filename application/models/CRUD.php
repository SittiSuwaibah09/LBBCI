<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUD extends CI_Model
{
  public function get_data()
  {
    $query = $this->db->get('tbl_pendaftaran');
    return $query;
  }
  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
  public function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
  public function readjk()
  {
    return $this->db->query("SELECT ID_JK,JK FROM tbl_jk")->result();
  }
  public function readjenjang()
  {
    return $this->db->query("SELECT ID_JENJANG,JENJANG FROM tbl_jenjang")->result();
  }
  public function readpaket()
  {
    return $this->db->query("SELECT ID_PAKET,JENIS_PAKET FROM tbl_les")->result();
  }
  public function all_data()
  {
    $result = $this->db->query('SELECT * FROM tbl_pendaftaran p, tbl_les s, tbl_jenjang j, tbl_jk k where  p.ID_JK=k.ID_JK AND p.ID_JENJANG=j.ID_JENJANG AND p.ID_PAKET=s.ID_PAKET')->result();
    return $result;
  }
}
