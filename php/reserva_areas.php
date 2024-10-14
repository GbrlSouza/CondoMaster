<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $area = $_POST['area'];
    $data_reserva = $_POST['data_reserva'];
    $usuario = $_POST['usuario'];

    $sql = "INSERT INTO reservas (area, data_reserva, usuario) VALUES ('$area', '$data_reserva', '$usuario')";

    if ($conn->query($sql) === TRUE) {
        echo "Reserva realizada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
