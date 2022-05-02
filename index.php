<?php

require_once "controllers/Pedidos.php";
require_once "models/DB.php";

$Pedidos = new Pedidos();
$cone = DB::conectar();
$Pedidos->vistas();

?>