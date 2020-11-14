<?php

function is_prime(int $n):bool{
    if ($n<=1) {
        echo "menor ou igual a 1";
        return False;
    }
    else if ($n%2==0) {
        echo "divisivel por 2";
        return False;
    }
    // given an number $n, check if it is divisible by
    // any number between $n and sqrt($n).
    //if it is: $n is composite
    //if it is not: $n is prime
    
    /*
    else {
        for ($i=0; sqrt($n) < ;sqrt($n)i++) sqrt($n)
            # code...
        }
    */
    }


?>






<?php // testing area | setor de testes
echo 2%2;
echo "<br>";
is_prime(2);

$n = 9;
for ($i=2; sqrt($n) < $i ; $i++) { 
    echo $i,"<br>";
}
/*    function test($var){
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
//test(4);

echo "<p>deveria estar na branch new</p>";

*/
?>
