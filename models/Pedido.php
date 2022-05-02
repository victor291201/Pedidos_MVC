<?php

require_once "DB.php";

class Pedido{
static public function crear($mesa,$descripcion){
    $var = DB::conectar()->prepare("INSERT INTO pedidos (mesa,descripcion,estado) VALUES ('$mesa','$descripcion',0)");
    

    if($var->execute()){
        return "ok";
    }
    else{
        print_r(DB::conectar()->errorInfo());
    }
    $var->close();
    return "err";

}

static public function editar($id){
    $var = DB::conectar()->prepare("UPDATE pedidos SET estado=1 WHERE id = '$id'");

    if($var->execute()){
        return "ok";
    }
    else{
        print_r(DB::conectar()->errorInfo());
        $var->close();
    }
    return "err";
}

static public function eliminar($id){
    $var = DB::conectar()->prepare("DELETE FROM pedidos WHERE id = '$id'");

    if($var->execute()){
        return "ok";
    }
    else{
        print_r(DB::conectar()->errorInfo());
    }
    return "err";
}

static public function obtener(){
    $var = DB::conectar()->prepare("SELECT * FROM pedidos WHERE estado=0");
    $var->execute();
    return $var->fetchAll();
    $var->close;
}


}


?>