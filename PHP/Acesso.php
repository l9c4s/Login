<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teste DKMA</title>
    <link rel="stylesheet" href="/../teste - PHP/css/acesso.css">
</head>
<body>
    <?php
    include('conexao.php');
    $nome = mysqli_real_escape_string($con, $_POST["nome"]);
    $senha = mysqli_real_escape_string($con, $_POST["senha_usu"]);
  

    $sql = "select * from usuario where usu_name ='{$nome}' and usu_senha = '{$senha}'";
   $resultado = mysqli_query($con, $sql);
   $row = mysqli_num_rows($resultado);

   if($row == 1){
    echo "<div class = 'content'>";
    echo "<span> bem vindo, $nome <br></span>";
    echo "<span> Voce pode voltar para a pagina de login ou cadastro</span>";
    echo "<a href = '/../teste - PHP/index.html'>Login </a>";
    echo "<a href = '/../teste - PHP/cadastro.php'>cadastro </a>";
    echo "</div>";
    exit();
   }else{
    echo "<div class = 'content'>";
    echo "<span> Usuario ou senha invalidos ):<br><span>";
    echo "<span>volte para a pagina de login ou de cadastro<span>";
    echo "<a href = '/../teste - PHP/index.html'>Login </a>";
    echo "<a href = '/../teste - PHP/cadastro.php'>cadastro </a>";
    echo "</div>";
   }
   exit;
    ?>
</body>
</html>