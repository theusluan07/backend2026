<?php
$a=30;
$a=10;
$a=5;
echo "<br>a = $a";
//    0  1  2
$arr=[30,10,5];
$arr[0]+=5;
echo "<br>arr[0] = ".$arr;
echo "<br>arr[1] = ".$arr[1];
echo "<br>arr[2] = ".$arr[2];
//    0    1    2    3
$uf=["SP","RJ","MG","ES"];
echo "<br>".$uf[2];//MG
echo "<pre>";print_r($uf);echo "</pre>";
$estudante=[
    "id"    => 1,
    "ra"    => 123456,
    "nome"  => "Bete",
    "curso" =>"TADS"
];
echo "<br>id: ".$estudante["id"];
echo "<br>ra: ".$estudante["ra"];
echo "<br>nome: ".$estudante["nome"];
echo "<br>curso: ".$estudante["curso"];
echo "<pre>";print_r($estudante);echo "</pre>";
/*
Mostrar a saída:
id: 1
ra: 123456
nome: Bete
curso: TADS
*/
echo "<hr>";
$matriz=[
    [10,20,30],
    [40,50,60],
    [70,80,90]
];
echo"<br>";
//60


?>
