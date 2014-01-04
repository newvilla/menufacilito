<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Model {
	function __construct(){
		parent::__construct();

		$this->load->database();
	
	}
	function pedidos($data){
		$this->db->insert('pedidos', array('areapedidos'=>$data['area'], 'comidapedidos'=>$data['comida'], 'cantidadpedidos'=>$data['cantidad']));

	}

}

?>