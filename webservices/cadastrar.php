<?php
          
            try{
                $conexao = mysqli_connect("localhost","er1ckg03s","","tb_barcode");
                                 //server - usuario - senha - banco
                
                $codigo = $_POST['codigo'];
                $modelo = $_POST['modelo'];
                $fabricante = $_POST['fabricante'];
                $valor= $_POST['valor'];
                $descricao= $_POST['descricao'];
                $processador= $_POST['processador'];
                $sistema= $_POST['sistema'];
                $tela= $_POST['tamanhoTela'];
                $wifi= $_POST['wifi'];
                $cameras= $_POST['cameras'];
                $resolucao= $_POST['resolucao'];
                $memoria= $_POST['memoria'];
                
                $query="INSERT INTO aparelho VALUES (null,  '$nome',  '$barra', '$valor', '$descricao', '$processador','$sistema', '$tela', '$wifi', '$cameras','$resolucao','$memoria')";
                
                mysqli_query($conexao,$query);
                
                echo "Cadastro realizado com sucesso!";
            }catch(Exception $e){
                echo "Erro ao conectar: ".$e;
            }
?>