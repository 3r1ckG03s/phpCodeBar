<?php
    try{
        $conexao = mysqli_connect("localhost","er1ckg03s","","tb_barcode");
                                 //server - usuario - senha - banco
   
        $query = "select * from aparelho order by ds_codebar asc";
        
        $resultado = mysqli_query($conexao,$query);
        
        $registro = array(
            'aparelho' => array()
        );
        
        $i = 0;
        
        while($linha = mysqli_fetch_assoc($resultado)){
            $registro['aparelho'][$i] = array(
                'codigo' => $linha['ds_codebar'],
                );
                
                $i++;
        }
        echo json_encode($registro);
    }
        catch (Exception $e){
            echo "Erro ao buscar: ".$e;
    }
?>