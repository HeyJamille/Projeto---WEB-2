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
        margin-left: -5vw;
    }
</style>

<?php
    $conecta = pg_connect("host=localhost dbname=frota user=postgres password=1212");

    session_start();

    $ID = $_POST['ID'];

    if($ID == "") {
        echo "<script language='javascript' type='text/javascript'>
        location.href = '../veiculos.html';
        </script>";
	}

    $query = ("SELECT * FROM frota.veiculo WHERE id_carro = $ID");

    $consulta = pg_query($conecta, $query);
    $quantidade = pg_num_rows($consulta);

    if($quantidade > 0 && $obj = pg_fetch_object($consulta)) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Veículo encontrado!');
        </script>";
        
        echo "<div><h2>Dados do Veículo com o ID: $obj->id_carro</h2>"."</br>";
        echo "<table border='1'>".
        "<tr>".
        "<th> ID: </th>".
        "<th> Modelo: </th>".
        "<th> Ano: </th>".
        "<th> Placa: </th>".
        "<th> ID da Garagem: </th>".
        "</tr>".

        "<tr>".
        "<th>" .$obj->id_carro. "</th>".
        "<th>" .$obj->modelo. "</th>".
        "<th>" .$obj->ano. "</th>".
        "<th>" .$obj->placa. "</th>".
        "<th>" .$obj->id_garagem. "</th>".
        "</tr>".
        "</div>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Veículo não encontrado. Por favor, cadastre um novo ou tente novamente!');
        location.href='../veiculos.html';
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
