<?php
    $conecta = pg_connect("host=localhost dbname=frota user=postgres password=1212");

    $ID = $_POST['ID'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $placa = $_POST['placa'];
    $ID_garagem = $_POST['ID_garagem'];

    if($ID == "" && $modelo == "" && $ano == "" && $placa == "" && $ID_garagem == "") {
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_veiculos.html';
        </script>";
	}
    else if($ID == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_veiculos.html';
        </script>";
	else if($modelo == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_veiculos.html';
        </script>";
	else if($ano == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_veiculos.html';
        </script>";
    else if($placa == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_veiculos.html';
        </script>";
	else if($ID_garagem == "") 
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../cad_veiculos.html';
        </script>";

    $sql = ("INSERT INTO frota.veiculo VALUES ('$ID', '$modelo', '$ano', '$placa', '$ID_garagem')");

    $resultado = pg_query($conecta, $sql);

    if($resultado) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Veículo cadastrado com sucesso!');
        location.href='../consultas.html';
        </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Ops, ocorreu um erro e por isso, o veículo não pôde ser cadastrado, tente novamente!');
        location.href='../cad_veiculos.html';
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
