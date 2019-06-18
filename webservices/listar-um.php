<?php
    try{
        $conexao = mysqli_connect("localhost","er1ckg03s","","tb_barcode");
                                 //server - usuario - senha - banco
        
        $id = $_GET['id'];
        
        $query = "select * from aparelho where cd_produto = $id";
        
        $resultado = mysqli_query($conexao,$query);
        
        $i = 0;
        
        while($linha = mysqli_fetch_assoc($resultado)){
            
            $registro = array(
                'aparelho'=>array(
                    'Nome' => $linha['nm_produto'],
                    'Valor' => $linha['ds_valor'],
                    'DescricaoGeral' => $linha['ds_dsgeral'],
                    'Processador' => $linha['ds_processador'],
                    'SistemaOperacional' => $linha['ds_soperacional'],
                    'TamanhoDaTela' => $linha['ds_tmtela'],
                    'TecnologiaWI-FI' => $linha['ds_twifi'],
                    'QuantidadeDeCameras' => $linha['ds_qcamera'],
                    'RespectivasResoluçãoDasCameras:' => $linha['ds_rescam'],
                    'MemoriaFlash' => $linha['ds_mflash']
                    )
                );
                
                $i++;
        }
        
        echo json_encode($registro);
    }
        catch (Exception $e){
            echo "Erro ao buscar: ".$e;
    }
?>