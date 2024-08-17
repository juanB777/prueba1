<?php
    $n1 = readline("digite nota 1 ");
    $n2 = readline("digite nota 2 ");
    $n3 = readline("digite nota 3 ");

    if($n1>$n2 & $n1>$n3){
        echo "LA NOTA MAYOR ES N1 ". $n1;
    }
    elseif($n2>$n1 && $n2>$n3){
        echo "LA NOTA MAYOR ES N2 ". $n2;
    }
    elseif($n3>$n1 && $n3>$n2){
        echo "LA NOTA MAYOR ES N3 ". $n3;
    }


    if($n1<$n2 && $n1<$n3){
        echo "LA NOTA MENOR ES N1 "."". $n1;
    }
    elseif($n2<$n1 && $n2<$n3){
        echo "LA NOTA MENOR ES N2 "."". $n2;
    }
    elseif($n3<$n1 && $n3<$n2){
        echo "LA NOTA MENOR ES N3 "." ". $n3;
    }
        

