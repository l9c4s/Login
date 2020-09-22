var name = "";
var nomeValido = "";
var senha = "";
var email = "";
var tel = "";
var cpf = "";
var rg = "";
//funcao para habilitar/desabilitar a caixa de apan
function validaSpan(item, spanId){ 
    let span = document.getElementById(spanId);
    if(item.length <= 5){
        span.classList.remove("valido");
        span.classList.add("invalido");
    } else {
        span.classList.remove("invalido");
        span.classList.add("valido");
    }
}
//funcao para habilitar/desabilitar a caixa de apan do email
function validaspanemail(item ,spanId){
    let spam1 = document.getElementById(spanId)
    if(item == 1){
        spam1.classList.remove("valido");
        spam1.classList.add("invalido");
    } else if(item == 2){
        spam1.classList.remove("invalido");
        spam1.classList.add("valido");
    }

}
// CONFIGURAÇÕES DO CAMPO "NOME"
    // funcao para configuracao do campo nome
    function recebeNome(){
        //chamando funcao para habilitar/desabilitar span e recebendo valor do campo Nome
        name = document.getElementById("nome").value;
    }
    //funcao para validar o campo Nome
    function validanome(){
        if(name == "" || name == null || name.length <= 5){
            //impendido usuario de sair da caixa
            document.form_user.nome.select();
            document.form_user.nome.focus();
            validaSpan(name,"testeSpan");
            return false;
        }
        validaSpan(name,"testeSpan");
        return true;
    }
// CONFIGURAÇÕES DO CAMPO "SENHA"
    // funcao para configuracao do campo nome
    function recebesenha(){
            //chamando funcao para habilitar/desabilitar span e recebendo valor do campo senha
        senha = document.getElementById("senha").value;
    }
    // funcao para validar o campo senha
    function validasenha(){
        if(senha.length <= 5){
            //impendido usuario de sair da caixa
            document.form_user.senha_usu.select();
            document.form_user.senha_usu.focus();
            validaSpan(senha,"testeSpan1")
            return false;
        }
        validaSpan(senha,"testeSpan1")
        return true;
    }
// CONFIGURAÇÕES DO CAMPO "EMAIL"
    function recebeemail(){
        //chamando funcao para habilitar/desabilitar span e recebendo valor do campo email
        email = document.getElementById("email").value;
    }
    function validaemail(){
        // expressao para validar o email antes de ser enviado
        var filter =/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        // vefificando o email
        if(!filter.test(email)){
            validaspanemail(1, "testeSpan2");
            document.form_user.email_usu.select();
            document.form_user.email_usu.focus();
            return false;
        }
        validaspanemail(2, "testeSpan2");
        return true;
    }
// CONFIGURAÇÕES DO CAMPO "Telefone"
    function recebetel(){
        tel = document.getElementById("telefone").value
    }
    function validatel(){
        if(tel.length <14){
            document.form_user.telefone.select();
            document.form_user.telefone.focus();
            validaspanemail(1 ,"testeSpan3");
        }else{
            validaspanemail(2 ,"testeSpan3");
            return true;
        }
            
    }
// CONFIGURAÇÕES DO CAMPO "CPF"
    function recebecpf(){
        cpf = document.getElementById("cpf_usu").value;
    }
    function validacpf(){
        if(cpf.length <14){
            document.form_user.cpf_usu.select();
            document.form_user.cpf_usu.focus();
            validaspanemail(1, "testeSpan4");
        }else{
            validaspanemail(2, "testeSpan4");
            return true;
        }
    }
// CONFIGURAÇÕES DO CAMPO "RG"     
    function receberrg(){
        rg = document.getElementById("rg_usu").value;
    }
    function validarg(){
        if(rg.length <13){
            document.form_user.rg_usu.select();
            document.form_user.rg_usu.focus();
            validaspanemail(1, "testeSpan5");
            return false;
        }else{
            validaspanemail(2, "testeSpan5")
            return true;
        }
    }
    function sendbot(){
    if(validanome() && validasenha() && validaemail()  && validatel() && validacpf() && validarg() == true){
        return true; 
    }
    return false;
        
}
function sendbot1(){
    if(validanome() && validasenha() == true){
        return true; 
    }
    return false;
}