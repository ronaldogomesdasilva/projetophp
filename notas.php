<?php 

$totalAlunos = 6;

$aprovados = 0;
$exame = 0;
$reprovados = 0;
$somaMedias = 0;

for ($i = 1; $i <= $totalAlunos; $i++) {

    echo "Aluno $i <br>";

    // Simulação de entrada (pode trocar por formulário depois)
    $nota1 = rand(0, 10);
    $nota2 = rand(0, 10);

    echo "Nota 1: $nota1 <br>";
    echo "Nota 2: $nota2 <br>";

    $media = ($nota1 + $nota2) / 2;
    $somaMedias += $media;

    echo "Média: $media <br>";

    if ($media >= 7) {
        echo "Situação: Aprovado <br><br>";
        $aprovados++;
    } elseif ($media >= 5) {
        echo "Situação: Exame <br><br>";
        $exame++;
    } else {
        echo "Situação: Reprovado <br><br>";
        $reprovados++;
    }
}

// Resultados finais
$mediaClasse = $somaMedias / $totalAlunos;

echo "<hr>";
echo "Total Aprovados: $aprovados <br>";
echo "Total Exame: $exame <br>";
echo "Total Reprovados: $reprovados <br>";
echo "Média da Classe: $mediaClasse <br>";


 ?>