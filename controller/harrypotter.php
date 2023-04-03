<?php
    require_once("../config/conexion.php");
    require_once("../models/Harrypotter.php");
    $harry = new Harry();

    switch($_GET["op"]){

        case "listar":
            $datos=$harry->get_harry();
            if(is_array($datos)==true and count($datos)>0){
                $results=array(
                    "results"=>$datos
                );
                echo json_encode($results);
            }
            break;

    }
