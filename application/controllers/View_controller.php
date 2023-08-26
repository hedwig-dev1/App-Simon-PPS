<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class View_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('View_model', 'view');
        
    }
    
    /**
     * seksiPps_view
     * tampilan halaman daftar permohonan untuk sisi seksi-pps
     * @return void
     */
    function seksiPps_view()
    {   
        $load = $this->view->get_data_pemohon()->result();
        $data = array(
            'title' => 'Daftar Pemohonan',
            'pageTitle' => 'Daftar Permohonan',
            'pages' => 'pages/pps/daftar_permohonan',
            'data' => $load
        );

        foreach ($data['data'] as &$d) { // Loop melalui data pemohon
            $joined_data = $this->view->joinDokumen($d->dokumen_idPE); // Ambil data dari join
    
            // Jika data join tidak kosong, masukkan "jns_dokDO" ke dalam data pemohon
            if (!empty($joined_data)) {
                $d->jns_dokDO = $joined_data['jns_dokDO'];
            }
        }
        
        $this->load->view('main', $data);
    }
    
    /**
     * guest_view
     * tampilan halaman daftar permohonan untuk sisi guest atau satker
     * @return void
     */
    function guest_view()
    {   
        $load = $this->view->get_data_pemohon()->result();
        $data = array(
            'title' => 'Daftar Pemohonan',
            'pageTitle' => 'Daftar Permohonan',
            'pages' => 'pages/guest/daftar_permohonan',
            'data' => $load
        );
        $this->load->view('main', $data);
    }

    
    /**
     * daftarProgress_view
     * tampilan halaman daftar progress untuk sisi guest atau satker
     * @return void
     */
    function daftarProgress_view()
    {
        $load =  $this->view->get_data_progress()->result();
        $data = array(
            'title' => 'Daftar Progress Bulanan',
            'pageTitle' => 'Daftar Progress Pekerjaan Bulanan',
            'pages' => 'pages/guest/daf_progress',
            'data' => $load
        );    

        $this->load->view('main', $data);
    }

    
    /**
     * daftarProgress_Pps
     * tampilan halaman daftar progress untuk sisi seksi-pps
     * @return void
     */
    function daftarProgress_Pps()
    {
        $load =  $this->view->get_data_progress()->result();
        $data = array(
            'title' => 'Daftar Progress Bulanan',
            'pageTitle' => 'Daftar Progress Pekerjaan Bulanan',
            'pages' => 'pages/pps/daf_progress',
            'data' => $load
        );    

        $this->load->view('main', $data);
    }
    
    /**
     * guestPesan_view
     * tampilan untuk daftar pesan masuk untuk sisi guest atau satker
     * @return void
     */
    function guestPesan_view()
    {
        $load = $this->view->get_data_pesan()->result();
        $data = array(
            'title' => 'Pesan Masuk',
            'pageTitle' => 'Daftar Pesan Masuk',
            'pages' => 'pages/guest/Pesan',
            'data' => $load
        );

        $this->load->view('main', $data);
    }
    
    /**
     * list_user
     * tampilan halaman daftar user / pengguna untuk sisi admin
     * @return void
     */
    function list_user()
    {   
        $load = $this->view->get_all_pengguna()->result();
        $data = array(
            'title' => 'List User',
            'pageTitle' => 'List User',
            'pages' => 'pages/admin/List_akun',
            'data' => $load
        );
        $this->load->view('main', $data);
    }





}

/* End of file View_controller.php and path \application\controllers\View_controller\View_controller.php */
