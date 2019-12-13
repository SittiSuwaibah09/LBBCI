<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Viewt');
        $this->load->model('CRUD');
    }
    public function viewtentor()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('tbl_login', ['email' => $this->session->userdata('email')])->row_array();
        $data['all'] = $this->CRUD->readtentor();

        $this->load->view('templates/headerUser', $data);
        $this->load->view('templates/sidebarUser');
        $this->load->view('templates/topbarUser');
        $this->load->view('Menu/viewtentor');
        $this->load->view('templates/footerUser');
    }
}
    