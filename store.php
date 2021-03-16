<?php
include("conexion.php");

if (!empty($_POST['tarea'])) {
    //Recibir datos
    $tarea = $_POST['tarea'];
    $descripcion = $_POST['descripcion'];
    $urgente = $_POST['urgente'];
    $tipo = $_POST['tipo'];
    $prioridad = $_POST['prioridad'];

    //Validar datos

    //Guardar a BD
    $sql = "INSERT INTO tareas (tarea, priordad, urgente, descripcion, tipo) VALUES ('$tarea', '$prioridad', '$urgente', '$descripcion', '$tipo')";

    $conn->exec($sql);

    header("Location: index.php");
} else {
    echo "No hay datos";
}
