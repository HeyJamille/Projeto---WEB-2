<!-- ESTILO CSS -->
<style>
    div{
        margin-top: 14vw;
        margin-left: 36vw;
    }
    th {
        padding: 1vw;
    }
    table {
        margin-top: -1vw;
        margin-left: 4vw;
    }
</style>

<?php
    $conecta = pg_connect("host=localhost dbname=frota user=postgres password=1212");

    session_start();

    $ID = $_POST['ID'];

    if($ID == "") {
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../motoristas.html';
        </script>";
	}

    $query = ("SELECT * FROM frota.motorista WHERE id_motorista = $ID");

    $consulta = pg_query($conecta, $query);
    $quantidade = pg_num_rows($consulta);

    if($quantidade > 0 && $obj = pg_fetch_object($consulta)) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Motorista encontrado!');
        </script>";
        
        echo "<div><h2>Dados do motorista com o ID: $obj->id_motorista</h2>".'</br>';
        echo "<table border='1'>".
        "<tr>".
        "<th> ID: </th>".
        "<th> Nome: </th>".
        "<th> CPF: </th>".
        "</tr>".

        "<tr>".
        "<th>" .$obj->id_motorista. "</th>".
        "<th>" .$obj->nome. "</th>".
        "<th>" .$obj->cpf. "</th>".
        "</tr>".
        "</div>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Motorista não encontrado. Por favor, cadastre um novo ou tente novamente!');
        location.href='../motoristas.html';
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


