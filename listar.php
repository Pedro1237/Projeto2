<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Reservas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Lista de Reservas</h1>

            <?php
            require "Conectar.php";
            require "Reserva.php";
            require "RepositorioReserva.php";

            $reservas = (new RepositorioReserva())->exibirTudo($banco);

            if (!empty($reservas)) {
                echo '<table class="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Nome</th>';
                echo '<th>Check-in</th>';
                echo '<th>Check-out</th>';
                echo '<th>Número de Hóspedes</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                foreach ($reservas as $reserva) {
                    echo '<tr>';
                    echo '<td>' . $reserva['id'] . '</td>';
                    echo '<td>' . $reserva['nome'] . '</td>';
                    echo '<td>' . $reserva['checkin'] . '</td>';
                    echo '<td>' . $reserva['checkout'] . '</td>';
                    echo '<td>' . $reserva['num_hospedes'] . '</td>';
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<p>Nenhuma reserva encontrada.</p>';
            }
            ?>
        </div>
    </section>
</body>

</html>
