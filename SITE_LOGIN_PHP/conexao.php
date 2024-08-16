<?php
                        // servidor  ,usuário,senha, bd
    $conexao = new mysqli('localhost', 'root', '', 'aula') 
               or die('A conexão com o BD não foi realizada');
