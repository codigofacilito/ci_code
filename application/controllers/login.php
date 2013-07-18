<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->view('login/formulario');	
	}
	function loguearse(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Usuario', 'required');
		$this->form_validation->set_rules('password', 'Contraseña', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('login/formulario');	
		}
		else{
			redirect(base_url());
		}
	}
}
?>