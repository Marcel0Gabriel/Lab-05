<?php

if (isset($_POST['valor1']) && ($_POST['valor2'])) {
    $numero1 = $_POST['valor1'];
    $numero2 = $_POST['valor2'];
        $suma = $numero1 + $numero2;
        $producto = $numero1 * $numero2;
    echo "La suma del producto es: " .$suma."<br>";
    echo "La suma del producto es: " .$producto;
    include 'index.html';
}

if (isset($_POST['child_number'])){

    $child_num = $_POST['child_number'];
    $sold_import = $_POST['sold_import'];
    $child_age = $_POST['child_age'];
    if($child_age < 15){
        $bonus = $child_num * 50;
    }

    $g_salary = 600 + ((7.5/100)*$sold_import) + $bonus;
    $discount = (11/100)*$g_salary;
    echo "Bonificación: " .$bonus."<br>";
    echo "Sueldo bruto: " .$g_salary."<br>";
    echo "Descuento: " .$discount."<br>"; 
    include 'pages\excercises.html';
}



if(isset($_POST['soda_number'])){

    $soda_number = $_POST['soda_number'];
    if($soda_number >1){
        $soda_price = 20 - ((20 * (5/100))*(7/100));
        $candy = $soda_number * 2;
        echo "Precio: ".$soda_price. "<br>";
        echo "Regalo: ".$candy. "<br>";
        include 'pages\excercisestwo.html';
    } 
    }elseif($soda_number == 1){
        $soda_price_1 = 20 - (20 * (5/100));
        echo "Precio: ".$soda_price_1."<br>";
        echo "Regalo: ".$candy. "<br>";
        include 'pages\excercisestwo.html';
    }else{
        echo "Compra una gaseosa para calcular";
        include 'pages\excercisestwo.html';
    }


?>
