<?php

       class DB{
           static public function conectar(){
               $conexion = new PDO('mysql:host=localhost;dbname=restaurantepedidos', 'root', '');
               
               $conexion->exec("set names utf8");
               return $conexion;
           }
       }

?>