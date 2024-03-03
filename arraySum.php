1 - Soma dos elementos: 
Escreva um programa em PHP que solicite ao usuário que insira um vetor de números inteiros. 
Em seguida, o programa deve calcular e exibir a soma de todos os elementos do vetor.

<?php 
	
	$numbers = [];

	for ($contador = 1; $contador <= 5 ; $contador++) { 
		echo "Digite a entrada de número $contador: ";
		$entrada = fgets(STDIN);

		$numbers[$contador] = $entrada;
	}

	$sum = array($numbers[1], $numbers[2], $numbers[3], $numbers[4], $numbers[5]);
	$resultado = array_sum($sum);
	echo "A soma do array é igual a $resultado\n";