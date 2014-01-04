<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->model('registro');		
	}

	function index(){
		$this->load->view('menus/formulario');

	}

	function recibir(){
		$data = array(
			'area' => $this->input->post('area'), 
			'comida' => $this->input->post('comida'),
			'cantidad' => $this->input->post('cantidad')	
			);
		$this->registro->pedidos($data);
		$this->load->view('menus/formulario');

	}

}

?>