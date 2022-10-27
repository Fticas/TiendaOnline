<?php

class AdministradorModel extends ConexionBaseDatos{
    private $id;
    private $nombre;
    private $contrasenia;
    private $carnet;
    private $tipo;
    //private $conexion;

    /**
     * Constructor por defecto
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * Inserta un registro en la base de datos
     */
    public function insertar(string $categoria_id, string $nombre, string $sub){
        $this->categoria_id = $categoria_id;
        $this->nombre = $nombre;
        $this->sub = $sub;
        
        $conexion = $this->obtenerConexion();
        $consulta = "INSERT INTO clase (id_categoria, nombre_clase, sub_clase) VALUES (?, ?, ?)";


        
        $arreglo_parametros = array($this->categoria, $this->nombre, $this->sub);
        $insertar = $this->conexion->prepare($consulta);
        $resultado = $insertar->execute($arreglo_parametros);
    }

    public function leer(string $id){
        $consulta = "SELECT id_clase, id_categoria, nombre_clase, sub_clase FROM clase WHERE id_clase=?";
        $arreglo_parametros = array($id);
        $leer = $this->conexion->prepare($consulta);
        $leer->execute($arreglo_parametros);
        $resultado = $leer->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function editar(){
        //
    }

    public function eliminar(){
        //
    }
}

?>