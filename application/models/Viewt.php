<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Viewt extends CI_Model
{
    
     public function get_data()
  {
    $query = $this->db->get('tbl_tentor');
    return $query;
  }
}
