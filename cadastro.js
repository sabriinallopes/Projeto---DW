//Validando Nome
function validaNome() {
  let jsNome;
  jsNome = document.getElementById("nome").value;

  if (jsNome == '') {
      alert("Digite o nome!");
      document.getElementById("nome").focus();
  }

  else if (jsNome.length < 3) {
      alert("Nome tem que ter pelo menos 3 caracteres!");
      document.getElementById("nome").focus();
  }
}
//Validando Sobrenome
function validaSobrenome() {
  let jsLname;
  jsLname = document.getElementById("sobrenome").value;

  if (jsLname == '') {
      alert("Digite o sobrenome!");
      document.getElementById("sobrenome").focus();
  }

  else if (jsLname.length < 3) {
      alert("Sobrenome tem que ter pelo menos 3 caracteres!");
      document.getElementById("sobrenome").focus();
  }
}
//Validando email
function validaEmail(jsEmail) {
  usuario = jsEmail.value.substring(0, jsEmail.value.indexOf("@"));
  dominio = jsEmail.value.substring(jsEmail.value.indexOf("@") + 1, jsEmail.value.length);

  if (usuario.length >= 1 &&
      dominio.length >= 3 &&
      usuario.search("@") == -1 &&
      dominio.search("@") == -1 &&
      usuario.search(" ") == -1 &&
      dominio.search(" ") == -1) {
      alert("E-mail valido!");
  } else {
      alert("E-mail inválido!");
  }
}
//Validando Numero
function validaNumero(jsNumero) {
  //DDDs validos
  var codigosDDD = [11, 12, 13, 14, 15, 16, 17, 18, 19,
    21, 22, 24, 27, 28, 31, 32, 33, 34,
    35, 37, 38, 41, 42, 43, 44, 45, 46,
    47, 48, 49, 51, 53, 54, 55, 61, 62,
    64, 63, 65, 66, 67, 68, 69, 71, 73,
    74, 75, 77, 79, 81, 82, 83, 84, 85,
    86, 87, 88, 89, 91, 92, 93, 94, 95,
    96, 97, 98, 99];
  jsNumero = document.getElementById("numero").value;
  jsNumero = jsNumero.replace(/\D/g, '');

  if(jsNumero.length >= 10 && jsNumero.length <= 11 &&
    jsNumero.length == 11 && parseInt(jsNumero.substring(2, 3)) != 9){
    alert("numero invalido")
    document.getElementById("numero").focus();
  }
  else if (codigosDDD.indexOf(parseInt(jsNumero.substring(0, 2))) == -1){
    alert("numero invalido")
    document.getElementById("numero").focus();
  }
}
function validaSenha() {
  let jsSenha;
  jsSenha = document.getElementById("senha").value;

  if (jsSenha == '') {
      alert("Digite uma senha");
      document.getElementById("senha").focus();
  }

  else if (jsSenha.length < 6) {
      alert("Sua senha tem que ter mais 6 digitos");
      document.getElementById("senha").focus();
  }
}
function confirmaSenha(){
  let senha = document.getElementById("senha")
  let confirmasenha = document.getElementById("confirmaSenha");
  if(senha.value != confirmasenha.value) {
    alert("As senhas são diferentes")
  }
}