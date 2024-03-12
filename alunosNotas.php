<?php
echo "\n";
echo "Quantas pessoas tem na sua turma? ";
$qtdAlunos = intval(fgets(STDIN));
echo "\n";
$alunos = array();

for ($i = 1; $i <= $qtdAlunos; $i++) { 
    echo "Qual o nome do $i"."º aluno? ";
    $nomeAluno = fgets(STDIN);
    $alunos[$i]["nome"] = $nomeAluno;

    for ($numNota = 1; $numNota <= 4; $numNota++) { 
        echo "Digite a nota número $numNota: ";
        $nota = fgets(STDIN);
        $alunos[$i]["notas"][$numNota] = $nota;

        if ($numNota == 4) {
            $mediaAluno = ($alunos[$i]["notas"][1] + $alunos[$i]["notas"][2] + $alunos[$i]["notas"][3] + ($alunos[$i]["notas"][4] * 2));
            echo "Calculando media do aluno $i\n";
            $alunos[$i]["media"] = $mediaAluno;

            if ($mediaAluno >= 7) {
                $resultadoMed = "Aprovado";
                $alunos[$i]["resultado"] = $resultadoMed;
            } else {
                $resultadoMed = "Reprovado";
                $alunos[$i]["resultado"] = $resultadoMed;
            }
        }
    }

echo "\n";
}

echo "ALUNO\t\tNOTA1\t\tNOTA2\t\tNOTA3\t\tNOTA4\t\tMEDIA\t\tRESULTADO\n";
echo "----------------------------------------------------------------------------------------------------------\n";
foreach ($alunos as $aluno) {
    echo trim($aluno["nome"]) . "\t\t";

    foreach ($aluno["notas"] as $nota) {
        echo trim($nota) . "\t\t";
    }
echo trim($aluno["media"]) . "\t\t";
echo trim($aluno["resultado"] . "\t\t");
echo "\n";
}
echo "----------------------------------------------------------------------------------------------------------\n\n";
print_r($alunos);