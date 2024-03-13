<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller{  
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_model");
    }
    public function login(){
		$this->load->model("login_model");
		$this->load->view('admin/login/index');
		$this->session->set_userdata('error',false);
	}public function veri(){
		$this->load->model("login_model");
		$resultado = $this->login_model->veri($_POST['correo']);
		if ($resultado->clave == $this->input->post('clave')){
			$this->session->set_userdata('session',$resultado);
			redirect(base_url().'admin');
		}else{
			$this->session->set_userdata('error',true);
			redirect(base_url().'login/admin');
		}
	}public function cerrar(){
		$this->session->unset_userdata('session');
		redirect(base_url().'login/admin');
	}
}