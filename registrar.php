<?php

require("conexion.php");
if(isset($_POST)) {
$codigo  = $_POST['codigo'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    if(empty ($_POST['idp'])){
        $query = $pdo->prepare("INSERT INTO productos (codigo, producto, precio, cantidad) 
                                           VALUES (:codigo, :producto, :precio, :cantidad)");
    $query->bindParam(":codigo", $codigo);
    $query->bindParam(":producto", $producto);
    $query->bindParam(":precio", $precio);
    $query->bindParam(":cantidad", $cantidad);

    $query->execute();
    $pdo = null;
    echo "ok";
    }else{
        $id = $_POST['idp'];
        $query = $pdo->prepare("UPDATE productos SET codigo = :codigo, producto = :producto, precio = :precio, cantidad = :cantidad
                                WHERE id = :id");
    $query->bindParam(":codigo", $codigo);
    $query->bindParam(":producto", $producto);
    $query->bindParam(":precio", $precio);
    $query->bindParam(":cantidad", $cantidad);
    $query->bindParam("id", $id);
    $query->execute();
    $pdo = null;
    echo "Modificado";
    }

    

    

}
