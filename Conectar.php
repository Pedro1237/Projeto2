<?php
try {
    $banco = new PDO("sqlite:../banco.sqlite");
    echo "Banco conectado!";
} catch(PDOException $e) {
    echo "Deu erro na conexão! ";
    echo $e->getMessage();
}

$tabela = "CREATE TABLE IF NOT EXISTS RESERVA(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    checkin DATETIME NOT NULL,
    checkout DATETIME NOT NULL,
    num_hospedes INTEGER NOT NULL)";

$banco->query($tabela);
