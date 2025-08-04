<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$valor1 = (float) $_POST['primeiroNumero'];
$valor2 = (float) $_POST['segundoNumero'];

$resultadoFinal = '';
function divisao($valor1, $valor2)
{
    return $valor1 / $valor2;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $primeiroNumeroInput = $_POST['primeiroNumero'] ?? '';
    $segundoNumeroInput = $_POST['segundoNumero'] ?? '';

    if (is_numeric($primeiroNumeroInput) && is_numeric($segundoNumeroInput)) {
        $valor1 = (float) $primeiroNumeroInput;
        $valor2 = (float) $segundoNumeroInput;

        $resultadoFinal = divisao($valor1, $valor2);
    } else {
        $mensagemErro = 'Por favor, insira apenas números válidos.';
        $resultadoFinal = '';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Soma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <h1 class="container text-center">Calculadora de soma</h1>
    <form action="" method="post" class="d-flex justify-content-center flex-wrap">
        <div class="d-flex flex-wrap justify-content-center">
            <label for="primeiroNumero"></label>
            <input type="number" name="primeiroNumero" id="primeiroNumero" class="fs-1 form-control"
                style="max-width: 300px;">

            <span class="fs-1">/</span>

            <label for="segundoNumero"></label>
            <input type="number" name="segundoNumero" id="segundoNumero" class="fs-1 form-control"
                style="max-width: 300px;">

            <span class="fs-1">=</span>

            <input type="number" name="resposta" id="resposta" readonly class="fs-1 form-control"
                style="max-width: 300px;" value="<?php echo $resultadoFinal; ?>">
        </div>
        <div class="w-100 text-center mt-3">
            <button type="submit" class="btn btn-primary btn-lg">Calcular</button>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>

</html>