<?php
    require("./php/conexao.php");
   
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Dados | PetShop</title>
    <link rel="shortcut icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/3047/3047928.png" />

    <link rel="stylesheet" href="./css/stylelogin.css">

    <!--INICIO DA VALIDAÇÃO JS-->
    <script>
        function formatarCelular(celular) {
            var digits = celular.replace(/\D/g, '');
            var formattedValue = '';

            if (digits.length > 0) {
                formattedValue += '(' + digits.substring(0, 2);
            }

            if (digits.length > 2) {
                formattedValue += ') ' + digits.substring(2, 7);
            }

            if (digits.length > 7) {
                formattedValue += '-' + digits.substring(7, 11);
            }

            return formattedValue;
        }

        function mascaraCelular(event) {
            var input = event.target;
            var formattedValue = formatarCelular(input.value);

            input.value = formattedValue;
        }

        function validarFormulario(event) {
            event.preventDefault(); // Impede o envio do formulário

            var cep = document.getElementById('cep').value;
            var endereco = document.getElementById('endereco').value;
            var numCasa = document.getElementById('numcasa').value;
            var bairro = document.getElementById('bairro').value;
            var cidade = document.getElementById('cidade').value;
            var estado = document.getElementById('estado').value;
            var celular = document.getElementById('number').value;
            var antigoEmail = document.getElementById('antemail').value;
            var novoEmail = document.getElementById('email').value;
            var confirmarEmail = document.getElementById('confirmaremail').value;

            if (cep === '' || endereco === '' || numCasa === '' || bairro === '' || cidade === '' || estado === '' || celular === '' || antigoEmail === '' || novoEmail === '' || confirmarEmail === '') {
                alert('Por favor, preencha todos os campos obrigatórios.');
                return false;
            }

            // Validação de formato de e-mail
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(novoEmail)) {
                alert('Por favor, insira um novo e-mail válido.');
                return false;
            }

            // Verificação se o novo e-mail e a confirmação são iguais
            if (novoEmail !== confirmarEmail) {
                alert('O novo e-mail e a confirmação não correspondem.');
                return false;
            }


            // Envia os dados do formulário usando o método POST
            var formData = new FormData();
            formData.append('cep', cep);
            formData.append('endereco', endereco);
            formData.append('numcasa', numCasa);
            formData.append('bairro', bairro);
            formData.append('cidade', cidade);
            formData.append('estado', estado);
            formData.append('number', celular.replace(/\D/g, '')); // Remove caracteres não numéricos do número de celular
            formData.append('antemail', antigoEmail);
            formData.append('email', novoEmail);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'SUBSTITUIT.php'); // PHP SUBSTITUIR PELO ARQUIVO EM PHP
            xhr.onload = function () {
                // Manipule a resposta do servidor aqui
                if (xhr.status === 200) {
                    alert('Formulário enviado com sucesso!');
                } else {
                    alert('Ocorreu um erro ao enviar o formulário. Por favor, tente novamente mais tarde.');
                }
            };
            xhr.send(formData);
        }
    </script>
    <!--FIM DA VALIDAÇÃO JS-->
</head>

<body>

    <div class="form">
        <form onsubmit="validarFormulario(event)">
            <?php
                $usuarioAtivo = $_SESSION['idUsuario'];
                $conexao = Conexao::conectar();
                $consulta=$conexao->query("SELECT * FROM tbCliente WHERE idCliente = $usuarioAtivo");
          
                while($user = $consulta->fetch(PDO::FETCH_ASSOC)){

                    $nome = $user['nomeCliente'];
                    $telefone = $user['telefoneCliente'];
                    $email = $user['emailLogin'];
                    $cep = $user['cep'];
                    $endereco = $user['endereco'];
                    $numero = $user['numero'];
                    $bairro = $user['bairro'];
                    $cidade = $user['cidade'];
                    $estado = $user['estado'];
                    
                }?>
            <div class="form-header">
                <div class="title">
                    <h1>Configuração de Perfil</h1>
                    <br>
                    <h3>Endereço de Entrega</h3>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="cep">CEP</label>
                    <input id="cep" type="text" name="cep" maxlength="9" value="<?php echo $cep?>" required>
                </div>

                <div class="input-box">
                    <label for="endereco">Endereço</label>
                    <input id="endereco" type="text" name="endereco" maxlength="80" value="<?php echo $endereco?>" placeholder="Rua...">
                </div>

                <div class="input-box">
                    <label for="numcasa">Número casa</label>
                    <input id="numcasa" type="text" name="numcasa" value="<?php echo $numero?>" maxlength="4">
                </div>

                <div class="input-box">
                    <label for="bairro">Bairro</label>
                    <input id="bairro" type="text" name="bairro" value="<?php echo $bairro?>" maxlength="80">
                </div>

                <div class="input-box">
                    <label for="cidade">Cidade</label>
                    <input id="cidade" type="text" name="cidade" value="<?php echo $cidade?>" maxlength="80">
                </div>

                <div class="input-box">
                    <label for="estado">Estado</label>
                    <input id="estado" type="text" name="estado" value="<?php echo $estado?>" maxlength="80">
                </div>
            </div>

            <div class="title">
                <h3>Meus Dados</h3>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="number">Nome</label>
                    <input id="number" type="tel" name="number" placeholder="Nome Completo" value="<?php echo $nome?>" required >
                        
                </div>

                <div class="input-box">
                    <label for="antemail">Celular</label>
                    <input id="antemail" type="email" name="antemail" placeholder="(xx)xxxxx-xxxx" value="<?php echo $telefone?>" required
                    oninput="mascaraCelular(event)">
                </div>

                <div class="input-box">
                    <label for="confirmaremail">E-mail</label>
                    <input id="confirmaremail" type="email" name="confirmaremail" placeholder="xxxx@xxx.xxx" value="<?php echo $email?>"
                        required>
                </div>
            </div>

            <div class="continue-button">
                <button type="submit" class="btn-login">Atualizar</button>
            </div>
            <?php
                
            ?> 
        </form>
    </div>
</body>

</html>