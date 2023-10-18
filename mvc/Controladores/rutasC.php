<?php

class RutasControlador{

    public function Plantilla(){

        include "Vistas/plantilla.php";
    }

    public function Rutas(){
        
        if (isset($_GET["ruta"])){

            $rutas = $_GET["ruta"];

        }else{

            $rutas = "index";

        }
// Se usan :: para realizar una conexión con una función
        $respuesta = Modelo::RutasModelo($rutas);

        include $respuesta;
    }
}

?>