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
        margin-left: -20vw;
    }
</style>

<?php
    $conecta = pg_connect("host=localhost dbname=frota user=postgres password=1212");

    session_start();

    $ID = $_POST['ID'];

    if($ID == "") {
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../viagens.html';
        </script>";
	}

    $query = ("SELECT * FROM frota.viagens WHERE id_viagens = $ID");

    $consulta = pg_query($conecta, $query);
    $quantidade = pg_num_rows($consulta);

    if($quantidade > 0 && $obj = pg_fetch_object($consulta)) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Viagem encontrada!');
        </script>";

        echo "<div><h2>Dados da Viagem com o ID: $obj->id_viagens</h2>"."</br>";
        echo "<table border='1'>".
        "<tr>".
        "<th> ID: </th>".
        "<th> Km Inicial: </th>".
        "<th> Km Final: </th>".
        "<th> Data de Saída: </th>".
        "<th> ID do Veículo: </th>".
        "<th> ID do Motorista: </th>".
        "<th> Data de Entrada: </th>".
        "</tr>".

        "<tr>".
        "<th>" .$obj->id_viagens. "</th>".
        "<th>" .$obj->km_inicial. "</th>".
        "<th>" .$obj->km_final. "</th>".
        "<th>" .$obj->data_saida. "</th>".
        "<th>" .$obj->id_carro. "</th>".
        "<th>" .$obj->id_motorista. "</th>".
        "<th>" .$obj->data_entrada. "</th>".
        "</tr>".
        "</div>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Viagem não encontrada. Por favor, cadastre uma nova ou tente novamente!');
        location.href='../viagens.html';
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
