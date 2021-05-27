function is_cpf (c) {

  if((c = c.replace(/[^\d]/g,"")).length != 11)
    return false

  if (c == "00000000000")
    return false;

  var r;
  var s = 0;

  for (i=1; i<=9; i++)
    s = s + parseInt(c[i-1]) * (11 - i);

  r = (s * 10) % 11;

  if ((r == 10) || (r == 11))
    r = 0;

  if (r != parseInt(c[9]))
    return false;

  s = 0;

  for (i = 1; i <= 10; i++)
    s = s + parseInt(c[i-1]) * (12 - i);

  r = (s * 10) % 11;

  if ((r == 10) || (r == 11))
    r = 0;

  if (r != parseInt(c[10]))
    return false;

  return true;
}


function fMasc(objeto,mascara) {
obj=objeto
masc=mascara
setTimeout("fMascEx()",1)
}

  function fMascEx() {
obj.value=masc(obj.value)
}

function mCPF(cpf){
cpf=cpf.replace(/\D/g,"");
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2");
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
return cpf
}

cpfCheck = function (el) {
    document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<span style="color:green">válido</span>' : '<span style="color:red">inválido</span>';
    if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
}

function enviar(){
            
            var deficiencia = document.getElementsByName("btn");
            
            var def = "";
        
            if(deficiencia[0].checked){
                def = "Visual";
            }else if(deficiencia[1].checked){
                def = "Auditiva";
            }else if(deficiencia[2].checked){
                def = "Motora";
            }else if(deficiencia[3].checked){
                def = "Autismo";
            }else{
                def = "Sindrome de Down";
            }
            
            alert(def);
    
    var genero = document.getElementsByName("btn");
            
            var gen = "";
        
            if(deficiencia[0].checked){
                def = "Visual";
            }else if(deficiencia[1].checked){
                def = "Auditiva";
            }else if(deficiencia[2].checked){
                def = "Motora";
            }else if(deficiencia[3].checked){
                def = "Autismo";
            }else{
                def = "Sindrome de Down";
            }
            
            alert(def);
    
    
}

function muda(){
    setTimeout("window.location='../login.php';",1500);
}

function somenteNumeros(evt){
    var theEvent = evt || window.event;
       var key = theEvent.keyCode || theEvent.which;
       key = String.fromCharCode( key );
       //var regex = /^[0-9.,]+$/;
       var regex = /^[0-9.]+$/;
       if( !regex.test(key) ) {
          theEvent.returnValue = false;
          if(theEvent.preventDefault) theEvent.preventDefault();
       }
}

//Mascara celular escola

function cMasc(objeto,mascara) {
obj=objeto
masc=mascara
setTimeout("cMascEx()",1)
}

  function cMascEx() {
obj.value=masc(obj.value)
}

function mCel(cel){
cel=cel.replace(/\D/g,"");
cel=cel.replace(/(\d{1})(\d)/,"($1$2");
cel=cel.replace(/(\d{2})(\d)/,"$1)$2")
cel=cel.replace(/(\d{5})(\d)/,"$1-$2")
return cel
}

//Mascara telefone escola

function telMasc(objeto,mascara) {
obj=objeto
masc=mascara
setTimeout("telMascEx()",1)
}

  function telMascEx() {
obj.value=masc(obj.value)
}

function mTel(tel){
tel=tel.replace(/\D/g,"");
tel=tel.replace(/(\d{1})(\d)/,"($1$2");
tel=tel.replace(/(\d{2})(\d)/,"$1)$2")
tel=tel.replace(/(\d{4})(\d)/,"$1-$2")
return tel
}


// CEP gera endereço

function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('idruaEsc').value=("");
    document.getElementById('idbairroEsc').value=("");
    document.getElementById('idcidadeEsc').value=("");
    document.getElementById('idufEsc').value=("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
         document.getElementById('idruaEsc').value=(conteudo.logradouro);
        document.getElementById('idbairroEsc').value=(conteudo.bairro);
        document.getElementById('idcidadeEsc').value=(conteudo.localidade);
        document.getElementById('idufEsc').value=(conteudo.uf);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('idruaEsc').value="...";
            document.getElementById('idbairroEsc').value="...";
            document.getElementById('idcidadeEsc').value="...";
            document.getElementById('idufEsc').value="...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};

// MASC cep

function cepMasc(objeto,mascara) {
obj=objeto
masc=mascara
setTimeout("cepMascEx()",1)
}

function cepMascEx() {
obj.value=masc(obj.value)
}

function mCep(cep){
cep=cep.replace(/\D/g,"");
cep=cep.replace(/(\d{5})(\d)/,"$1-$2");
return cep
}