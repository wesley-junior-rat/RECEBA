<?php
include 'conexao.php'; // inclui a conexão com BD
$titulo_form = 'adastro de Usuário';
// Função que lista todos os usários da tabela usuario

listagem($conexao); // chamada para a função listagem
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09/08</title>
</head>

<body>

    <div>
        <h3><?= $titulo_form == '' ? 'Cadastro de Usuário' : 'Alteração de Usuário' ?></h3>
        <form method="post" action="index.php">
            <div>
                <label>Nome</label>
                <input type="text" name="nome" value="">
            </div>

            <div>
                <label>E-mail</label>
                <input type="email" name="email" value="">
            </div>

            <div>
                <label>Senha</label>
                <input type="password" name="senha">
            </div>
            <div>
                <label>Nivel</label>
                <select name="nivel">
                    <option value="A">Admin</option>
                    <option value="U" selected>User</option>
                </select>
            </div>


            <div>
                <button type="submit">Gravar</button>
            </div>
        </form>
    </div>

</body>

</html>