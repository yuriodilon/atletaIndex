<?php

$categorias = [];

$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';



$name = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($name)){

    echo 'O nome  deve ser preenchido';
    return;
}

if(strlen($name) < 3){
    echo 'O nome deve ter mais de 3 Caracters';
    return;
}

if(strlen($name) > 40){
    echo 'O nome é muito extenso';
    return;
}

if(!is_numeric($idade)){ 
    echo 'Informe sua idade'; 
    return 0;}

if($idade >= 6 && $idade <= 12){
    echo 'Infantil';

}else if($idade >= 13 && $idade <= 18){
    echo 'Adolescente';
}else{
    echo 'Adulto';
}

?>