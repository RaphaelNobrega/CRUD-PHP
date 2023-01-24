<?php

//Incluir a sessao
session_start();

//Incluir a conexao
include_once("conexao.php");

//Pegar valor dos formulários
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_STRING);
$acessos = filter_input(INPUT_POST, 'acessos', FILTER_SANITIZE_STRING);

//Inserir no banco de dados
$result_planos = "INSERT INTO planos (nome, nivel, acessos, created) VALUES ('$nome', '$nivel', '$acessos', NOW())";
$resultado_planos = mysqli_query($conn, $result_planos);


//validar se foi cadastrado com sucesso   obs: colocar $_session['msg'] no local onde será informado a validação    obs: A mensagem pode ser formatada com html para atribuir cor
if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<div class='alert alert-success col-md-3 text-center'>Cadastro realizado</div>";
    header("Location: cadastro_plano.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger col-md-3 text-center'>Cadastro não realizado</div>";
    header("Location: cadastro_plano.php");
}