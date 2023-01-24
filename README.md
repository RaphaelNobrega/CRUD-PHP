
# CRUD em PHP e Data Tables

Este projeto foi criado para aprendizagem em HTML, CSS, Bootstrap, SQL, PHP e Data Tables. Portanto o mesmo realiza o cadastro, exibição, edição e remoção dos dados cadastrados em um banco de dados.


## Aprendizados

Durante a realização do projeto aprendi muito sobre a utilização do Bootstrap com HTML e CSS, um pouco sobre o funcionamento e incorporação do Back-end para armazenamento de dados durante o uso do PHP e SQL montando a query de cadastro, edição e remoção de dados no banco.
Aprendi também a implementação de Data Tables para exibição dos dados do servidor de forma mais clara ao usuário possibilitando a realização de pesquisa por um determinado valor.

## Stack utilizada

**Front-end:** HTML, CSS, Bootstrap

**Back-end:** PHP, SQL




## Screenshots
Projeto e seu menu com funcionalidades

https://prnt.sc/NsxUeiYx5ZDh

https://prnt.sc/1wffT367D7z0

## Instalação / Teste local

Após realizar o donwload do projeto e escolher o banco de dados de sua preferência (No projeto original foi utilizado o Wampserver junto ao HeidiSQL), tenha em mente que deverá ser alterado os seguintes dados dentro do arquivo "conexao.php" para que o banco de dados funcione.


```
<?php


//Dados para conexao
$servidor = "localhost";      <---Nome do seu servidor.
$usuario = "root";            <---Nome de login do servidor.
$senha = "";                  <---Senha de login do servidor.
$dbname = "dados";            <---Nome do banco de dados que será utilizado.

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

```

Abaixo destaco também as tabelas e respectivos campos que devem ser criados dentro do Banco de Dados:

```
usuarios -> nome, email, telefone, created, modified

planos -> nome, nivel, acessos, created, modified

contratos -> id_usuario, nome_usuario, id_plano, nivel_plano, created
```