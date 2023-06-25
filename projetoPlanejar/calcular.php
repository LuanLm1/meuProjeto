<?php
    $dataHoraInicial = strtotime($_POST["data_hora_inicial"]);
    $dataHoraFinal = strtotime($_POST["data_hora_final"]); 

    $diferencaHoras = $dataHoraFinal - $dataHoraInicial;
    $horasTrabalhadas = round($diferencaHoras / 3600, 2);
    
?>
