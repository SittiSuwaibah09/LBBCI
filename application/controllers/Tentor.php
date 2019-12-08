 


 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentor extends CI_Controller
{
    public function viewtentor()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('tbl_login', ['email' => $this->session->userdata('email')])->row_array();
        $data['all'] = $this->Viewt->all_data();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarAdmin');
        $this->load->view('templates/topbar');
        $this->load->view('Menu/datatentor');
        $this->load->view('templates/footer');
    }
}
    