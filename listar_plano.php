<?php
session_start();
include_once("conexao.php");
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
    <div class="container my-5 text-center">
        <h1>Lista de Planos:</h1>
    </div>
    <!--Criação de query para pesquisa no banco de dados-->
    <?php
    $result_planos = "SELECT * FROM planos";
    $resultado_planos = mysqli_query($conn, $result_planos);
    ?>
    <div class="container">
        <!--Criação do inicio da tabela-->
        <table id="tabelaPlanos" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Nivel</th>
                    <th>Acessos</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!--Criação do while para percorrer o banco de dados e corpo tabela-->
                <?php while($row_planos = mysqli_fetch_assoc($resultado_planos)){ ?>  
                    <tr>
                        <td><?= $row_planos['id']; ?></td>
                        <td><?= $row_planos['nome']; ?></td>
                        <td><?= $row_planos['nivel']; ?></td>
                        <td><?= $row_planos['acessos']; ?></td>
                        <td>
                            <button type='button' class='btn btn-primary'>
                                <a class='link-light text-decoration-none' href='editar_plano.php?id=<?= $row_planos['id'] ?>'>Editar</a>
                            </button>  
                        </td>
                        <td>
                            <button type='button' class='btn btn-danger'>
                                <a class='link-light text-decoration-none' href='del_plano.php?id=<?= $row_planos['id'] ?>'>Apagar</a>
                            </button>  
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!--Script datatable-->
    <script>
        $(document).ready(function () {
            $('#tabelaPlanos').DataTable();
            });
    </script>

</body>
</html>