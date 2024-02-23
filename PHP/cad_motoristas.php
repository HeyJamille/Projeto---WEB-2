<?php
    $conecta = pg_connect("host=localhost dbname=frota user=postgres password=1212");

    $ID = $_POST['ID'];
    $nome = $_POST['nome'];
    $CPF = $_POST['CPF'];

    if($nome == "" && $ID == "" && $CPF == "") {
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_motoristas.html';
        </script>";
	}
    else if($nome == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_motoristas.html';
        </script>";
	else if($ID == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_motoristas.html';
        </script>";
	else if($CPF == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_motoristas.html';
        </script>";

    $sql = ("INSERT INTO frota.motorista VALUES ('$ID', '$nome', '$CPF')");

    $resultado = pg_query($conecta, $sql);
    
    if($resultado) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Motorista cadastrado com sucesso!');
        location.href='../consultas.html';
        </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Ops, ocorreu um erro e por isso, o motorista não pôde ser cadastrado, tente novamente!');
        location.href='../cad_motoristas.html';
        </script>";
    }

    pg_close();

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
