<?php

class ConexionBaseDatos{
    private $host = "localhost";
    private $usuario = "root";
    private $contrasenia = "1234";
    private $base_datos = "bd_tienda_online";
    private $conexion;

    /**
     * Constructor por defecto
     */
    public function __construct(){
        try{
            //$cadenaConexion = "mysql:host=" . $this->host . "; dbname=" . $this->base_datos . "; charset=utf8";
            $cadenaConexion = "mysql:host=" . $this->host . "; dbname=" . $this->base_datos;
            $this->conexion = new PDO($cadenaConexion, $this->usuario, $this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conectado con exito";
        }
        catch(PDOException $e){
            echo "Error de coneccion: " . $e->getMessage();
        }
    }

    /**
     * Devuelve el resultado de la conexion a la base de datos
     */
    public function obtenerConexion(){
        return $this->conexion;
    }
}

?>