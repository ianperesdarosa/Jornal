<?php
function validar(){
if(isset($_POST['bt_enviar'])) {

$nome  = $_POST['txtnome'];
$numero = $_POST['txtteal'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];

$erros = [];

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITAZE_ESPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email',FILTER_SANITAZE_EMAIL);
$numero = filter_input(INPUT_POST,'numero',FILTER_SANITAZE_NUMBER_INT);


if(!$email = filter_input(INPUT_POST,'email',FILTER_VALIDADE_EMAIL)) {
    $erros[] = "E-mail Inválido";
}
if(!$numero = filter_input(INPUT_POST,'numero',FILTER_VALIDADE_INT)) {
    $erros[] = "Número Inválido";
}
if(!empty($erros)){
    foreach($erros as $erro) {
        echo "<li>$erro</li>";
    }
} else {
    echo "<p>Dados Corretos</p>"; 
}

}
}
?>