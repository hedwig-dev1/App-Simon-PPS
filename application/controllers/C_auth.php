<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class C_auth extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Insert_model','ins');
        $this->load->model('User_model','user');
        $this->load->library('session');
        date_default_timezone_set('Asia/Jakarta'); 
        
    }
    
    function login(){
        $data = array(
            'title' => 'Login',
            'pages' => 'pages/auth/login'
        );

        $this->load->view('pages/auth/login', $data);
        
    }

    function proses_login()
    {

        $username = htmlspecialchars(strtolower($this->input->post('username', TRUE)),ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE),ENT_QUOTES);
        
        $validasi = $this->user->login($username, $password);

        if ($validasi->num_rows() == 1) {
            $data = $validasi->row_array();
            if (password_verify($password, $data['password'])) {                
                switch ($data['level_akses']) {
                    case 'admin':
                        $this->session->set_userdata('masuk', TRUE);
                        $this->session->set_userdata('nama_satuan_kerja', $data['nama_satuan_kerja']);
                        $this->session->set_userdata('username', $data['username']);
                        $this->session->set_userdata('password', $data['password']);
                        $this->session->set_userdata('level_akses', 'admin');
                        $this->session->set_userdata('id_level', '1');
                        redirect('Main');
                        break;

                    case 'seksi-pps':
                        $this->session->set_userdata('masuk', TRUE);
                        $this->session->set_userdata('nama_satuan_kerja', $data['nama_satuan_kerja']);
                        $this->session->set_userdata('username', $data['username']);
                        $this->session->set_userdata('password', $data['password']);
                        $this->session->set_userdata('level_akses', 'seksi-pps');
                        $this->session->set_userdata('id_level', '2');
                        redirect('Main');
                        break;

                    case 'guest':
                        if ($data['is_activate'] == 1) {
                            $this->session->set_userdata('masuk', TRUE);
                            $this->session->set_userdata('nama_satuan_kerja', $data['nama_satuan_kerja']);
                            $this->session->set_userdata('username', $data['username']);
                            $this->session->set_userdata('password', $data['password']);
                            $this->session->set_userdata('level_akses', 'guest');
                            $this->session->set_userdata('id_level', '3');
                            redirect('Main');
                        break;
                        } else {
                            redirect('login');
                        }
                    
                    
                    default:
                        
                        break;
                }

            }
        } else {
            redirect('login');
        }
    }

    function register(){
        $data = array(
            'title' => 'Registration',
            'pages' => 'pages/auth/registrasi'
        );

        $this->load->view('pages/auth/register', $data);
        
    }
    
    public function proses_register()
    {
        $password = $this->input->post('password', TRUE);
    
        $data = array(
            'nama_satuan_kerja'  => $this->input->post('nama_satuan_kerja', TRUE),
            'username'           => strtolower($this->input->post('username', TRUE)),
            'password'           => password_hash($password, PASSWORD_DEFAULT), 
            'is_activate'        => 0,
            'level_akses'        => 'guest',
            'terdaftar'          => date('Y-m-d H:i:s'),
        );
    
        $this->ins->insert_pengguna($data);
        redirect('login');
    }

}

?>