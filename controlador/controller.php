<?php
require_once("modelo/modelo.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function index(){
        $producto   = new Modelo();
        $dato       =   $producto->mostrar("usuarios","1");
        require_once("vista/index.php");
    }
    //nuevo
    static function nuevo(){        
        require_once("vista/nuevo.php");
    }
    //guardar
    static function guardar(){
        $nombre= $_REQUEST['nombre'];
        $documento= $_REQUEST['documento'];
        $precio= $_REQUEST['precio'];
        $data = "'".$nombre."',".$documento.",".$precio;
        $producto = new Modelo();
        $dato = $producto->insertar("usuarios   ",$data);
        header("location:".urlsite);
    }


    //editar
    static function editar(){    
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->mostrar("usuarios","id=".$id);        
        require_once("vista/editar.php");
    }
    //actualizar
    static function actualizar(){
        $id = $_REQUEST['id'];
        $nombre= $_REQUEST['nombre'];
        $documento= $_REQUEST['documento'];
        $precio= $_REQUEST['precio'];
        $data = "nombre='".$nombre."',documento=".$documento.",precio=".$precio;
        $producto = new Modelo();
        $dato = $producto->actualizar("usuarios",$data,"id=".$id);
        header("location:".urlsite);
    }


    //eliminar
    static function eliminar(){    
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->eliminar("usuarios","id=".$id);
        header("location:".urlsite);
    }


}