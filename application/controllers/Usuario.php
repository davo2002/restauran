<?php
class Usuario extends CI_Controller {
	/*public function session(){
        $this->load->model('Login_model');
		$this-> load->view('admin/login/index');
		$this->session->set_userdata('error',false);
	}*/
    function __construct(){
        parent::__construct();
        $this->load->model('Productos_Model');
    }public function crear(){
		$this-> load->view('admin/crear');
	}public function gua(){
		$this->Productos_Model->gua($_POST);     
		redirect(base_url().'pag');
	}
	public function guardar (){

		$config['upload_path']          = './assets/archivos/';
		$config['allowed_types']        = 'jpg|png';
		$config['file_name']= 'subida';
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('imagen'))
		{
				//$error = array('error' => $this->upload->display_errors());
				//echo 'error';
				$this->session->set_userdata('error_image', true);
				redirect(base_url().'mas');
		}
		else
		{
			$resultado= $this->Productos_Model->guardar( $this->input->post(), $this->upload->data() );
			if( $resultado ){
				redirect(base_url().'mas');
			}

			if( $resultado ){
				redirect(base_url().'productos');
			}

		}

		/*
		if ($this->administrador_model->guardar($_POST)==true) {
			redirect(base_url().'index.php/gestionar_productos/agregar');
		}
		*/
	}
	public function envi (){

		$this->Productos_Model->guardar($_POST);     
		redirect(base_url().'productos');
		$config['upload_path']          = './assets/archivos/';
		$config['allowed_types']        = 'jpg|png';
		$config['file_name']= 'subida';
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('imagen'))
		{
				//$error = array('error' => $this->upload->display_errors());
				//echo 'error';
				$this->session->set_userdata('error_image', true);
				redirect(base_url().'productos');
		}
		else
		{
			$resultado= $this->Productos_Model->guardar( $this->input->post(), $this->upload->data() );
			if( $resultado ){
				redirect(base_url().'productos');
			}

			if( $resultado ){
				echo 'Se guardo';
			}

		}
	}public function crea (){
		$this->Productos_Model->crea($_POST);   
		redirect(base_url().'crear');

	} public function listar (){
        $datos =array(
            'producto'=>$this->Productos_Model->listar()
        );
	} public function productos(){
		$resultado=$this->Productos_Model->listar();
        $this-> load->view('admin/productos', array(
            "productos"=>$resultado
        ));
		
	}public function gestion_eliminar ($id){
        echo $id;
       if($this->Productos_Model->eliminar($id)){ 
           redirect(base_url().'productos');
       }
	} public function gestion_eliminar1 ($id){
        echo $id;
       if($this->Productos_Model->eliminar1($id)){ 
           redirect(base_url().'persona');
       }
	} 
	public function panel(){
	$this-> load->view('admin/index');
	}public function listar_P (){
        $datos =array(
            'persona'=>$this->Productos_Model->listar_P()
        );
	}public function pedidos(){
		$resultado=$this->Productos_Model->listar_P();
        $this-> load->view('admin/pedidos', array(
            "persona"=>$resultado
        ));
		
	}
	public function eliminar_productos($id){
		if ($this->Productos_Model->eliminar_productos($id)==true) {
			redirect(base_url().'productos');
		}
	}
	
}