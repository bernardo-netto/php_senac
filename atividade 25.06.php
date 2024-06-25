<?php
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO


// Desafio 1: Contagem Regressiva
/*
    Crie um programa que solicite ao usuário um número inteiro positivo N e realize uma contagem regressiva até zero.
    Após cada contagem, exiba a mensagem "Falta X segundos" onde X representa o número de segundos restantes para chegar a zero.
*/
$numero = 5; //Número fornecido pelo usuário.
echo "Contagem Regressiva <br>";

// Solução com for
for ($b = 2; $b <=20; $b = $b+1) {
    echo "Número $b <br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";

// Solução com while
$numero = 1;

whileI+($numero <=8) {
    echo "Número $numero <br>";
    $numero++;
}

echo "<br>";
echo "<hr>";
echo "<br>";

// Solução com do-while
$exemplo = 1;

do {
    echo "Número $exemplo <br>";
    $exemplo++;
} while ($exemplo <=5);

echo "<br>";
echo "<hr>";
echo "<br>";

// Desafio 2: Tabuada
/*
    Crie um programa que exiba a tabuada de multiplicação de um número fornecido pelo usuário.
    A tabuada deve ser exibida de 1 até 10.
*/

$tabuada_numero = 8;

// Solução com o FOR


// Solução com while

// Desafio 3: Sequência Fibonacci
/*
    A sequência de Fibonacci é uma sequência de números inteiros em que cada termo é a soma dos dois anteriores.
    Crie um programa que solicite ao usuário um número N e exiba os N primeiros termos da sequência de Fibonacci.
*/

// Solução com for

// Solução com while

//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

// Atividade 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
$A = 5;
$B = 10;
$C = 15;

if ($A + $B == $C) {
    echo "A soma de $A e $B é igual a $C";
} else {
    echo "A soma $A e $B não é igual a $C";
}

// Atividade 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/

// Implementação do Cálculo do Quadrado
$numero = 8;

$quadrado = $numero * $numero;
echo "O quadrado de $numero é $quadrado";

// Atividade 3: Verificar se um número é par ou ímpar
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/
$numero = 14;

if ($numero % 2 == 0) {
    echo "O número $numero é par.";
} else {
    echo "O número $numero é impar.";
}  

// Implementação da Verificação de Paridade

// Atividade 4: Calcular a média de três números
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/
$numero1 = 10;
$numero2 = 15;
$numero3 = 20;

$media = ($numero1 + $numero2 + $numero3) / 3;
    echo "A média dos números $numero1, $numero2, $numero3 é: $media";

// Implementação do Cálculo da Média

// Atividade 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/
$numeroMultiplo = 15;
$multiploDe = 5;

if ($numeroMultiplo % $multipoDe == 0) {
    echo "O nuúmero $numeroMultiplo é múltiplo de $multiploDe.";
} else {
    echo "O número $numeroMultiplo não é múltiplo de $multipoDe.";

}
// Implementação da Verificação de Múltiplo

//// Atividade 6: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/
$horas_string = "01:30";

// Implementação de Conversão de Horas em Minutos

$datetime = DateTime::createFromFormat('H:i', $horas_string);

if ($datetime !==false) {
    $horas = $datetime->format('H');
    $minutos = $datetime->format('i');

    $total_minutos = $horas * 60 + $minutos;
}

echo "O equivalente total em minutos de $horas_string é: $total_munitos <br>";

/// Atividade 7: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/
$altura_piramide = 5;

for ($i = 1; $i <= $altura_piramide; $i++) {

    for ($espaco = 1; $espaco <= $altura_piramide - $i; $espaco++) {
        echo " ";
    }

    for ($asterisco = 1; $asterisco <= 2 * $i - 1; $asterisco++) {
        echo "*";
    }

    echo "\n";
}
// Implementação de Desenho de Pirâmide

//// Atividade 8: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/
$numeroDigitos = 2048;

$numeroString = (string) $numeroDigitos;

$numDigitos = strlen($numeroString);

echo "O número $numeroDigitos tem $numDigitos dígitos.";
// Implementação de Contagem de Dígitos em um Número


//// Atividade 9: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/
$palavra = "abbabba";

function ehPalindromo($palavra) {

    $palavra = strlower(preg_replace('/|s+/', '', $palavra));

    $tamanho = strlen($palavra);

    for ($i = 0; $i <tamanho / 2; $i++) {
        if ($palavra[$i] !== $palavra[$tamanho - $i - 1]) {
            return false;
        }
    }
    return true;
}

if (ehPalindromo($palavra)) {
    echo "'$palavra' é um palíndromo.";
} else {
    echo "'palavra' não é um palídromo.";
}
// Implementação de Verificação de Palíndromo

//// Atividade 10: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/
$numero1 = 25;
$numero2 = 1;
$numero3 = 7;

$numeros = array($numero1, $numero2, $numero3);

sort($numeros);

echo "Números em ordem crescente: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}

// Implementação de Ordenação de Números

//// Atividade 11: Soma de Dígitos
/*
    Solicita ao usuário um número inteiro positivo e calcula a soma de todos os seus dígitos.
*/
$numeroSoma = 599;

function somaDigitos($numero) {
    $soma = 0;

    $numeroString = (string) $numero;

    for ($i = 0; $i <strlen($numeroString); $i++) {
        $soma += (int) $numeroString[$i];
    }

    return $soma;
}

$resultado = somaDigitos($numeroSoma);

echo "A soma dos dígitos de $numeroSoma é: $resultado";
// Implementação de Soma de Dígitos

?>