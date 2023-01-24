<?php

//Incluir a sessao
session_start();

//Incluir a conexao
include_once("conexao.php");

//Pegar valor dos formulários
$idnome = $_POST ['usuario_contrato'];
$idplano = $_POST ['plano_contrato'];


//Inserir no banco de dados
$result_contratos = "INSERT INTO contratos (id_usuario, nome_usuario, id_plano, nivel_plano, created) VALUES ('$idnome', '$nome', '$idplano', '$nivel', NOW())";
$resultado_contratos = mysqli_query($conn, $result_contratos);


//validar se foi cadastrado com sucesso   obs: colocar $_session['msg'] no local onde será informado a validação    obs: A mensagem pode ser formatada com html para atribuir cor
if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<div class='alert alert-success col-md-3 text-center'>Contratação realizada</div>";
    header("Location: contratar.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger col-md-3 text-center'>Contratação não realizada</div>";
    header("Location: contratar.php");
}