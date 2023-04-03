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
