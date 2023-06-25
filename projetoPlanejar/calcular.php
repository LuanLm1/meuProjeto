<?php
    $dataHoraInicial = strtotime($_POST["data_hora_inicial"]);
    $dataHoraFinal = strtotime($_POST["data_hora_final"]); 

    $diferencaHoras = $dataHoraFinal - $dataHoraInicial;
    $horasTrabalhadas = round($diferencaHoras / 3600, 2);

    if ($horasTrabalhadas >= 24) {
        echo "<p style='color: red;'>Erro: A diferença de horas deve ser inferior a 24.</p>";
    } else {
        $horasDiurnas = 0;
        $horasNoturnas = 0;
        $horaAtual = $dataHoraInicial;

        while ($horaAtual < $dataHoraFinal) {
            if (date("H:i", $horaAtual) >= "05:00" && date("H:i", $horaAtual) < "22:00") {
            $horasDiurnas++;
            } else {
            $horasNoturnas++;
            }

            $horaAtual++;
    }
}
    
?>
