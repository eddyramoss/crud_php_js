<?php

require "conexion.php";
$consulta = $pdo->prepare("SELECT * FROM  productos ORDER BY id DESC");
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach($resultado as $data) {
    echo "<tr>
            <td>".$data['id']. "</td> 
            <td>".$data['producto']. "</td>
            <td>".$data['precio']. "</td>
            <td>".$data['cantidad']. "</td>
            <td>
                <button type='button' class='btn btn-success' onclick=editar('".$data['id']. "')>Editar</button>

                <button type='button' class='btn btn-danger' onclick=eliminar('".$data['id']. "')>Eliminar</button>
            </td>
        </tr>
            ";
}
