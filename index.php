<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Reserva</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <form action="cadastrar.php" method="POST" class="m-6">
        <div class="field">
            <label class="label">Nome</label>
            <div class="control">
                <input class="input" type="text" name="txtNome">
            </div>
        </div>
        <div class="field">
            <label class="label">Check-in</label>
            <div class="control">
                <input class="input" type="text" name="txtCheckin">
            </div>
        </div>
        <div class="field">
            <label class="label">Check-out</label>
            <div class="control">
                <input class="input" type="text" name="txtCheckout">
            </div>
        </div>
        <div class="field">
            <label class="label">Número de Hóspedes</label>
            <div class="control">
                <input class="input" type="text" name="txtNumHospedes">
            </div>
        </div>

        <button type="submit" class="button is-primary">Cadastrar</button>
        <a class="button is-warning" href="listar.php">Listar dados</a>
        <a class="button is-info" href="index.html">Ver Pousadas</a>
    </form>
</body>
</html>
