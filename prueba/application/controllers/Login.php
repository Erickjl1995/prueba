<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
 	{
 		parent::__construct();
 	$this->load->model('validar_sesion');
 	}

	public function index()
	{
		$this->load->view('login');
	}

	public function validar_usuario()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$contra = sha1($pass);
		$credenciales = $this->validar_sesion->validar($user,$contra);
		if($credenciales!=null) {
			$this->session->set_userdata('id_usuario',$credenciales->id_usuario);
			echo '1';
 		}
 		 else {
 		   echo'0';
 		}
 	
 	}
 	
	
}

