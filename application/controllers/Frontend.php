<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }

     public function index() {
        $titulo = "Fundamentos";
        $dataHeader['titlePage'] = $titulo;

        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );

        $data['index'] = $this->load->view('frontend/index', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
     }

    

}