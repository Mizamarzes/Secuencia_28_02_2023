<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');

        $num1 = (int)40;
        $num2 = (int)20;

        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;
        $division = $num1 / $num2;
        $randNum = rand(1, 40);
        $floorNum = floor(10.35 + 3.65222);
        $ceilNum = ceil(2.99);
        $roundNum = round(3.4);
        $piNum = pi();
        $powNum =  pow(10, -1);  
        $minNum = min(4.5,7,8,11,24);
        $maxNum = max(2,1,0,5,10,17.5);

        echo "<br>Utilizar las operaciones aritmeticas con estos dos numeros <br>";    //Texto ejemplo
        echo "La suma es igual a <i>$suma</i> <br> ";                     //Suma
        echo "La resta es igual a <i>$resta</i> <br> ";                   //Resta
        echo "La multiplicación es igual a <i>$multiplicacion</i> <br>";     //Multiplicación
        echo "La división es igual a <i>$division</i><br>";      //División
        
        echo "<br>el numero RAND es $randNum<br>";           //rand

        echo "<br>FLOOR igual a $floorNum<br>";           //floor

        echo "<br>CEIL Profe me redondea es que saque 2.99 claro le queda en: $ceilNum <br>";      //ceil

        echo "<br>ROUND igual a $roundNum<br>";             //round

        echo "<br>el numero PI es igual a: $piNum<br>";       //pi

        echo "<br> POW es igual a $powNum<br>";                 //pow

        echo "<br> MIN es igual a $minNum<br>";

        echo "<br> MAX es igual a $maxNum<br>";

  

?>


    <!-- https://www.php.net/manual/es/function.rand.php
            https://www.php.net/manual/es/function.floor.php
            https://www.php.net/manual/es/function.ceil.php
            https://www.php.net/manual/es/function.round.php
            https://www.php.net/manual/es/function.pi.php
            https://www.php.net/manual/es/function.pow.php
            https://www.php.net/manual/es/function.min.php
            https://www.php.net/manual/es/function.max.php -->









