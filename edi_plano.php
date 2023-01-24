<?php

//Incluir a sessao
session_start();

//Incluir a conexao
include_once("conexao.php");

//Pegar valor dos formulários
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_STRING);
$acessos = filter_input(INPUT_POST, 'acessos', FILTER_SANITIZE_STRING);

//Inserir no banco de dados
$result_planos = "UPDATE planos SET nome='$nome', nivel='$nivel', acessos='$acessos', modified=NOW() WHERE id='$id'";
$resultado_planos = mysqli_query($conn, $result_planos);


//validar se foi cadastrado com sucesso   obs: colocar $_session['msg'] no local onde será informado a validação    obs: A mensagem pode ser formatada com html para atribuir cor
if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<div class='alert alert-success col-md-3 text-center'>Cadastro realizado</div>";
    header("Location: editar_plano.php?id=$id");
}else{
    $_SESSION['msg'] = "<div class='alert alert-danger col-md-3 text-center'>Cadastro não realizado</div>";
    header("Location: editar_plano.php?id=$id");
}