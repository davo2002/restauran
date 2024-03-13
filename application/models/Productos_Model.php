<?php
//error_reporting(0);
    class Productos_Model extends CI_model{
        public function __construct()
        {
            
            $this->load->model("login_model");
        }
        
    public function guardar($datos){
        $datosguardar = array(
    
            "producto" => $datos["producto"],
            "precio" => $datos["precio"],
            "imagen" => $datos['imagen']
        );
        return $this->db->insert('productos', $datosguardar);
    }
        /*public function guardar ($datos){
            if (isset($_POST['productos'])) {                
                'producto'->$_POST['producto'];
                'precio'->$_POST['precio'];
                'imagen'-> $_POST['imagen'];
            }
              $datosguarda = array(
        
                "producto" => $datos["producto"],
                "precio" => $datos["precio"],
                "imagen" => $datos['imagen']
            );
            return $this->db->insert('productos', $datosguarda);
    }*/public function gua($persona){
        $nombres;$apellidos;$direccion;$correo;$telefono;$dm;$observaciones;
        if (isset($_POST['persona'])) {
            $rventas =array (
                $nombres=$persona['nombres'],
                $apellidos=$persona['apellidos'],
                $direccion=$persona['direccion'],
                $correo=$persona['correo'],
                $telefono=$persona['telefono'],
                $dm=$persona['dm'],
                $observaciones=$persona['observaciones'],
            );
            return $this->db->insert('persona',$rventas);
        } /**$sql="INSERT INTO 'persona'('nombres','apellidos','direccion','correo','telefono','dm','observaciones')VALUES ('.$nombres','$apellidos','$direccion','$correo','$telefono','$dm','$observaciones')";
        $r=$this->db;
        $todo=$r->query(sql);
        if ($r->affected_rows>0) {
            echo "confirmado";
        } */
       
    }
    public function crea($datos){
        $datoscrea =array (
            'Nombre'=> $datos['Nombre'],
            'correo'=> $datos['correo'],            
            'clave'=> $datos['clave'],
        );
        return $this->db->insert('session',$datoscrea);
    }
    public function listar(){
        return $this->db->get('productos')->result();
    }
    public function listar_P(){
        return $this->db->get('persona')->result();
    }
    public function eliminar_productos($id){
        $resultado= $this->db->delete("productos", array(
            'id' => $id
        ));
        return $resultado;

    }
    public function eliminar_productos1($id){
        $resultado= $this->db->delete("persona", array(
            'id' => $id
        ));
        return $resultado;

    }
}