<?php
    //Conexão com banco de dados
    //Criar o objeto de conexão
    $SERVIDOR   = 'localhost';
    $USUARIO    = 'admin';
    $SENHA      = '@Luno123';
    $BANCO      = 'TI41';

    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);

    If ( $con->connect_error){
        //Aqui faz o código necessario em caso de erro durante a conexão com o banco de dados
        echo "Erro ao conectar com a base de dados";
    }else{
        echo "<h3>A conexão com o banco de dados foi realizado</h3>";

        $sql = "select * from clientes";
        $ret = $con -> query($sql);

        while ($registro = $ret -> fetch_assoc()){
            //Exibe os registros retornados pelo comando SQL executado
            echo "Nome: " . $registro['nome'];
            echo " , Telefone: " . $registro['telefone'];
            echo "<br>";

        }


        $con -> Close();
    }


?>