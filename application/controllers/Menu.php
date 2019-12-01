<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('CRUD');
    }
    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('tbl_login', ['email' => $this->session->userdata('email')])->row_array();
        $data['all'] = $this->CRUD->all_data();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarAdmin');
        $this->load->view('templates/topbar');
        $this->load->view('Menu/index');
        $this->load->view('templates/footer');
    }
    public function dataadmin()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('tbl_login', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('READ');
        $data['siswa'] = $this->READ->get_data();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarAdmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Menu/dadmin', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $ID_JK = $this->input->post('ID_JK');
        $ID_PAKET = $this->input->post('ID_PAKET');
        $ID_JENJANG = $this->input->post('ID_JENJANG');
        $NO = $this->input->post('NO');
        $NAMA = $this->input->post('NAMA');
        $ALAMAT = $this->input->post('ALAMAT');
        $UMUR = $this->input->post('UMUR');
        $NAMA_BAPAK = $this->input->post('NAMA_BAPAK');
        $NAMA_IBU = $this->input->post('NAMA_IBU');
        $NO_HP = $this->input->post('NO_HP');

        $data = array(
            'ID_JK' => $ID_JK,
            'ID_PAKET' => $ID_PAKET,
            'ID_JENJANG' => $ID_JENJANG,
            'NO' => $NO,
            'NAMA' => $NAMA,
            'ALAMAT' => $ALAMAT,
            'UMUR' => $UMUR,
            'NAMA_BAPAK' => $NAMA_BAPAK,
            'NAMA_IBU' => $NAMA_IBU,
            'NO_HP' => $NO_HP,

        );
        $where = array(
            'ID_DAFTAR' => $id
        );
        $this->CRUD->update_data($where, $data, 'tbl_pendaftaran');
        redirect('Menu/index');
    }
    public function edit()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('tbl_login', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarAdmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/edit', $data);
        $this->load->view('templates/footer');
    }
    public function delete($id)
    {
        $where = array('id_peserta' => $id);
        $this->CRUD->hapus_data($where, 'member');
        redirect('Menu/index');
    }
}
