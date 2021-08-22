<?php

$categorias = [];

$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';



$name = 'Eduardo';
$idade = 21;

if($idade >= 6 && $idade <= 12){
    echo 'Infantil';

}else if($idade >= 13 && $idade <= 18){
    echo 'Adolescente';
}else{
    echo 'Adulto';
}

?>