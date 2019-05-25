<?php

/**
* 
*/
class Validar_sesion extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	 public function validar($user,$pass){
	 	$this->db->where('id_usuario',$user);
	 	$this->db->where('password',$pass);
	 	$this->db->from('cat_usuario');
		$this->db->limit('1');
  	 	$credenciales = $this->db->get()->row();
		return $credenciales;
	}
}