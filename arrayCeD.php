5- Ordenação:
Escreva um programa em PHP que solicite ao usuário que insira um vetor de números inteiros. 
O programa deve ordenar os elementos do vetor em ordem crescente ou decrescente e exibir o vetor ordenado.

5- Ordenação:
Vetor de entrada: [50, 20, 80, 35, 10]

<?php
	
	$numbers = [];

	for ($contador = 1; $contador <= 5 ; $contador++) { 
		echo "Digite a entrada de número $contador: ";
		$entrada = fgets(STDIN);

		$numbers[$contador] = $entrada;
	}

	$sum = array($numbers[1], $numbers[2], $numbers[3], $numbers[4], $numbers[5]);
	$crescente = sort($sum, SORT_NUMERIC);
	//$decrescente = arsort($sum);
	echo "Em ordem crescente será: $crescente\n";
	//echo "Em ordem decrescente será: $decrescente\n";
