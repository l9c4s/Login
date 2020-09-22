<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/teste - PHP/js/jquery-3.3.1.min.js"></script>
    <script src="/teste - PHP/JS/Valida.js"></script>
    <script src="/teste - PHP/js/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="/../teste - PHP/css/cadastro.css">
    <script>
        //mascara de campos utilizando jquery
        $(document).ready(function(){
        $("#telefone").mask("(00) 0000-0000")
        $("#cpf_usu").mask("000.000.000-00")
        $("#rg_usu").mask("999.999.999-w",{
                translation:{
                    'w': {
                        pattern: /[x0-9]/
                    }
                },
                reverse: true
        })
        })
    </script>
    <style>
        .valido{
            display: none;
        }
        .invalido{
            display: block;
        }
    </style>
<title>Teste</title>
</head>
<body>
   
    <form name="form_user" onsubmit="return sendbot(this)" action="PHP/cadastrar.php" method="post" >
        <div class="content">
            <div id="cadastro">
            <span>Formulario para cadastro</span>
                <span>Preencha os campos abaixos</span>
                <p>
                    <input  id="nome"  type="text"  maxlength="30" name="nome" onkeyup="recebeNome()" onblur="validanome()" placeholder="Digite aqui o Usuario"/>
                    <span  id="testeSpan" class="valido" style="color: red;">*Este campo precisa ter 6 caracteres*</span>
                </p>
                <p>
                    <input type="password" name="senha_usu"  onkeyup="recebesenha()" onblur="validasenha()" placeholder="Digite aqui sua senha">
                    <span  id="testeSpan1" class="valido" style="color: red;">*Este campo precisa ter 6 caracteres*</span>
                </p>
                <p>
                    <input type="text" name="email_usu" id="email" onkeyup="recebeemail()" onblur="validaemail()" placeholder="Digite aqui seu email">
                    <span  id="testeSpan2" class="valido" style="color: red;">*email incorreto*</span>
                </p>
                <p> 
                    <input type="text" name="telefone" id="telefone" onkeyup="recebetel()" onblur="validatel()" placeholder = "Digite aqui seu telefone">
                    <span  id="testeSpan3" class="valido" style="color: red;">*numero invalido*</span>
                </p>
                <p>
                    <input type="text" name="cpf_usu" id="cpf_usu" onkeyup="recebecpf()" onblur="validacpf()" placeholder="Digite aqui seu CPF">
                    <span  id="testeSpan4" class="valido" style="color: red;">*CPF invalido*</span>
                </p>
                <p>
                    <input type="text" name="rg_usu" id="rg_usu" onkeyup="receberrg()" onblur="validarg()" placeholder="Digite aqui seu RG"> 
                    <span  id="testeSpan5" class="valido" style="color: red;">*RG invalido*</span>
                </p>
                <input type="submit" value="enviar" onclick="sendbot()">
                <a href = '/../teste - PHP/index.html'>Login</a>
            </div>
        </div>
    </form>
</body>
</html>