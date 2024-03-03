4- Menor elemento:
Escreva um programa em PHP que solicite ao usuário que insira um vetor de números inteiros. 
O programa deve encontrar e exibir o menor elemento presente no vetor.

4- Menor elemento:
Vetor de entrada: [100, 85, 120, 75, 90]

<?php
	
	$numbers = [];

	for ($contador = 1; $contador <= 5 ; $contador++) { 
		echo "Digite a entrada de número $contador: ";
		$entrada = fgets(STDIN);

		$numbers[$contador] = $entrada;
	}

	$sum = array($numbers[1], $numbers[2], $numbers[3], $numbers[4], $numbers[5]);
	$resultado = min($sum);
	echo "O menor valor dentro do array é $resultado\n";