<?php
include_once('../config/config.php');
include('../config/Database.php');

class clientes{
    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion= $db->connectToDatabase();
    }

    function save($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $documento = $params['documento'];
        $fecha = $params['fecha'];
        $imagen = $params['imagen'];
        
        
    
        $insert = "INSERT INTO clientes VALUES (NULL, '$nombres', ' $apellidos', '$documento', $fecha, '$imagen')";
        return mysqli_query($this->conexion, $insert);
    }
    function getAll(){
        $sql = "SELECT * FROM clientes";
        return mysqli_query($this->conexion, $sql); 
    }

    function getOne($id){
        $sql = "SELECT * FROM clientes WHERE id =$id";
        return mysqli_query($this->conexion, $sql);
    }

    function update($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $documento = $params['documento'];
        $fecha = $params['fecha'];
        $imagen = $params['imagen'];
        $id = $params['id'];
    
        $update = "UPDATE clientes SET nombres='$nombres', apellidos='$apellidos', documento='$documento', fecha='$fecha', imagen='$imagen', WHERE id=$id";
        return mysqli_query($this->conexion, $update);
    }
    function delete($id){
        $delete = "DELETE FROM clientes WHERE id = $id";
        return  mysqli_query($this->conexion, $delete); 
    }
    
     }
       

    
?>