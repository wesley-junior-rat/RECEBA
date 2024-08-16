<?php
function listagem($con)
{
    $sql = 'SELECT * FROM usuario'; // consulta SQL
    $res = $con->query($sql); // executa a consulta SQL e retorna os dados
    echo '<h3>Dados dos Usuários</h3>';
    foreach ($res as $row) {
        $nivel = $row['nivel'] == 'A' ? 'Admin' : 'Usuário';
        echo "Id: {$row['id']} 
              - Nome: {$row['nome']} 
              - E-mail: {$row['email']}
              - Nivel: {'$nivel'}
              <a href='index.php?id={$row['id']}'>Deletar</a>
              <br>";
    }
} // fim função listagem()

// Código para incluir novo usuário
if (
    isset($_POST['nome']) &&
    isset($_POST['email']) &&
    isset($_POST['senha']) &&
    isset($_POST['nivel'])
) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];

    $sql = "INSERT INTO usuario (nome, email, senha, nivel)
            VALUES ('$nome', '$email', SHA1('$senha'), '$nivel')";

    $res = $conexao->query($sql); // executa a consulta SQL de inserção
}

// código para deletar um usuário por id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM usuario WHERE id=$id";
    $res = $conexao->query($sql); // executa a consulta SQL de deleção
}
