<?php

//Incluir a sessao
session_start();

//Incluir a conexao
include_once("conexao.php");


//Criar processo de deletar
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
    $result_usuario = "DELETE FROM usuarios WHERE id='$id'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    
    //informar se foi apagado ou não
    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<div class='alert alert-success col-md-2 offset-md-5  text-center'>Registro apagado</div";
        header("Location: listar_usuario.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger col-md-3 offset-md-5 text-center'>Registro não foi apagado</div>";
        header("Location: listar_usuario.php");
    }
}else {
    $_SESSION['msg'] = "<div class='alert alert-danger col-md-3 offset-md-5 text-center'>Usuario não foi encontrado, selecione um cadastro válido</div>";
    header("Location: listar_usuario.php");
}
