<?php

//Incluir a sessao
session_start();

//Incluir a conexao
include_once("conexao.php");

//Pegar valor dos formulários
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

//Inserir no banco de dados
$result_usuario = "INSERT INTO usuarios (nome, email, telefone, created) VALUES ('$nome', '$email', '$telefone', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);


//validar se foi cadastrado com sucesso   obs: colocar $_session['msg'] no local onde será informado a validação    obs: A mensagem pode ser formatada com html para atribuir cor
if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<div class='alert alert-success col-md-3 text-center'>Cadastro realizado</div>";
    header("Location: cadastro_usuario.php");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger col-md-3 text-center'>Cadastro não realizado</div>";
    header("Location: cadastro_usuario.php");
}