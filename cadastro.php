<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <script src="/teste - PHP/js/jquery-3.3.1.min.js"></script>
    <script src="/teste - PHP/JS/Valida.js"></script>
    <script src="/teste - PHP/js/jquery.mask.min.js"></script>
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

</head>
<body>
    <h1>Formulario para cadastro</h1>
    <form name="form_user" onsubmit="return sendbot(this)" action="PHP/cadastrar.php" method="post" >
        <div class="content">
            <div id="cadastro">
                <h1>Preencha os campos abaixos</h1>
                <p>
                    <label for="nome_login">Digite seu nome</label>
                    <input  id="nome"  type="text"  maxlength="30" name="nome" onkeyup="recebeNome()" onblur="validanome()" placeholder="Digite aqui o Usuario"/>
                    <span  id="testeSpan" class="valido" style="color: red;">*Este campo precisa ter 6 caracteres*</span>
                </p>
                <p>
                    <label for="senha_usu" >Digite sua senha</label>
                    <input type="password" name="senha_usu"  onkeyup="recebesenha()" onblur="validasenha()">
                    <span  id="testeSpan1" class="valido" style="color: red;">*Este campo precisa ter 6 caracteres*</span>
                </p>
                <p>
                    <label for="email_usu">Digite seu email</label>
                    <input type="text" name="email_usu" id="email" onkeyup="recebeemail()" onblur="validaemail()">
                    <span  id="testeSpan2" class="valido" style="color: red;">*email incorreto*</span>
                </p>
                <p>
                    <label for="email_usu">Telefone</label>
                    <input type="text" name="telefone" id="telefone" onkeyup="recebetel()" onblur="validatel()">
                    <span  id="testeSpan3" class="valido" style="color: red;">*numero invalido*</span>
                </p>
                <p>
                    <label for="email_usu">CPF</label>
                    <input type="text" name="cpf_usu" id="cpf_usu" onkeyup="recebecpf()" onblur="validacpf()">
                    <span  id="testeSpan4" class="valido" style="color: red;">*CPF invalido*</span>
                </p>
                <p>
                    <label for="email_usu">RG</label>
                    <input type="text" name="rg_usu" id="rg_usu" onkeyup="receberrg()" onblur="validarg()">
                    <span  id="testeSpan5" class="valido" style="color: red;">*RG invalido*</span>
                </p>
                <input type="submit" value="enviar" onclick="sendbot()">
            </div>
        </div>
    </form>
    <a href = '/../teste - PHP/index.html'>Login</a>
</body>
</html>