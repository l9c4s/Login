<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teste DKMA</title>
    <script src="/JS/Valida.js"></script>
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
    echo "<p> bem vindo, $nome</p>";
    echo "<p> Voce pode voltar para a pagina de login ou cadastro</p>";
    echo "<a href = '/../teste - PHP/index.html'>Login </a>";
    echo "<a href = '/../teste - PHP/cadastro.php'>cadastro </a>";
    exit();
   }else{
    echo "<p> Usuario ou senha invalidos ):<p>";
    echo "<p>volte para a pagina de login ou de cadastro<p>";
    echo "<a href = '/../teste - PHP/index.html'>Login </a>";
    echo "<a href = '/../teste - PHP/cadastro.php'>cadastro </a>";


   }
   exit;



    ?>
</body>
</html>