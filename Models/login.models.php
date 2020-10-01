<?php
session_start();
require_once 'Conexion.php';
class Login
{
    private $conn;
    function __construct()
    {
        $conexion = new Conexion();
        $this->conn = $conexion->Conectar();
        return $this->conn;
    }

    function ResLogin($user, $pass)
    {
        #printf("usuario: %s password: %s", $user, $pass);
        $consult =  ("SELECT id, user, contra FROM usuario WHERE user ='$user' AND contra ='$pass' LIMIT 1");
        $respuesta= $this->conn->query($consult);
        $filas= $respuesta->fetch_array(MYSQLI_ASSOC);
        
        if($filas>0) {
            echo "bien";
            $_SESSION['codPersonal'] = $filas['id'];
            return true;
        }else{
            return false;
        }

          mysqli_free_result($this->conn);
          mysqli_close($this->conn);
    }
}