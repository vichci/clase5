<?php 
echo " 1) Mostrar los números del 1 al 9";
echo "<br>";
    $numero=1;  

    while($numero < 10){
        echo $numero;
        echo "<br>";
        $numero = $numero+1; //sumarle 1 a la variable.
    }
echo "2) Mostrar los números del 9 al 1.";
echo "<br>";
    while($numero > 0){
        echo $numero;
        echo "<br>";
        $numero = $numero-1; //restarle 1 a la variable.
}
    $numero1=1;
    $numero2=2;
echo "3) Mostrar los números pares del 1 al 20";
echo "<br>";

//acá vi la clase, pero lo iba a hacer con el % , y buscarle la vuelta para que me diera, aunque lo resolviste en clases y bueno...

$i=1;
    while($i<=20){   //puede iterar desde 0 a infinito (acá se termina por el $i++)
        if($i%2==0){
            //el numero es par y lo tengo que mostrar.
            echo $i . "<br>";
        }
    $i++;  //operacion de actualización de la variable de control
    }
echo "4) Mostrar los números impares del 1 al 20";
echo"<br>";

$j=1;
    while($j<=20){   //puede iterar desde 0 a infinito (acá se termina por el $i++)
        if($j%2!=0){
            //el numero es par y lo tengo que mostrar.
            echo $j . "<br>";
        }
    $j++;  //operacion de actualización de la variable de control
    }

    echo "5) Mostrar la suma de los números del 1 al 20.";
    echo "<br>";
    
    $suma = 0;
    $n = 1;
    
    while ($n <= 20) {
        
        $suma += $n;
        $n++;
    }
    
    echo $suma;
    echo "<br>";

    echo "6) Mostrar la suma de los números impares del 1 al 20.";
    echo "<br>";
    
    $r = 0;
    $c = 1;
    
    while ($c <= 20) {
        if($c % 2!==0){
            $r += $c;
            
    }$c++;}
    
    echo $r ;

    
    










?>