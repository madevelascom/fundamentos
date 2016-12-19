<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

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
        $data['menu'] = $this->load->view('frontend/menu',array()  );

        $data['index'] = $this->load->view('frontend/index', array() );

        $data['footer'] = $this->load->view('frontend/footer', array() );
    }

    public function curso() {
        $titulo = "Información del Curso";
        $dataHeader['titlePage'] = $titulo;
        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );
        $data['curso'] = $this->load->view('frontend/curso', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
    }

	public function semanas() {
        $titulo = "Semana a Semana";
        $dataHeader['titlePage'] = $titulo;
        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );
        $data['semanas'] = $this->load->view('frontend/semanas', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
    }

	public function ayudantias() {
        $titulo = "Ayudantias";
        $dataHeader['titlePage'] = $titulo;

        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );

        $data['ayudantias'] = $this->load->view('frontend/ayudantias', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );		
	}
     public function practicar() {
        $titulo = "Ejercicios";
        $dataHeader['titlePage'] = $titulo;

        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );

        $data['ejercicios'] = $this->load->view('frontend/ejercicios', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
     }

     public function equipo() {
        $titulo = "Profesores";
        $dataHeader['titlePage'] = $titulo;

        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );
        $data['equipo'] = $this->load->view('frontend/equipo', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
     }

     public function ejercicioDetalle() {
        $titulo = "Ejercicio";
        $dataHeader['titlePage'] = $titulo;

        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );

        $data['ejercicio'] = $this->load->view('frontend/ejercicio', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
     }

    public function cargar_listaDeEjercicios(){
        $data = "";
        $this->load->view('frontend/ejercicios.json', $data);
    }

	public function cargar_equipo(){
		$data = "";
		$this->load->view('frontend/equipo.json', $data);
	}


}