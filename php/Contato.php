<?php

if(isset($_POST['bt_enviar'])) 

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









?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Journal</title>
</head>
<body>
    <section>
        <h4 class="display-5 h5-estilo p-5">Deixe sua mensagem</h4>
        <form method="post" name="form" action="validar.php" onsubmit="return validar()" class="formulario">
            <div class="form-group">
                <label id="n" for="exampleFormControlInput1">Seu nome</label>
                <input type="text" name="txtnome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                <label id="num" for="exampleFormControlInput1">Número para contato</label>
                <input type="tel" name="txttel" id="numero" class="form-control">
            </div>
            <div class="form-group">
                <label id="em" for="exampleFormControlInput1">Email</label>
                <input type="email" name="txtemail" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label id="e" for="exampleFormControlSelect1"> Cidade: </label>
                <select name="cidade"  class="form-control" >
                    <option value="vazio"> Selecione... </option>
                    <option value="">Porto Alegre</option>
                    <option value="">Região Metropolitana</option>
                    <option value="">Vales</option>
                    <option value="">Fronteira Oeste</option>
                    <option value="">Litoral Norte</option>
                    <option value="">Região Central</option>
                    <option value="">Região da Campanha</option>
                    <option value="">Região Noroeste</option>
                    <option value="">Região Norte</option>
                    <option value="">Região Sul do RS</option>
                    <option value="">Mato Grosso</option>
                    <option value="">Serra Gaúcha</option>                            
                </select>
            </div>
            
            <div class="form-group">
                <label id="m" for="exampleFormControlInput1">Deixe seu Comentário</label>
                <textarea name="txtmensagem" class="form-control"></textarea>
            </div>
            <input type="submit" value="Enviar" name="bt_enviar" class="btn btn-info mb-3">
            <input type="reset" value="Limpar" class="btn btn-info mb-3">
        </form>
        
    </section>
</body>
</html>