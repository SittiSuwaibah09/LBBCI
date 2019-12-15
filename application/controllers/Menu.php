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
        $this->load->view('templates/topbarUser');
        $this->load->view('Menu/index');
        $this->load->view('templates/footer');
    }

    public function dataadmin()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('tbl_login', ['email' => $this->session->userdata('email')])->row_array();
        $data['all'] = $this->CRUD->readadmin();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarAdmin', $data);
        $this->load->view('templates/topbarUser', $data);
        $this->load->view('Menu/dadmin', $data);
        $this->load->view('templates/footer');
    }
    public function gettentor()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('tbl_login', ['email' => $this->session->userdata('email')])->row_array();
        $data['all'] = $this->CRUD->readtentor();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarAdmin', $data);
        $this->load->view('templates/topbarUser', $data);
        $this->load->view('Menu/datatentor', $data);
        $this->load->view('templates/footer');
    }
    public function gettentorU()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('tbl_login', ['email' => $this->session->userdata('email')])->row_array();
        $data['all'] = $this->CRUD->readtentor();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarUser', $data);
        $this->load->view('templates/topbarUser', $data);
        $this->load->view('Menu/viewtentor', $data);
        $this->load->view('templates/footer');
    }
    public function updateadmin($id)
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('tbl_login', ['email' => $this->session->userdata('email')])->row_array();
        $data['default'] = $this->CRUD->get_admin($id);
        $config['upload_path'] = './assets/img/profile/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size'] = 0;
		$config['overwrite'] = TRUE;

		$this->upload->initialize($config);
        if(isset($_POST['tombol_submit'])){
            $this->CRUD->update_ad($_POST, $id);
            redirect('admin/index');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarAdmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Menu/edit_admin', $data);
        $this->load->view('templates/footer');
    }
    public function hedit($id)
    {
        $this->load->model("CRUD");
        $data['title'] = 'Menu Management';
        $data['jk'] = $this->CRUD->readjk();
        $data['paket'] = $this->CRUD->readpaket();
        $data['jenjang'] = $this->CRUD->readjenjang();
        $data['tipe'] = "Edit";
        $data['user'] = $this->db->get_where('tbl_login', ['email' => $this->session->userdata('email')])->row_array();
        $data['default'] = $this->CRUD->get_default($id);

        if(isset($_POST['tombol_submit'])){
            $this->CRUD->update($_POST, $id);
            redirect('Menu/index');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarAdmin');
        $this->load->view('templates/topbar');
        $this->load->view('menu/edit');
        $this->load->view('templates/footer');

    }
     public function tedit($id)
    {
        $this->load->model("CRUD");
        $data['title'] = 'Menu Management';
        $data['jk'] = $this->CRUD->readjk();
        $data['user'] = $this->db->get_where('tbl_login', ['email' => $this->session->userdata('email')])->row_array();
        $data['default'] = $this->CRUD->get_tentor($id);
        if(isset($_POST['tombol_submit'])){
            $this->CRUD->updateT($_POST, $id);
            redirect('Menu/gettentor');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarAdmin', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Menu/editT', $data);
        $this->load->view('templates/footer');

    }
    public function update($id)
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
        $where = array('ID_DAFTAR' => $id);
        $this->CRUD->hapus_data($where, 'tbl_pendaftaran');
        redirect('Menu/index');
    }
    public function deleteT($id)
    {
        $where = array('ID_TENTOR' => $id);
        $this->CRUD->hapus_data($where, 'tbl_tentor');
        redirect('Menu/gettentor');
    }
    public function delete_admin($id)
    {
        $where = array('NO' => $id);
        $this->CRUD->hapus_data($where, 'tbl_login');
        redirect('Menu/dataadmin');
    }

}
