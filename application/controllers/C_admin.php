<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('View_model', 'view');
        $this->load->model('Insert_model', 'ins');
        $this->load->model('Update_model', 'upd');
        $this->load->library('session');
        date_default_timezone_set('Asia/Jakarta'); 
    }
    

    public function create_akun()
    {
        $login = $this->session->userdata('id_level');
        if ($login == 1 ) {
            $data = array(
            'title' => 'Buat Akun',
            'pageTitle' => 'Buat akun baru',
            'pages' => 'pages/admin/Create_akun'
            );
            $this->load->view('main', $data);
        }else {
            redirect('404');
        }
    }

    public function list_akun()
    {
        $login = $this->session->userdata('id_level');
        if ($login == 1 ) {
            $data = array(
                'title' => 'List Akun',
                'pageTitle' => 'List akun',
                'pages' => 'pages/admin/List_akun',
                'pengguna' => $this->view->get_all_pengguna()
            );
            $this->load->view('main', $data);
            
        } else{
            redirect('404');
        }

    }

    function set_akun() 
    {
        $this->rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create_akun();
        } else {
            $password = $this->input->post('password', TRUE);

            $data = array(
                'nama_satuan_kerja'  => $this->input->post('nama_satuan_kerja', TRUE),
                'username'           => strtolower($this->input->post('username', TRUE)),
                'password'           => password_hash($password, PASSWORD_DEFAULT),
                'level_akses'        => $this->input->post('level_akses', TRUE),
                'is_activate'        => 1,
                'terdaftar'          => date('Y-m-d H:i:s')
            );

            $this->ins->insert_pengguna($data);  
            redirect('list_akun');
            
        }  
    }

    function delete($id_pengguna)
    {
        $row = $this->upd->get_pengguna_id($id_pengguna);

        if($row) {
            $this->upd->delete_pengguna($id_pengguna);
            $this->db->query("DELETE FROM tb_pengguna WHERE id_pengguna = '$id_pengguna'");

            redirect('list_akun');
        }
    }

    public function aktivasi_akun($id_pengguna)
    {
        $this->view->aktivasi($id_pengguna);
        redirect('list_akun');
        
    }

    function error()
    {
        $data = array(
            'title' => '404 not found',
            'pages' => 'pages/404'
        );
        $this->load->view('pages/404', $data);
    }
    

    function rules()
    {
        $this->form_validation->set_rules('nama_satuan_kerja', 'Nama Satuan Kerja', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('level_akses', 'Level Akses', 'required|callback_check_select');

    }

    function check_select($value)
    {
        if ($value == '-- Pilih --') {
            $this->session->set_flashdata('check_select', 'Pilih level akses yang valid.');
            return FALSE;
        }
        return in_array($value, array('admin', 'seksi-pps', 'guest'));
    }

}

/* End of file .php */

?>