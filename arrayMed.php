2- Média dos elementos:
Escreva um programa em PHP que solicite ao usuário que insira um vetor de números reais. 
O programa deve calcular e exibir a média aritmética dos elementos do vetor.

Vetor de entrada: [5.5, 6.8, 7.2, 8.1, 9.3]

<?php 
	
	$numbers = [];

	for ($contador = 1; $contador <= 5 ; $contador++) { 
		echo "Digite a entrada de número $contador: ";
		$entrada = fgets(STDIN);

		$numbers[$contador] = $entrada;
	}

	$sum = array($numbers[1], $numbers[2], $numbers[3], $numbers[4], $numbers[5]);
	$resultado = array_sum($sum)/count($sum);
	echo "A média do array é igual a $resultado\n";