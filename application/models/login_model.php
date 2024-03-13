<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_model{
    public function veri($correo){

        $this->db->select("*");
        $this->db->from('session');
         $this->db->where('correo', $correo);
         $resultado = $this->db->get();
        return $resultado->first_row();
}
}