<?php

require_once "conexionBD.php";

class AdminM extends ConexionBD{

    static public function IngresoM($datosC, $tablaBD){
//prepare prepara una sentencia SQL para ser ejecutada por el método execute
        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave FROM $tablaBD WHERE usuario = :usuario");
//bindParam sirve para enlazar parámetros        
        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

        $pdo -> execute();
//Se retorna con fetch ya que es una sola linea
        return $pdo->fetch();

        $pdo->close();
    }
}