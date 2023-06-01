let name;
name = document.getElementById("firstname").value
if (name == '') {
  alert("Digite seu nome!");
  document.getElementById('firstname').focus();
}
else if (name.length < 3) {
  alert("Digite um nome valido!");
  document.getElementById('firstname').focus()
}
