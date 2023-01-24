<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!--DataTable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


    <title>Document</title>
</head>
<body>
    <!--Barra de Navegação-->
    <nav class="navbar navbar-expand-lg bg-secondary fw-bold">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse offset-md-10" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Clientes
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="cadastro_usuario.php">Cadastro</a></li>
                          <li><a class="dropdown-item" href="listar_usuario.php">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Planos
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="cadastro_plano.php">Cadastro</a></li>
                          <li><a class="dropdown-item" href="listar_plano.php">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Contratar
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="contratar.php">Cadastro</a></li>
                          <li><a class="dropdown-item" href="listar_contrato.php">Listar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Texto-->
    <div class="container my-5">
        <h1>Preencha o formulário abaixo:</h1>
        <!--Formulário-->
        <div class="my-5">
            <form method="POST" action="cad_plano.php">
                <div class="col-3" >
                    <label class="form-label fw-bold">Informe o nome do plano</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome do plano" required>
                </div>
                <div class="col-3 my-4">
                    <label class="form-label fw-bold">Informe o nível do plano</label>
                    <input type="text" class="form-control" name="nivel" placeholder="Basico ou Avançado ou Plus" required>
                </div>
                <div class="col-3">
                    <label class="form-label fw-bold">Informe a quantidade de usuarios</label>
                    <input type="text" class="form-control" name="acessos" placeholder="1 a 10" required>
                </div>
                <div class="my-3 offset-2 px-3" >
                    <input type="submit" value="Cadastrar" class="btn btn-success fw-bold"></input>
                </div>
                
                <!--impressão da validação de cadastro ao usuário-->
                <?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
                }
                ?>
            </form>
        </div>
    </div>

</body>
</html>