<?php
    $conecta = pg_connect("host=localhost dbname=frota user=postgres password=1212");

    $ID = $_POST['ID'];
    $km_inicial = $_POST['km_inicial'];
    $km_final = $_POST['km_final'];
    $data_saida = $_POST['data_saida'];
    $ID_carro = $_POST['ID_carro'];
    $ID_motorista = $_POST['ID_motorista'];
    $data_entrada = $_POST['data_entrada'];

    if($ID == "" && $km_inicial == "" && $km_final == "" && $data_saida == "" && $ID_carro == "" && $ID_motorista== "" && $data_entrada == "") {
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_viagens.html';
        </script>";
	}
    else if($ID == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_viagens.html';
        </script>";
	else if($km_inicial == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_viagens.html';
        </script>";
	else if($km_final == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_viagens.html';
        </script>";
    else if($data_saida == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_viagens.html';
        </script>";
	else if($ID_carro == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_viagens.html';
        </script>";
    else if($ID_motorista == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_viagens.html';
        </script>";
	else if($data_entrada == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_viagens.html';
        </script>";

    $sql = ("INSERT INTO frota.viagens VALUES ('$ID', '$km_inicial', '$km_final', '$data_saida', '$ID_carro', '$ID_motorista', '$data_entrada')");

    $resultado = pg_query($conecta, $sql);
    
    if($resultado) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Viagem cadastrada com sucesso!');
        location.href='../consultas.html';
        </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Ops, ocorreu um erro e por isso, a viagem não pôde ser cadastrada, tente novamente!');
        location.href='../cad_viagens.html';
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
