<?php 

class C_permohonan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Insert_model', 'ins');
        $this->load->model('View_model', 'view');
        
    }
    
    function index()
    {
        $data = array(
            'title' => 'Daftar Pemohonan',
            'pageTitle' => 'Daftar Permohonan',
            'pages' => 'pages/Seksi-pps/daftar_permohonan',
            'pemohon' => $this->view->get_data_pemohon()
        );
        $this->load->view('main', $data);
    }

    function create()
    {
        
        $data = array(
            'title' => 'Form Permohonan',
            'pageTitle' => 'Kirim Dokumen',
            'pages' => 'pages/Seksi-pps/create_permohonan'
        );

        $this->load->view('main', $data);
        
    }

    function create_process()
    {
        $this->load->library('upload');

        $nama_file = 'berkas01';

        $nama_pekerjaan = $this->input->post('nama_pekerjaan');
        $sumber_pembiayaan = $this->input->post('sumber_pembiayaan');
        $jumlah_anggaran = $this->input->post('jumlah_anggaran');
        $pagu_anggaran = $this->input->post('pagu_anggaran');
        $nilai_kontrak = $this->input->post('nilai_kontrak');
        $jangka_waktu_pelaksanaan = $this->input->post('jangka_waktu_pelaksanaan');
        $lokasi_pekerjaan = $this->input->post('lokasi_pekerjaan');
        $tahapan_berjalan = $this->input->post('tahapan_berjalan');
        $potensi_pengaruh_keberhasilan = $this->input->post('potensi_pengaruh_keberhasilan');
        // pdf
        $surat_permohonan = $_FILES['surat_permohonan']['tmp_name'];
        $timeline_pelaksanaan_tahapan = $_FILES['timeline_pelaksanaan_tahapan']['tmp_name'];
        $surat_keputusan_proyek_strategis = $_FILES['surat_keputusan_proyek_strategis']['tmp_name'];

        $data = array(
            'nama_pekerjaan' => $nama_pekerjaan,
            'sumber_pembiayaan' => $sumber_pembiayaan,
            'jumlah_anggaran' => $jumlah_anggaran,
            'pagu_anggaran' => $pagu_anggaran,
            'nilai_kontrak' => $nilai_kontrak,
            'jangka_waktu_pelaksanaan' => $jangka_waktu_pelaksanaan,
            'lokasi_pekerjaan' => $lokasi_pekerjaan,
            'tahapan_berjalan' => $tahapan_berjalan,
            'surat_keputusan_proyek_strategis' => $surat_keputusan_proyek_strategis,
            'potensi_pengaruh_keberhasilan' => $potensi_pengaruh_keberhasilan,
            'timeline_pelaksanaan_tahapan' => $timeline_pelaksanaan_tahapan,
            'surat_permohonan' => $surat_permohonan
        );

        $config = array(
            'allowed_types' => 'pdf|docx|doc|odt',
            'max_size'      => 10000,
            'overwrite'     => TRUE,
            'file_name'     => $nama_file,
            'upload_path'   => './lampiran/',
            'encrypt_name'  => FALSE,
        );

        $this->upload->initialize($config); 

        if (!empty($timeline_pelaksanaan_tahapan)) {
            if ($this->upload->do_upload('timeline_pelaksanaan_tahapan')) {
                $timeline_file_data = $this->upload->data();
                $data['timeline_pelaksanaan_tahapan'] = $nama_file . $timeline_file_data['file_ext'];
            }
        }
    
        if (!empty($surat_keputusan_proyek_strategis)) {
            if ($this->upload->do_upload('surat_keputusan_proyek_strategis')) {
                $surat_keputusan_data = $this->upload->data();
                $data['surat_keputusan_proyek_strategis'] = $nama_file . $surat_keputusan_data['file_ext'];
            }
        } 

        if (!empty($surat_permohonan)) {
            if ($this->upload->do_upload('surat_permohonan')) {
                $surat_permohonan_data = $this->upload->data();
                $data['surat_permohonan'] = $nama_file . $surat_permohonan_data['file_ext'];
            }
        } 

        $this->ins->save_data_pemohon($data);
        
        redirect('list_permohonan');
        
    }

    function progress_pekerjaan() 
    {
        $data = array(
            'title' => 'Kirim Progress',
            'pageTitle' => 'Kirim Progress Bulanan',
            'pages' => 'pages/Seksi-pps/progress_pekerjaan'
        );

        $this->load->view('main', $data);
        
    }

    function daftar_progress()
    {
        $data = array(
            'title' => 'Daftar Progress Bulanan',
            'pageTitle' => 'Daftar Progress Pekerjaan Bulanan',
            'pages' => 'pages/Seksi-pps/daftar_progress',
            'pro_pekerjaan' => $this->view->get_data_progress()
        );    

        $this->load->view('main', $data);
        
    }

    function create_process_progress() 
    {
        $nama_file_foto = $nama_proyek . '_' . date('Y-m-d');

        $nama_proyek = $this->input->post('nama_proyek');
        $rencana_progress = $this->input->post('rencana_progress');
        $realisasi_progress = $this->input->post('realisasi_progress');
        $deviasi = $this->input->post('deviasi');
        $realisasi_keuangan = $this->input->post('realisasi_keuangan');
        $laporan_bulanan = $this->input->post('laporan_bulanan');
        $item_pekerjaan = $_FILES['item_pekerjaan']['tmp_name']; // upload foto
        $waktu = $this->input->post('waktu');

        $data = array(
          'nama_proyek'        =>  $nama_proyek,
          'rencana_progress'   =>  $rencana_progress,
          'realisasi_progress' =>  $realisasi_progress ,
          'deviasi'            =>  $deviasi,
          'realisasi_keuangan' =>  $realisasi_keuangan,
          'laporan_bulanan'    =>  $laporan_bulanan,
          'item_pekerjaan'     =>  $item_pekerjaan,
          'waktu'              =>  $waktu
        );

        // upload gambar / foto
        $config = array(
            'allowed_types' => 'jpg|jpeg|png|gif',
            'max_size'      => 10000,
            'overwrite'     => TRUE,
            'file_name'     => $nama_file_foto,
            'upload_path'   => './lampiran/foto',
            'encrypt_name'  => FALSE,
        );

        $this->load->library('upload', $config);

        $data['item_pekerjaan'] = $nama_file_foto;

        if ($this->upload->do_upload('item_pekerjaan')) {
            $item_pekerjaan_data = $this->upload->data();
            $data['item_pekerjaan'] = $nama_file_foto . $item_pekerjaan_data['file_ext'];
        }


        $this->ins->insert_progress($data);
        
        redirect('daftar_progress');
        
    }

    function arsip_berkas()
    {
        $data = array(
            'title' => 'Arsip Berkas',
            'pageTitle' => 'Daftar Arsip Berkas',
            'pages' => 'pages/Seksi-pps/Arsip'
        );

        $this->load->view('main', $data);
        
    }

}


?>