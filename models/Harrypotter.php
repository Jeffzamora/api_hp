<?php
    class Harry extends Conectar{

        public function get_harry(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_hp;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(pdo::FETCH_ASSOC);
        }
    }

/*clase practica de UNP 3 y 4 año*/
<<<<<<< HEAD
<<<<<<< HEAD
/*el mostro hizo un cambio*/
=======
/*Hola, me regalan una pc?*/
>>>>>>> aa7d10cdbb8514abb7782845c14112327ccf5041
=======








/*Prueba*/
>>>>>>> da3a7b29cd3a8ae146b16696d4b462e436650f0d
