<?php
    try {
        $conexao = mysqli_connect("localhost","er1ckg03s","","tb_barcode");
                                     //server - usuario - senha - banco
        
        $nome = $_POST['Nome'];
        $valor = $_POST['Valor'];
        $geral = $_POST['DescricaoGeral'];
        $processador = $_POST['Processador'];
        $operacional = $_POST['SistemaOperacional'];
        $tela = $_POST['TamanhoTela'];
        $tecnologia = $_POST['TecnologiaWI-FI'];
        $quantidade = $_POST['QuantidadeDeCameras'];
        $respectivas = $_POST['RespectivasResoluçãoDasCameras'];
        $memoria = $_POST['MemoriaFlash'];
        
        
        
        $query = "update pessoas set nm_produto='$nome',ds_valor='$valor',ds_geral='$geral',ds_processador='$processador',ds_sopracional='$operacional',ds_tmtela='$tela',ds_twifi='$tecnologia',ds_qcamera='$quantidade',ds_rescam='$respectivas', where ds_mflash= $memoria";
        
        mysqli_query($conecta,$query);
        echo "Alteração realizada";
    } catch (Exception $e) {
        echo "erro ao cadastrar: ".$e;
    }
?>