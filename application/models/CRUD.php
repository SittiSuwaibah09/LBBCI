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
  public function get_default($id){
    $sql = $this->db->query("SELECT * FROM tbl_pendaftaran p, tbl_les s, tbl_jenjang j, tbl_jk k, tbl_tentor t where  p.ID_JK=k.ID_JK AND p.ID_JENJANG=j.ID_JENJANG AND p.ID_PAKET=s.ID_PAKET AND t.ID_JK=k.ID_JK AND ID_DAFTAR = ".intval($id));
    if($sql->num_rows() > 0)
      return $sql->row_array();
    return false;
  }
  public function get_tentor($id){
    $sql = $this->db->query("SELECT * FROM tbl_pendaftaran p, tbl_les s, tbl_jenjang j, tbl_jk k, tbl_tentor t where  p.ID_JK=k.ID_JK AND p.ID_JENJANG=j.ID_JENJANG AND p.ID_PAKET=s.ID_PAKET AND t.ID_JK=k.ID_JK AND ID_TENTOR = ".intval($id));
    if($sql->num_rows() > 0)
      return $sql->row_array();
    return false;
  }
  public function get_admin($id){
    $sql = $this->db->query("SELECT * FROM tbl_login l, role_id r where l.ID=r.ID AND l.ID=1 AND NO = ".intval($id));
    if($sql->num_rows() > 0)
      return $sql->row_array();
    return false;
  }
  public function update_ad($post, $id){

        $no = $this->input->post('no');
        $name = $this->input->post('nama');
        $email = $this->input->post('email');

    $data = array(
            'NO' => $no,
            'NAME' => $name,
            'EMAIL' => $email,

        );
        $where = array(
            'NO' => $id
        );
        $this->CRUD->update_data($where, $data, 'tbl_login');


    return true;
  }
  public function update($post, $id){

        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $umur = $this->input->post('umur');
        $bapak = $this->input->post('bapak');
        $ibu = $this->input->post('ibu');
        $nohp = $this->input->post('nohp');
        $jk = $this->input->post('jk');
        $jenjang = $this->input->post('jenjang');
        $paket = $this->input->post('paket');
    $data = array(
            'ID_JK' => $jk,
            'ID_PAKET' => $paket,
            'ID_JENJANG' => $jenjang,
            'NAMA' => $nama,
            'ALAMAT' => $alamat,
            'UMUR' => $umur,
            'NAMA_BAPAK' => $bapak,
            'NAMA_IBU' => $ibu,
            'NO_HP' => $nohp,

        );
        $where = array(
            'ID_DAFTAR' => $id
        );
        $this->CRUD->update_data($where, $data, 'tbl_pendaftaran');


    return true;
  }
  public function updateT($post, $id){

        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $ahli = $this->input->post('ahli');
        $nohp = $this->input->post('nohp');
        $jk = $this->input->post('jk');
    $data = array(  
            'NAMA_TENTOR' => $nama,
            'ALAMAT_TENTOR' => $alamat,
            'KEAHLIAN' => $ahli,
            'NOHP_TENTOR' => $nohp,
            'ID_JK' => $jk,
        );
        $where = array(
            'ID_TENTOR' => $id
        );
        $this->CRUD->update_data($where, $data, 'tbl_tentor');


    return true;
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
  public function readadmin()
  {
    $result = $this->db->query('SELECT * FROM tbl_login l, role_id r where l.ID=r.ID AND l.ID=1')->result();
    return $result;
  }
  public function readtentor()
  {
    $result = $this->db->query('SELECT * FROM tbl_tentor t, tbl_jk j where t.ID_JK=j.ID_JK')->result();
    return $result;
  }
}
