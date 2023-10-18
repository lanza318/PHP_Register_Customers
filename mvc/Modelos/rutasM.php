<?php

class Modelo{
    static public function RutasModelo($rutas){

        if($rutas == "ingreso" || $rutas == "registrar" || $rutas == "empleados" || $rutas == "editar"|| $rutas == "salir"){

            $pagina = "Vistas/modulos/".$rutas.".php";

        }else if($rutas == "index"){

            $pagina = "Visitas/modulos/ingreso.php";

        }else{

            $pagina = "Visitas/modulos/ingreso.php";
        }

        return $pagina;
    }
}

?>