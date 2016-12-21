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
        $titulo = "Fundamentos - Inicio";
        $dataHeader['titlePage'] = $titulo;
        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu',array()  );

        $data['index'] = $this->load->view('frontend/index', array() );

        $data['footer'] = $this->load->view('frontend/footer', array() );
    }

    public function curso() {
        $titulo = "Fundamentos - Información del Curso";
        $dataHeader['titlePage'] = $titulo;
        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );
        $data['curso'] = $this->load->view('frontend/curso', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
    }

	public function semanas() {
        $titulo = "Fundamentos - Semana a Semana";
        $dataHeader['titlePage'] = $titulo;
        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );
        $data['semanas'] = $this->load->view('frontend/semanas', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
    }

	public function ayudantias() {
        $titulo = "Fundamentos - Ayudantias";
        $dataHeader['titlePage'] = $titulo;

        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );

        $data['ayudantias'] = $this->load->view('frontend/ayudantias', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );		
	}
    public function practicar() {
        $titulo = "Fundamentos - Ejercicios";
        $dataHeader['titlePage'] = $titulo;

        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );

        $data['practicar'] = $this->load->view('frontend/practicar', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
     }

    public function equipo() {
        $titulo = "Fundamentos - Equipo";
        $dataHeader['titlePage'] = $titulo;

        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );
        $data['equipo'] = $this->load->view('frontend/equipo', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
     }

    public function proyectos() {
        $titulo = "Fundamentos - Proyectos";
        $dataHeader['titlePage'] = $titulo;
        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );
        $data['proyectos'] = $this->load->view('frontend/proyectos', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
    }

    public function proyectonuevo() {
        $titulo = "Fundamentos - Proyecto Nuevo";
        $dataHeader['titlePage'] = $titulo;
        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );
        $data['proyectonuevo'] = $this->load->view('frontend/proyectonuevo', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
    }

    public function login() {
        $titulo = "Fundamentos - Login";
        $dataHeader['titlePage'] = $titulo;
        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );
        $data['login'] = $this->load->view('frontend/login', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
    }

    public function ejercicio() {
        $titulo = "Fundamentos - Ejercicios";
        $dataHeader['titlePage'] = $titulo;

        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );

        $data['ejercicio'] = $this->load->view('frontend/ejercicio', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
    }
	
    public function ejercicionuevo() {
        $titulo = "Fundamentos - Proyecto Nuevo";
        $dataHeader['titlePage'] = $titulo;
        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );
        $data['ejercicionuevo'] = $this->load->view('frontend/ejercicionuevo', array() );
        $data['footer'] = $this->load->view('frontend/footer', array() );
    }

	public function sandboxProfesor(){
        $titulo = "Fundamentos - SandBox de Profesor";
        $dataHeader['titlePage'] = $titulo;

        $data['header'] = $this->load->view('frontend/header', $dataHeader);
        $data['menu'] = $this->load->view('frontend/menu', array() );

        $data['sandboxprofesor'] = $this->load->view('frontend/sandboxprofesor', array() );
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

    public function cargar_proyectos(){
        $data = "";
        $this->load->view('frontend/proyectos.json', $data);
    }
}