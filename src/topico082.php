<?php
$nomes=["Fulano","Beltrano","Sicrano", "Astrogildo","Bete"];
$total = count($nomes); //count é resonsavel por contar a quantidade de elementos do array que no caso é 5
echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>";
echo "Último valor do array: ".$nomes[count($nomes)-1];//count($nomes)-1 é a posição do último elemento do array, pois o array começa com a posição 0, no caso do exemplo, o último elemento está na posição 4, que é igual a count($nomes)-1
echo "<hr>";
for($i=0;$i<count($nomes);$i++){
	echo $nomes[$i]."<br>";
}
?> 
<hr>
<?php
$uf=["SP","RJ","ES","MG"];
echo "<pre>";print_r($uf);echo "</pre>";
array_push($uf, "TO");
array_push($uf, "BA");
array_push($uf, "RN");
array_push($uf, "PR");//array_push é responsável por adicionar um elemento no final do array, no caso do exemplo, os elementos "TO", "BA", "RN" e "PR" foram adicionados no final do array
array_pop($uf);//array_pop é responsável por remover o último elemento do array, no caso do exemplo, o último elemento é "PR"
echo "<pre>";print_r($uf);echo "</pre>";
sort($uf);//sort é responsável por ordenar os elementos do array em ordem alfabética, no caso do exemplo, os elementos do array foram ordenados em ordem alfabética, O SORT NO BANCO DE DADOS É O ORDER BY!!
echo "<pre>";print_r($uf);echo "</pre>";
?>
<hr>
<?php
$estudante=[
   "id"=>1,
   "nome"=>"Matheus",
   "nota"=>9.5
];    
foreach($estudante as $pos=>$valor){
    echo "<br>$pos: $valor";
}
?>
<hr>
<?php
$multi=[
    [10,20,30],
    [40,50,60],
    [70,80,90]
];
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
      echo $multi[$i][$j]." ";
    }
    echo "<br>";
}           