<?php
          
            try{
                 $conexao = mysqli_connect("localhost","er1ckg03s","","tb_barcode");
                                 //server - usuario - senha - banco
                
                $id = $_GET['id'];
                
               $query="SELECT * FROM aparelho order by cd_celular = $id";
                
                $resultado = mysqli_query($conexao,$query);
                
                $i = 0;
                
                while($linha = mysqli_fetch_assoc($resultado)){
                    
                    $registro = array(
                        'celular' => array(
                        'codigo' => $linha['cd_celular'],
                        'nome' => $linha['nm_celular'],
                        'barra' => $linha['cd_barra'],
                        'valor' => $linha['vl_celular'],
                        'descricao' => $linha['ds_geral'],
                        'processador' => $linha['nm_processador'],
                        'sistema' => $linha['nm_sistema'],
                        'tela' => $linha['nr_tela'],
                        'wifi' => $linha['nm_wifi'],
                        'cameras' => $linha['nr_cameras'],
                        'resolucao' => $linha['nr_resolucao'],
                         'memoria' => $linha['nr_memoria']
                        )
                        
                    );
                    $i++;
                }
                
                echo json_encode($registro);
                
                
            }catch(Exception $e){
                echo "Erro ao conectar: ".$e;
            }
?>