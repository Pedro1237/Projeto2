<?php
class RepositorioReserva
{
    public function cadastrar(PDO $banco, Reserva $reserva)
    {
        $sqlInsert = "INSERT INTO RESERVA(nome, checkin, checkout, num_hospedes) VALUES (:n, :ci, :co, :nh)";

        $insert = $banco->prepare($sqlInsert);

        $nome = $reserva->exibirNome();
        $checkin = $reserva->exibirCheckin();
        $checkout = $reserva->exibirCheckout();
        $num_hospedes = $reserva->exibirNumHospedes();

        $insert->bindParam(":n", $nome);
        $insert->bindParam(":ci", $checkin);
        $insert->bindParam(":co", $checkout);
        $insert->bindParam(":nh", $num_hospedes);

        $insert->execute();
    }

    public function exibirTudo(PDO $banco){
        $sql = "SELECT * FROM RESERVA";
        $dado = $banco->query($sql);
        return $dado->fetchAll(PDO::FETCH_ASSOC);
    }
}
