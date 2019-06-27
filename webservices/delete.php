<?php
    try {
         $conexao = mysqli_connect("localhost","er1ckg03s","","tb_barcode");
                                 //server - usuario - senha - banco
    
        $id = $_GET['id'];
        
        $query = "delete from aparelho where cd_produto = $id";
        
        mysqli_query($conecta,$query);
        echo "registro removido com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao deletar: ".$e;
    }