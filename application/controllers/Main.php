<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();        
    }
    
    function index()
    {    
        $data = array(
            'title' => 'Home',
            'pages' => 'pages/dashboard'
        );
        $this->load->view('main', $data);   
    }

    function error()
    {
        $data = array(
            'title' => '404 not found',
            'pages' => 'pages/404'
        );
        $this->load->view('pages/404', $data);
    }


}


?>