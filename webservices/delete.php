<?php
    try{
        $conexao = mysqli_connect("localhost","er1ckg03s","","tb_barcode");
                                 //server - usuario - senha - banco
        $id = $_GET['id'];
        
        $query = "delete from pessoas where cd_produto = $id";
        
        mysqli_query($conecta,$query);
        echo "registro removido";
    }catch (Exception $e) {
        echo "erro ao deletar: ".$e;
    }
?>