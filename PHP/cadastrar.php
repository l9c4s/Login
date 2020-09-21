<html>
    <head>
    <meta charset="UTF-8">
    <title>Teste DKMA</title>
    </head>
    <body>
<?php
session_start();
include('conexao.php');
## recebendo os valores do HTML
$nome=mysqli_real_escape_string($con, trim($_POST["nome"]));
$senha=mysqli_real_escape_string($con, trim($_POST["senha_usu"]));
$email=mysqli_real_escape_string($con, trim($_POST["email_usu"]));
$tel=mysqli_real_escape_string($con, trim($_POST["telefone"]));
$cpf=mysqli_real_escape_string($con, trim($_POST["cpf_usu"]));
$rg=mysqli_real_escape_string($con, trim($_POST["rg_usu"]));
## verificando se  tem o nome
$sql = "select count(*) as total from usuario where usu_name = '$nome'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultado);
if($row['total'] == 1){
    echo "<p> O nome $nome ja existe</p>";
    echo "<p> por favor clique em um dos botoes abaixo para retornar a pagina de cadastro ou login</p>";
    echo "<a href = '/../teste - PHP/index.html'>login</a>";
    echo "<a href = '/../teste - PHP/cadastro.php'>cadastro </a>";
    exit();
}
## verificando se o email ja tem cadastrado
$sql = "select count(*) as total from usuario where usu_email = '$email'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultado);
if($row['total'] == 1){
    echo "<p> O email $email ja existe</p>";
    echo "<p> por favor clique em um dos botoes abaixo para retornar a pagina de cadastro ou login</p>";
    echo "<a href = '/../teste - PHP/index.html'>login</a>";
    echo "<a href = '/../teste - PHP/cadastro.php'>cadastro </a>";
    exit();
}
## inserindo registro na tabela.
$insere = "INSERT INTO usuario (id_usu, usu_name, usu_senha, usu_email, usu_tel, usu_cpf, usu_rg) VALUES (NULL, '$nome', '$senha', '$email', '$tel', '$cpf', '$rg')";
if($con->query($insere) === TRUE){
    echo "<p> O usuario $nome foi cadastrado com sucesso</p>";
    echo "<p> voce pode voltar para a pagina de cadastro ou login</p>";
    echo "<a href = '/../teste - PHP/index.html'>Login</a>";
    echo "<a href = '/../teste - PHP/cadastro.php'>cadastro </a>";
    exit();
}
$con -> close();
exit;
?>
</body>
</html>