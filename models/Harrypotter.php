?php
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
<<<<<<< HEAD
<<<<<<< HEAD
/*el mostro hizo un cambio*/
=======
=======
=======
/*Clase Practica Sergio Duarte*/
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
/*Sugeylin Perez*/
=======
>>>>>>> 62fd30dcd48e55238d5a464c98a258c7a13e928a
>>>>>>> cf487e0cb02b7a377645fc5541394bc861e9ea68
/* Amy Espinoza*/
=======
<<<<<<< HEAD
>>>>>>> c8931a174d77ed5ad81062e73ee1c5c37c7ecbbd
/*Hola, me regalan una pc?*/
<<<<<<< HEAD
>>>>>>> aa7d10cdbb8514abb7782845c14112327ccf5041
=======
>>>>>>> c8931a174d77ed5ad81062e73ee1c5c37c7ecbbd
>>>>>>> cf487e0cb02b7a377645fc5541394bc861e9ea68
=======








/*Prueba*/
>>>>>>> da3a7b29cd3a8ae146b16696d4b462e436650f0d
<<<<<<< HEAD
=======
>>>>>>> aa7d10cdbb8514abb7782845c14112327ccf5041
>>>>>>> c8931a174d77ed5ad81062e73ee1c5c37c7ecbbd
