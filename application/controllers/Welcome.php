<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('sitios/index');
	}public function saludar(){
		$this-> load->view('saludar');
	}
	
	public function pag(){
        $this->load->model('Productos_Model');
		$resultado=$this->Productos_Model->listar();
        $this-> load->view('sitios/index', array(
            "productos"=>$resultado
        ));
	}public function carrito(){
		$this-> load->view('redireccion/rventas');
	}public function pedidos(){
		$this-> load->view('admin/pedidos');
	}public function hecho(){
		$this-> load->view('redireccion/resultado');
	}
	
	public function mas(){
		$this-> load->view('admin/mas');
	}
}