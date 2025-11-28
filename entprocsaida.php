<?php
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    if (!is_numeric($numero)) {
        echo "Por favor, digite um valor numérico.<br>";
    } else {
        if ($numero > 10) {
            echo "$numero é maior que 10.<br>";
        } elseif ($numero < 10) {
            echo "$numero é menor que 10.<br>";
        } else {
            echo "$numero é igual a 10.<br>";
        }
    }
}
?>

<form method="POST">
    Digite um número:
    <input type="text" name="numero">
    <button type="submit">Enviar</button>
</form>

<br>
<a href="index.php">Voltar</a>
