<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('CRUD');
        $this->load->model('m_tentor');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        if ($this->session->userdata('role_id') != 1) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('tbl_login', ['EMAIL' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarAdmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/profilA', $data);
        $this->load->view('templates/footer');
    }
    public function daftartentor()
    {

        $data['title'] = 'Input Tentor';
        $data['user'] = $this->db->get_where('tbl_login', ['EMAIL' => $this->session->userdata('email')])->row_array();
        $data['jk'] = $this->CRUD->readjk();
        if ($data['user']) {
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('ahli', 'Nama Ibu', 'trim|required');
            $this->form_validation->set_rules('nohp', 'No HP', 'trim|required');
            $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
            if ($this->form_validation->run()) {
                $nama = $this->input->post('nama');
                $alamat = $this->input->post('alamat');
                $ahli = $this->input->post('ahli');
                $nohp = $this->input->post('nohp');
                $jk = $this->input->post('jk');

                $this->m_tentor->tambah_tentor($nama, $alamat, $ahli, $nohp, $jk);
                redirect('Menu/gettentor');
            } else {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebarAdmin', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('menu/insert_tentor', $data);
                $this->load->view('templates/footerUser');
            }
        }
    }
}
