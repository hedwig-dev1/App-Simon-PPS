<?php 
defined ('BASEPATH') OR exit('No direct script access allowed');

class Insert_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Insert_model', 'ins');
        $this->load->model('View_model', 'view');       
        
    }

    
    /**
     * create_permohonan
     * tampilan form untuk kirim permohonan
     * @return void
     */
    function create_permohonan()
    {
        $data = array(
            'title' => 'Form Permohonan',
            'pageTitle' => 'Kirim Dokumen',
            'pages' => 'pages/guest/create_permohonan',
            'action' => 'permohonan/pro/save_doc'
        );

        $this->load->view('main', $data);
        
    }
    
    /**
     * prosessPermohonan
     * proses masuk data permohonan ke tb_pemohon
     * @return void
     */
    function prosessPermohonan()
    {
        $this->_rules('permohonan');
        
        if ($this->form_validation->run() == FALSE) {
            $this->create_permohonan();
        } else {
            $this->load->library('upload');

            // nama file
            $nf_s_permohonanPE = 'Surat_permohonan'.date('s').date('Y');
            $nf_timtah_pelakPE = 'Ttp'.date('s').date('Y');
            $nf_skp_straPE = 'Surat_kps'.date('s').date('Y');

            $id_pemohonPE = 'pem-'.time().date('Y');
            $dokumen_idPE = 'dok-'.time().date('Y');

            // pdf
            $s_permohonanPE = $_FILES['s_permohonanPE']['name'];
            $timtah_pelakPE = $_FILES['timtah_pelakPE']['name'];
            $skp_straPE = $_FILES['skp_straPE']['name'];
            $nilaiPagu = str_replace('.','',$this->input->post('pagu_anggaran'));
            $nilaiKontrak = str_replace('.','',$this->input->post('nilai_kontrak'));
            
            // tb pemohon
            $data = array(
                'id_pemohonPE' => $id_pemohonPE,
                'dokumen_idPE' => $dokumen_idPE,
                'asal_satkerPE' => $this->session->userdata('nama_satker'),
                'nama_pkjPE' => $this->input->post('nama_pekerjaan'),
                'sumber_pbyPE' => $this->input->post('sumber_pembiayaan'),
                'pagu_aggPE' => $nilaiPagu,
                'nil_kontrakPE' => $nilaiKontrak,
                'jw_StartpelaksanaanPE' => $this->input->post('jangka_waktu_start'),
                'jw_EndpelaksanaanPE' => $this->input->post('jangka_waktu_end'),
                'lokasi_pkjPE' => $this->input->post('lokasi_pekerjaan'),
                't_berjalanPE' => $this->input->post('tahapan_berjalan'),
                'pp_keberPE' =>  $this->input->post('potensi_pengaruh_keberhasilan'),
                'skp_straPE' => $skp_straPE,
                'timtah_pelakPE' => $timtah_pelakPE,
                's_permohonanPE' => $s_permohonanPE,
                'updateDatePE' => date('Y-m-d')
            );
            
            $data_two = array(
                'pemohon_idPR' => $id_pemohonPE,
                'pkj_namaPR' => $this->input->post('nama_pekerjaan')
            );
            
            $data_three = array(
                'id_dokumenDO' => $dokumen_idPE,
                'pkj_namaDO' => $this->input->post('nama_pekerjaan')
            );
            $config = array(
                'allowed_types' => 'pdf|docx|doc|odt',
                'max_size'      => 10000,
                'overwrite'     => TRUE,
                'upload_path'   => './public/lampiran/',
                'encrypt_name'  => FALSE,
            );

            $this->upload->initialize($config); 

            // Upload s_permohonanPE
            if (!empty($s_permohonanPE)) {
                $config['file_name'] = $nf_s_permohonanPE;
                $this->upload->initialize($config);
                if ($this->upload->do_upload('s_permohonanPE')) {
                    $surat_permohonan_data = $this->upload->data();
                    $data['s_permohonanPE'] = $nf_s_permohonanPE . $surat_permohonan_data['file_ext'];
                }
            }

            if (!empty($timtah_pelakPE)) {
                $config['file_name'] = $nf_timtah_pelakPE;
                $this->upload->initialize($config);
                if ($this->upload->do_upload('timtah_pelakPE')) {
                    $timtah_data = $this->upload->data();
                    $data['timtah_pelakPE'] = $nf_timtah_pelakPE . $timtah_data['file_ext'];
                }
            }

            if (!empty($skp_straPE)) {
                $config['file_name'] = $nf_skp_straPE;
                $this->upload->initialize($config);
                if ($this->upload->do_upload('skp_straPE')) {
                    $skp_data = $this->upload->data();
                    $data['skp_straPE'] = $nf_skp_straPE . $skp_data['file_ext'];
                }
            }

            $this->ins->save_data_pemohon($data, $data_two, $data_three);
            $this->session->set_flashdata('success', '<strong>Data berhasil kirim!</strong>');
            redirect('daftar_permohonan');
        
        }
        
        
        
    }
   

        
    /**
     * login
     * halaman login
     * @return void
     */
    function login() 
    {
        
        $data = array(
            'title' => 'Login',
            'action' => 'auth/login'
        );

        $this->load->view('pages/auth/login', $data);
        
    }
    
    /**
     * register
     * halaman register
     * @return void
     */
    function register() 
    {
        $data = array(
            'title' => 'Registrasi',
            'action' => 'auth/register'
        );

        $this->load->view('pages/auth/register', $data);
        
    }
    
    /**
     * proses_register
     * fungsi proses register
     * @return void
     */
    public function proses_register()
    {
        $this->rules();
        
        if ($this->form_validation->run() == TRUE) {
            $pass = $this->input->post('pass', TRUE);
        
            $data = array(
                'nama_satker'  => $this->input->post('nama_satker', TRUE),
                'user'               => strtolower($this->input->post('user', TRUE)),
                'pass'               => password_hash($pass, PASSWORD_DEFAULT), 
                'is_activate'        => 0,
                'level'              => 'guest',
                'terdaftar'          => date('Y-m-d H:i:s'),
            );
        
            $this->ins->insert_pengguna($data);
            $this->session->set_flashdata('success', '<strong>Akun berhasil dibuat! </strong> Hubungi admin untuk mengaktivasi akun');
            redirect('login');
            
        } else {
            redirect('register');
        }
        
    }
    
    /**
     * proses_login
     * fungsi proses login
     * @return void
     */
    public function proses_login()
    {

        $user = strtolower($this->input->post('user', TRUE));
        $pass = $this->input->post('pass', TRUE);
        $csrf = $this->security->get_csrf_hash();
        
        $validasi = $this->view->login($user, $pass);
        
        // echo "<pre>";
        // var_dump($validasi->num_rows());
        // echo "</pre>";
        // die();
        
        if ($validasi != NULL && $validasi->num_rows() >= 0 && $validasi->num_rows() <= 2) {
            $data = $validasi->row_array();
            switch ($data['level']) {
                case 'admin':
                    $this->session->set_userdata(array(
                        'masuk' => TRUE,
                        'nama_satker' => $data['nama_satker'],
                        'user' => $data['user'],
                        'pass' => $data['pass'],
                        'level' => 'admin',
                        'id_level' => '1',
                        'csrf'  => $csrf
                    ));
                    redirect('Main');
                    break;

                case 'seksi-pps':
                    $this->session->set_userdata(array(
                        'masuk' => TRUE,
                        'nama_satker' => $data['nama_satker'],
                        'user' => $data['user'],
                        'pass' => $data['pass'],
                        'level' => 'seksi-pps',
                        'id_level' => '2',
                        'csrf'  => $csrf
                    ));
                    redirect('Main');
                    break;

                case 'guest':
                    if ($data['is_activate'] == 1) {
                        $this->session->set_userdata(array(
                            'masuk' => TRUE,
                            'nama_satker' => $data['nama_satker'],
                            'user' => $data['user'],
                            'pass' => $data['pass'],
                            'level' => 'guest',
                            'id_level' => '3',
                            'csrf'  => $csrf
                        ));
                        redirect('Main');
                    }else{
                        $this->session->set_flashdata('danger', '<strong>Akun anda belum di aktivasi! </strong> Hubungi admin agar bisa melakukan login');
                        redirect('login');
                    }
                    break;

                default:
                    
                    break;
            }

        }else {
            redirect('login');
        }
        
    }
    
    /**
     * logout
     * fungsi logout
     * @return void
     */
    function logout() 
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    
    /**
     * create_user
     * tampilan form untuk membuat akun baru
     * @return void
     */
    function create_user() 
    {
        $data = array(
            'title'     => 'Daftar User',
            'pageTitle' => 'Daftar User',
            'pages'      => 'pages/admin/Create_akun',
            'action'    => 'admin/go/process'
        );

        $this->load->view('main', $data);    
    }
    
    /**
     * process_create_user
     * fungsi untuk membuat akun baru 
     * @return void
     */
    function process_create_user() 
    {
        $this->rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create_user();
        } else{
            $pass = $this->input->post('pass', TRUE);

            $data = array(
                'nama_satker'  => $this->input->post('nama_satker', TRUE),
                'user'         => strtolower($this->input->post('user', TRUE)),
                'pass'         => password_hash($pass, PASSWORD_DEFAULT),
                'level'        => $this->input->post('level', TRUE),
                'is_activate'  => 1,
                'terdaftar'    => date('Y-m-d'),
                
            );

            $this->session->set_flashdata('success', 'Data user berhasil ditambahkan!');
            $this->ins->insert_pengguna($data);
            
            redirect('list_user');
        }
    }
    
    /**
     * aktivasi_akun
     * fungsi aktivasi akun saat akun di registrasi
     * @param  mixed $id_pengguna
     * @return void
     */
    public function aktivasi_akun($id_pengguna)
    {
        $this->view->aktivasi($id_pengguna);
        $this->session->set_flashdata('message', 'Akun anda telah di aktivasi! silahkan login');
        redirect('list_user');
    }
    
    /**
     * check_select
     * validasi untuk pemilihan level akses saat membuat akun
     * @param  mixed $value
     * @return void
     */
    function check_select($value)
    {
        if ($value == '-- Pilih --') {
            $this->session->set_flashdata('check_select', 'Pilih level akses yang valid.');
            return FALSE;
        }
        return in_array($value, array('admin', 'seksi-pps', 'guest'));
    }
    
    /**
     * rules
     * validasi untuk registrasi
     * @return void
     */
    function rules()
    {
        $this->form_validation->set_rules('nama_satker', 'Nama satuan kerja', 'trim|required|min_length[5]|max_length[50]',array('required' => '%s wajib di isi !','min_length' => '%s terlalu pendek !','max_length' => '%s terlalu panjang !',));
        $this->form_validation->set_rules('user', 'User', 'trim|required|min_length[5]|max_length[30]',array('required' => '%s wajib di isi !','min_length' => '%s terlalu pendek !','max_length' => '%s terlalu panjang !',));
        $this->form_validation->set_rules('pass', 'Pass', 'trim|required|min_length[5]|max_length[12]',array('required' => '%s wajib di isi !','min_length' => '%s terlalu pendek !','max_length' => '%s terlalu panjang !',));

    }
    
    /**
     * _rules
     * validasi untuk proses permohonan
     * @param  mixed $validasi
     * @return void
     */
    function _rules($validasi) {
        switch ($validasi) {
            case 'permohonan':
                $this->form_validation->set_rules('nama_pekerjaan', 'Nama Pekerjaan', 'trim|required|min_length[5]|max_length[50]',array(
                    'required' => '%s wajib di isi !',
                    'min_length' => '%s terlalu pendek !',
                    'max_length' => '%s terlalu panjang !',
                ));
                $this->form_validation->set_rules('sumber_pembiayaan', 'Sumber Pembiayaan', 'trim|required|min_length[5]|max_length[100]',array(
                    'required' => '%s wajib di isi !',
                    'min_length' => '%s terlalu pendek !',
                    'max_length' => '%s terlalu panjang !',
                ));
                $this->form_validation->set_rules('pagu_anggaran', 'Pagu Anggaran', 'trim|required|min_length[5]|max_length[50]',array(
                    'required' => '%s wajib di isi !',
                    'min_length' => '%s terlalu pendek !',
                    'max_length' => '%s terlalu panjang !',
                ));
                $this->form_validation->set_rules('nilai_kontrak', 'Nilai Kontrak', 'trim|required|min_length[5]|max_length[50]',array(
                    'required' => '%s wajib di isi !',
                    'min_length' => '%s terlalu pendek !',
                    'max_length' => '%s terlalu panjang !',
                ));
                $this->form_validation->set_rules('jangka_waktu_start', 'Jangka Waktu Mulai', 'trim|required', array(
                    'required' => '%s wajib di isi !'
                ));
                $this->form_validation->set_rules('jangka_waktu_end', 'Jangka Waktu Berakhir', 'trim|required', array(
                    'required' => '%s wajib di isi !'));
                $this->form_validation->set_rules('lokasi_pekerjaan', 'Lokasi Pekerjaan', 'trim|required|min_length[5]|max_length[50]',array(
                    'required' => '%s wajib di isi !',
                    'min_length' => '%s terlalu pendek !',
                    'max_length' => '%s terlalu panjang !',
                ));
                $this->form_validation->set_rules('tahapan_berjalan', 'Tahapan Berjalan', 'trim|required|min_length[5]|max_length[50]',array(
                    'required' => '%s wajib di isi !',
                    'min_length' => '%s terlalu pendek !',
                    'max_length' => '%s terlalu panjang !',
                ));
                $this->form_validation->set_rules('potensi_pengaruh_keberhasilan', 'Potensi Pengaruh Keberhasilan', 'trim|required|min_length[5]|max_length[50]',array(
                    'required' => '%s wajib di isi !',
                    'min_length' => '%s terlalu pendek !',
                    'max_length' => '%s terlalu panjang !',
                ));        

                break;            
            default:
                # code...
                break;
        }
    }

    

}

