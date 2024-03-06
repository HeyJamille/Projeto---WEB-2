<?php

    // Conecta ao banco de dados
    $conecta = pg_connect("host=localhost dbname=frota user=postgres password=1212");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($nome == "" && $email == "" && $senha == "") {
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cadastro.html';
        </script>";
	}
    else if($nome == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cadastro.html';
        </script>";
	else if($email == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cadastro.html';
        </script>";
	else if($senha == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cadastro.html';
        </script>";
    
    // Insere as informações no banco de dados
    $sql = ("INSERT INTO frota.usuarios VALUES ('$nome', '$email', '$senha')");

    $resultado = pg_query($conecta, $sql);
    
    pg_close();
    echo "<script language='javascript' type='text/javascript'>
        alert('Usuário cadastrado com sucesso!');
        location.href='../consultas.html';
        </script>";

    /*
    if(!$conecta)
        echo "NAO Conectado";
    else
        echo "Conectado";

    /*
        
    OUTRA FORMA DE FAZER

    include "conexao.php"; 
        
    $nome = $_POST['ID'];
    $preco = $_POST['descricao'];

    //$sql = ("INSERT INTO frota.usuario VALUES ('$_REQUEST[ID]', '$_REQUEST[descricao]')");

    $resultado = pg_query($conecta, $sql);
    
    pg_close();
    echo 'Os dados do usuário foram adicionados ao banco de dados!';

    */

?>    
