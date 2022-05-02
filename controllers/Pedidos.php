<?php
 
 require_once "models/Pedido.php";
 class Pedidos{
     public $datos;
     public function __construct(){
         $this->datos = Pedido::obtener();
     }
    public function vistas($rut=null,$nombre=null){
        if($_SERVER["REQUEST_URI"] == "/solucionphp/index.php"){
          include "views/sections/cabecera.php";
          include 'views/Menu.php';
          include "views/sections/pie.php";
        }
        else{
            $opt = $_GET["action"];
            $met = $_SERVER["REQUEST_METHOD"];
            if($met == "GET"){
                switch($opt){
                    case "VPedido":
                        if(isset($_GET["ind"])){
                            Pedido::eliminar($_GET["ind"]);
                        }
                        $this->datos = Pedido::obtener();
                        include "views/sections/cabecera.php";
                        include "views/".$opt.".php";
                        include "views/sections/pie.php";
                        break;
                    case "VProduccion":
                        if(isset($_GET["ind"])){
                            Pedido::editar($_GET["ind"]);
                        }
                        $this->datos = Pedido::obtener();
                        include "views/sections/cabecera.php";
                        include "views/".$opt.".php";
                        include "views/sections/pie.php";
                        break;
                        break;
                    default:
                        include "views/sections/cabecera.php";
                        include "views/".$opt.".php";
                        include "views/sections/pie.php";
                        break;
                }
            }
            if($met == "POST"){
                if(Pedido::crear($_POST['mesa'],$_POST['descripcion']) == "ok"){
                    echo '<script language="javascript">alert("Pedido agregado con exito");</script>';
                }
                else{
                    echo '<script language="javascript">alert("Error al agregar el pedido");</script>';
                }
                include "views/sections/cabecera.php";
                include "views/Pedido.php";
                include "views/sections/pie.php";
                
            }
        }
        
        
    } 
 }
?>