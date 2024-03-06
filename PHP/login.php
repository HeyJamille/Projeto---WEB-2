<?php
    $conecta = pg_connect("host=localhost dbname=frota user=postgres password=1212");

    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == "" && $senha == "") {
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../login.html';
        </script>";
	}
	else if($email == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../login.html';
        </script>";
	else if($senha == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../login.html';
        </script>";

    $query = ("SELECT * FROM frota.usuarios WHERE email = '$email' AND senha = $senha");

    $consulta = pg_query($conecta, $query);
    $quantidade = pg_num_rows($consulta);

    if($quantidade > 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuário logado com sucesso!');
        location.href='../consultas.html';
        </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuário/Email ou senha não encontrados. Por favor, cadastre-se ou tente novamente!');
        location.href='../login.html';
        </script>";
    }

    /*

    if(!$conecta)
        echo "NAO Conectado";
    else
        echo "Conectado";

    */

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
