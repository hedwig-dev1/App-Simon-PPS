<?php 
error_reporting(1);
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guest/Main_model', 'guest');
        
    }

    public function index()
    {

    }

    
    function form_permohonan() {

        $data = array(
            'title'     => 'Pengajuan Dokumen Baru',
            'pageTitle' => 'Ajukan Dokumen Baru',
            'pages'     => 'pages/guest/create_permohonan',
            'action'    => 'guest/form_permohonan/send'
        );

        $this->load->view('main', $data);
        
    }

    function permohonan_process() {
        $data = $this->input->post();
        
        $this->_rules('sendPermohonan');
        $uniqueId = time().date('Y');
        $uniqueFile = (date('s')*time())-date('Y');

        $file_1 = $_FILES['timtah_pelakPE']['name'];
        $file_2 = $_FILES['skp_straPE']['name'];
        $file_3 = $_FILES['s_permohonanPE']['name'];
        $nilaiPagu      = str_replace('.','',$this->input->post('pagu_anggaran'));
        $nilaiKontrak   = str_replace('.','',$this->input->post('nilai_kontrak'));
            
        if ($this->form_validation->run() == FALSE) {
            $this->form_permohonan();
        } elseif (empty($file_1) || empty($file_2) || empty($file_3)) {
            $this->session->set_flashdata('err', 'Pastikan ke 3 File pendukung telah di upload dengan benar');
            $this->form_permohonan();
        }else {
            
            $config = array(
                'allowed_types' => 'pdf|docx|doc|odt',
                'max_size'      => 10000,
                'overwrite'     => TRUE,
                'upload_path'   => './public/lampiran/',
                'encrypt_name'  => FALSE,
            );

            // $this->load->library('upload');
            $this->upload->initialize($config);

            $dataOne = array(
                'id_pemohonPE'          => 'PEM-'.$uniqueId,
                'dokumen_idPE'          => 'DOK-'.$uniqueId,
                'asal_satkerPE'         => $this->session->userdata('nama_satker'),
                'nama_pkjPE'            => $this->input->post('nama_pekerjaan'),
                'sumber_pbyPE'          => $this->input->post('sumber_pembiayaan'),
                'pagu_aggPE'            => $nilaiPagu,
                'nil_kontrakPE'         => $nilaiKontrak,
                'jw_StartpelaksanaanPE' => $this->input->post('jangka_waktu_start'),
                'jw_EndpelaksanaanPE'   => $this->input->post('jangka_waktu_end'),
                'lokasi_pkjPE'          => $this->input->post('lokasi_pekerjaan'),
                't_berjalanPE'          => $this->input->post('tahapan_berjalan'),
                'pp_keberPE'            =>  $this->input->post('potensi_pengaruh_keberhasilan'),
                'updateDatePE'          => date('Y-m-d')
            );

            $dataTwo = array(
                'id_dokumenDO'          => 'DOK-'.$uniqueId,
                'updateDateDO'          => date('Y-m-d')
            );

            

        // Process uploads for each file
        if (!empty($file_1)) {
            if ($this->upload->do_upload('timtah_pelakPE')) {
                $data_file = $this->upload->data();
                $getFileOne = pathinfo($data_file['file_name']);
                $dataOne['timtah_pelakPE'] = 'TIMELINE_TAHAPAN_PELAKSANAAN_'.$uniqueFile.'.'.$getFileOne['extension'];
                rename($data_file['full_path'], './public/lampiran/'.$dataOne['timtah_pelakPE']);
            }
        }

        if (!empty($file_2)) {
            if ($this->upload->do_upload('skp_straPE')) {
                $data_file = $this->upload->data();
                $getFileTwo = pathinfo($data_file['file_name']);
                $dataOne['skp_straPE'] = 'SURAT_KEPUTUSAN_PROYEK_'.$uniqueFile.'.'.$getFileTwo['extension'];
                rename($data_file['full_path'], './public/lampiran/'.$dataOne['skp_straPE']);
            }
        }

        if (!empty($file_3)) {
            if ($this->upload->do_upload('s_permohonanPE')) {
                $data_file = $this->upload->data();
                $getFileThree = pathinfo($data_file['file_name']);
                $dataOne['s_permohonanPE'] = 'SURAT_PERMOHONAN_'.$uniqueFile.'.'.$getFileThree['extension'];
                rename($data_file['full_path'], './public/lampiran/'.$dataOne['s_permohonanPE']);
            }
        }
                

            $this->guest->savePermohonan($dataOne,$dataTwo);

            
        }
    }


    function _rules($rules) {
        switch ($rules) {
            case 'sendPermohonan':
                $this->form_validation->set_rules('nama_pekerjaan', 'Nama Pekerjaan', 'trim|required|min_length[5]|max_length[50]',array(
                    'required' => '%s wajib di isi !',
                    'min_length' => '%s terlalu pendek !',
                    'max_length' => '%s terlalu panjang !',
                ));
                // $this->form_validation->set_rules('sumber_pembiayaan', 'Sumber Pembiayaan', 'trim|required|min_length[5]|max_length[100]',array(
                //     'required' => '%s wajib di isi !',
                //     'min_length' => '%s terlalu pendek !',
                //     'max_length' => '%s terlalu panjang !',
                // ));
                // $this->form_validation->set_rules('pagu_anggaran', 'Pagu Anggaran', 'trim|required|min_length[5]|max_length[50]',array(
                //     'required' => '%s wajib di isi !',
                //     'min_length' => '%s terlalu pendek !',
                //     'max_length' => '%s terlalu panjang !',
                // ));
                // $this->form_validation->set_rules('nilai_kontrak', 'Nilai Kontrak', 'trim|required|min_length[5]|max_length[50]',array(
                //     'required' => '%s wajib di isi !',
                //     'min_length' => '%s terlalu pendek !',
                //     'max_length' => '%s terlalu panjang !',
                // ));
                // $this->form_validation->set_rules('jangka_waktu_start', 'Jangka Waktu Mulai', 'trim|required', array(
                //     'required' => '%s wajib di isi !'
                // ));
                // $this->form_validation->set_rules('jangka_waktu_end', 'Jangka Waktu Berakhir', 'trim|required', array(
                //     'required' => '%s wajib di isi !'));
                // $this->form_validation->set_rules('lokasi_pekerjaan', 'Lokasi Pekerjaan', 'trim|required|min_length[5]|max_length[50]',array(
                //     'required' => '%s wajib di isi !',
                //     'min_length' => '%s terlalu pendek !',
                //     'max_length' => '%s terlalu panjang !',
                // ));
                // $this->form_validation->set_rules('tahapan_berjalan', 'Tahapan Berjalan', 'trim|required|min_length[5]|max_length[50]',array(
                //     'required' => '%s wajib di isi !',
                //     'min_length' => '%s terlalu pendek !',
                //     'max_length' => '%s terlalu panjang !',
                // ));
                // $this->form_validation->set_rules('potensi_pengaruh_keberhasilan', 'Potensi Pengaruh Keberhasilan', 'trim|required|min_length[5]|max_length[50]',array(
                //     'required' => '%s wajib di isi !',
                //     'min_length' => '%s terlalu pendek !',
                //     'max_length' => '%s terlalu panjang !',
                // ));        


                break;
            
            default:
                # code...
                break;
        }
        
    }
}

/* End of file Insert_controller.php and path \application\controllers\Guest\Insert_controller.php */
