<?php
/*
Define a function that takes one integer argument and returns logical value true or false depending on if the integer is 
a prime.

Per Wikipedia, a prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 
and itself.
Requirements

    You can assume you will be given an integer input.
    You can not assume that the integer will be only positive. You may be given negative numbers as well (or 0).
    NOTE on performance: There are no fancy optimizations required, but still the most trivial solutions might time out. Numbers go up to 2^31 (or similar, depends on language version). Looping all the way up to n, or n/2, will be too slow.
*/

/* ANOTAÇÕES DE ABORDAGEM

opção matemática = teste de divisão
1)dado um número 'n', checar se é divisível por qualquer número primo entre 2 e raiz de 'n'.
2) se afirmativo, 'n' é composto
3) se negativo, 'n' é primo

ACELERADOR:
a)criar conjunto com todos os números primos de 0 a 200
b) verificar a divisibilidade de 'n' por qualquer número deste conjunto
b.1) caso afirmativo, o número é composto
b.2) caso negativo, seguir para o programa inicial (passos 1,2 e 3)

*/

function is_prime(int $n):bool{
    if ($n==0) {
        //echo "false";
        return false;
    }
    elseif (abs($n)==1 or abs($n)==2) {
        //echo "1 ou 2<br>";
        //echo "é primo<br>";
        return true;
    }
    elseif ($n%2==0 and $n!=0) {
        //echo "divisivel por 2<br>";
        //echo "não é primo<br>";
        return false;
    }
    else{
        for ($i=2; $i < sqrt(abs($n**2)); $i++) { 
            if ($n%$i==0){
                //echo "não é primo!";
                return false;
            }
            else {
                //echo "é primo!";
                return true;
                
            }
            
        }
    }
}

?>

<?php // setor de testes
    function test($var){
        if ($var == 1 or $var == -1 or $var == -3 or $var == 9) {
            $result = FALSE;
            
        }
        if ($var == 2) {
            $result = TRUE;
        }
        echo "<b>is_prime($var)</b> <i> resultado esperado: </i>",var_dump($result),
        "<br>", "<b>resultado obtido: </b>", var_dump(is_prime($var));
        echo "<br><br>";    
    }
test(1);
test(2);
test(-1);
test(4);

    
    /*echo "is_prime(2) resultado esperado: true","<br>", "<b>resultado obtido: </b>", is_prime(2);
    echo "<br><br>";
    echo "is_prime(-1) resultado esperado: false","<br>", "<b>resultado obtido: </b>", is_prime(-1);
    echo "<br><br>";*/
    
?>
