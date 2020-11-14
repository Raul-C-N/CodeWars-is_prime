<?php

function is_prime(int $n):bool{
    //base test - all numbers equal or inferior to one are NOT prime
    if ($n<=1) { 
        return False;
    }
    //base test - number 2 is the only even prime number
    else if ($n == 2) {
        return True;
    }
    //We opted to use trial test - README.md for more info
    else if ($n%2==0) {
        return False;
    }
    /* given an number $n, check if it is divisible by
    any number between $n and sqrt($n).
    if it is: $n is composite
    if it is not: $n is prime*/
       
    else {
        for ($i=2; $i <= sqrt($n) ; $i++) { 
            if ($n%$i==0){
                return False;
            }
        }
        return True;
        
    }
    
}


?>






<?php // testing area | setor de testes

// TESTE DO MOTOR PRINCIPAL 
/*
$n = 16;
for ($i=2; $i <= sqrt($n) ; $i++) { 
    echo "<p>",$i,"</p>";
    echo "<br>",$n," é divisível por ",$i,"?<br>";
    if ($n%$i==0){
        echo "SIM";
        return False;
        //break;
    }
    else {
        echo "NÃO </br>";   //COMO SAIR DO LOOP QUANDO TUDO FOR NEGATIVO?

    }
}
echo "é primo</br>";
return True; // VERIFICAR SE SAI SÓ AQUI OU SE SAI SEMPRE

echo "<br><hr>";
echo $n," tem raiz quadrada de ", sqrt($n),"<br>";

// FIM DO TESTE DO MOTOR PRINCIPAL */

//FUÇÂO TESTE ---------------------------
    function test($var){
        if ($var == 4 | $var == 1 | $var == -1 | $var == -3 or $var == 9) {
            $result = FALSE;
            
        }
        if ($var == 2 | $var == 79 | $var == 19) {
            $result = TRUE;
        }
        echo "<b>is_prime($var)</b> <i> resultado esperado: </i>",var_dump($result),
        "<br>", "<b>resultado obtido: </b>", var_dump(is_prime($var));
        echo "<br><br>";    
    }
// FIM FUNÇÂO TESTE -----------------------
/*
test(1);
test(2);
test(-1);
test(4);
test (-3); 
test (9); // composto
test (79); //primp
test (19); //primo

echo "<p>deveria estar na branch new</p>";
*/
var_dump (is_prime(1009));


?>
