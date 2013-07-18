<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('codigofacilito_model');
	}
	function index(){
		$this->load->library('menu',array('Inicio','Contacto','Cursos','Acerca de'));
		$data['mi_menu'] = $this->menu->construirMenu();
		$this->load->view('codigofacilito/headers');	
		$this->load->view('codigofacilito/bienvenido',$data);
	}
	function holaMundo(){
		$this->load->view('codigofacilito/headers');	
		$this->load->view('codigofacilito/bienvenido');	
	}
	function sendMail(){
		$this->load->library('email');
		$configuraciones['mailtype'] = 'html';
		$this->email->initialize($configuraciones);
		$this->email->from('ejemplo@codigofacilito.com','Uriel Hdz');
		$this->email->to('projectdxv@gmail.com');
		$this->email->cc('otrocorreo@gmail.com');
		$this->email->subject('Probando CodeIgniter');
		$this->email->message('<p>Probandooo...</p> <strong>probandoo...</strong>');
		if($this->email->send()){
			//echo "Correo enviado";
			$this->load->view('codigofacilito/headers');	
		}
		else{
			echo $this->email->print_debugger();
		}
	}
}

?>