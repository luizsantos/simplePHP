<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo com PHP</title>
</head>
<body>

    <form method="post">
        <button type="submit" name="btnOla">Clique Aqui</button>
    </form>

    <?php
    if (isset($_POST['btnOla'])) {
        echo "<p>Olá, Mundo!</p>";
    }
    ?>

</body>
</html>
