<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projetoPlanejar</title>
</head>
<body>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $dataInicial = $_POST["data_inicial"];
        $horaInicial = $_POST["hora_inicial"];
        $dataFinal = $_POST["data_final"];
        $horaFinal = $_POST["hora_final"];
       
        $dataHoraInicial = $dataInicial . " " . $horaInicial;
        
        $dataHoraFinal = $dataFinal . " " . $horaFinal;

        $diferencaHoras = strtotime($dataHoraFinal) - strtotime($dataHoraInicial);
        $horasTrabalhadas = round($diferencaHoras / 3600, 2);

        if ($horasTrabalhadas >= 24) {
            echo "<p style='color: red;'>Erro: A diferença de horas deve ser inferior a 24.</p>";
        } else {
            $horasDiurnas = 0;
            $horasNoturnas = 0;
            $horaAtual = $dataHoraInicial;
        }

    }
?>
</body>
</html>