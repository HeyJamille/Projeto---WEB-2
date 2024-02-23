<?php
    $conecta = pg_connect("host=localhost dbname=frota user=postgres password=1212");

    $ID = $_POST['ID'];
    $descricao = $_POST['descricao'];

    if($ID == "" && $descricao == "") {
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_garagem.html';
        </script>";
	}
	else if($ID == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_garagem.html';
        </script>";
	else if($descricao == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_garagem.html';
        </script>";
        
    $sql = ("INSERT INTO frota.garagem VALUES ('$ID', '$descricao')");

    $resultado = pg_query($conecta, $sql);

    if($resultado) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Garagem cadastrada com sucesso!');
        location.href='../consultas.html';
        </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Ops, ocorreu um erro e por isso, a garagem não pôde ser cadastrada, tente novamente!');
        location.href='../cad_garagem.html';
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
