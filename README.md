This is a CodeWars PHP language Kata exercise.

Instructions are bellow:

"Define a function that takes one integer argument and returns logical value true or false depending on if the integer is 
a prime.

Per Wikipedia, a prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 and itself.

------------------

Requirements

    You can assume you will be given an integer input.

    You can not assume that the integer will be only positive. You may be given negative numbers as well (or 0).

    NOTE on performance: There are no fancy optimizations required, but still the most trivial solutions might time out. Numbers go up to 2^31 (or similar, depends on language version). Looping all the way up to n, or n/2, will be too slow."


-------------------------------------------------------------------------------------------------------
    Approach notes (in portuguese):
    
    ANOTAÇÕES DE ABORDAGEM

    opção matemática = teste de divisão
        1) dado um número 'n', checar se é divisível por qualquer número primo entre 2 e raiz de 'n'.
        2) se afirmativo, 'n' é composto
        3) se negativo, 'n' é primo

        ACELERADOR:
        a)criar conjunto com todos os números primos de 0 a 200
        b) verificar a divisibilidade de 'n' por qualquer número deste conjunto
        b.1) caso afirmativo, o número é composto
        b.2) caso negativo, seguir para o programa inicial (passos 1,2 e 3)