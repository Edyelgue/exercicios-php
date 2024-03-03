3- Maior elemento:
Escreva um programa em PHP que solicite ao usuário que insira um vetor de números inteiros. 
O programa deve determinar e exibir o maior elemento presente no vetor.

3- Maior elemento:
Vetor de entrada: [15, 27, 8, 45, 32]

<?php
	
	$numbers = [];

	for ($contador = 1; $contador <= 5 ; $contador++) { 
		echo "Digite a entrada de número $contador: ";
		$entrada = fgets(STDIN);

		$numbers[$contador] = $entrada;
	}

	$sum = array($numbers[1], $numbers[2], $numbers[3], $numbers[4], $numbers[5]);
	$resultado = max($sum);
	echo "O maior valor dentro do array é $resultado\n";