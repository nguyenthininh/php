<?php
$aaa = 10;
$bbb = "hello world!";
$ccc = [1,2,3,4];
echo $bbb. "<br/>";   //echo gia tri muon in ra

if($aaa > 9){
    echo "gia tri >= 10  <br/>";
}else{
    echo "gia tri < 10  <br/>";
}

//dung ham
tenHam(1999);
foreach ($ccc as $c){   // $ccc la mang va $c la phan tu cua mang
    echo $c. "<br/>";
}

function tenHam($var){
    echo $var;
}

