<?php
use App\Entity\Cadastro;
require_once 'Entity/Cadastro.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST["nome"];
    $cpfCnpj = $_POST["cpfCnpj"];
    $data = new DateTimeImmutable($_POST["data"]);
    $tipo = $_POST["tipo"];

    $cadastro = new Cadastro($nome, $cpfCnpj, $data, $tipo);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form" method="post">
        <label for="nome">Seu nome:</label>
        <input type="text" name="nome">

        <br>
        <br>

        <label for="cpfCnpj">CPF/CNPJ:</label>
        <input type="text" name="cpfCnpj">

        <br>
        <br>

        <label for="data">Data de nascimento/criação:</label>
        <input type="date" name="data">

        <br>
        <br>

        <select name="tipo" id="">
            <option value="">Selecione o tipo</option>
            <option value="cpf">CPF</option>
            <option value="cnpj">CNPJ</option>
        </select>

        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<h2>Cadastro Feito!</h2>";
        echo "<ul>";
        echo "<li>" . $cadastro->getNome() . "</li>";
        echo "<li>" . $cadastro->getCpfCnpj() . "</li>";
        echo "<li>" . $cadastro->getData() . "</li>";
        echo "<li>" . ($cadastro->getTipo() == 'cpf' ? "Pessoa física" : "Pessoa Juridica") . "</li>";
        echo "</ul>";
    }
    ?>
</body>

</html>