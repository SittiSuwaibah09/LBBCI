<?php
defined('BASEPATH') or exit('No direct script access allowed');

class R_user extends CI_Model
{
  public function get_data()
  {
    $query = $this->db->get('tbl_admin');
    return $query;
  }
}
