<?php 

// Criar mesas (40 mesas com 6 lugares cada)
$mesas = array_fill(1, 40, 6);

$totalOcupado = 0;

while (true) {

    // Simulação de entrada
    $mesa = rand(0, 40); // pode substituir por entrada real
    $lugares = rand(1, 6);

    if ($mesa == 0) {
        echo "Encerrando sistema...<br>";
        break;
    }

    echo "Mesa escolhida: $mesa <br>";
    echo "Lugares solicitados: $lugares <br>";

    if ($mesa < 1 || $mesa > 40) {
        echo "Mesa inválida!<br><br>";
        continue;
    }

    if ($mesas[$mesa] >= $lugares) {
        $mesas[$mesa] -= $lugares;
        $totalOcupado += $lugares;

        echo "Reserva realizada com sucesso!<br><br>";
    } else {
        echo "Não há lugares suficientes nesta mesa!<br><br>";
    }

    if ($totalOcupado >= 240) {
        echo "Todas as mesas estão ocupadas!<br>";
        break;
    }
}



 ?>