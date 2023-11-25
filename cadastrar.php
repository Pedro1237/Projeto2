<?php
require "Conectar.php";
require "Reserva.php";
require "RepositorioReserva.php";

$nome = $_POST['txtNome'];
$checkin = $_POST['txtCheckin'];
$checkout = $_POST['txtCheckout'];
$num_hospedes = $_POST['txtNumHospedes'];

$novaReserva = new Reserva(null, $nome, $checkin, $checkout, $num_hospedes);

(new RepositorioReserva())->cadastrar($banco, $novaReserva);

header('Location: /'); // Redireciona para a página principal depois que cadastra
