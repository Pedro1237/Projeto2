<?php
class Reserva {
    private $id;
    private $nome;
    private $checkin;
    private $checkout;
    private $num_hospedes;

    public function __construct($id, $nome, $checkin, $checkout, $num_hospedes) {
        $this->id = $id;
        $this->nome = $nome;
        $this->checkin = $checkin;
        $this->checkout = $checkout;
        $this->num_hospedes = $num_hospedes;
    }

    public function definirId($id) {
        $this->id = $id;
    }

    public function definirNome($nome) {
        $this->nome = $nome;
    }

    public function definirCheckin($checkin) {
        $this->checkin = $checkin;
    }

    public function definirCheckout($checkout) {
        $this->checkout = $checkout;
    }

    public function definirNumHospedes($num_hospedes) {
        $this->num_hospedes = $num_hospedes;
    }

    public function exibirId() {
        return $this->id;
    }

    public function exibirNome() {
        return $this->nome;
    }

    public function exibirCheckin() {
        return $this->checkin;
    }

    public function exibirCheckout() {
        return $this->checkout;
    }

    public function exibirNumHospedes() {
        return $this->num_hospedes;
    }
}
