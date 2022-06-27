<style>
    body{
        font-family:arial;
        font-size:18px;        
    }


</style>
    <?php 
        $xml = simplexml_load_file('dados.xml');
        $dados = [];
        $cont= 0;
        echo "<br>"; 
        echo " Dado um vetor que guarda o valor de faturamento diário de uma distribuidora:";
        echo "<br>";    
            foreach ($xml->row as $dia){   
                $cont++;
                    foreach($dia->valor as $valor){
                        $dados[$cont]= (float)$valor;
                        echo "<br>";
                        echo "Dia: $cont - ";
                        echo "Valor: R$ ".number_format((float)$valor, 2, ',', '.');
                    }
            }
        $remover = array(0);
        $semzero = array_diff($dados, $remover);
        echo "<br>";
        $min= min($semzero);
        echo "<br>";
        printf("O menor valor de faturamento ocorrido em um dia do mês: R$ ".number_format($min, 2, ',', '.'));
        echo "<br>";
        echo "<br>";
        $max= max($semzero);
        printf("O maior valor de faturamento ocorrido em um dia do mês: R$ ".number_format($max, 2, ',', '.'));
        echo "<br>";
        $media=0;
        $media=(array_sum($semzero) /count($semzero).number_format($media, 2, ',', '.'));
        $cont=0;
            foreach ($xml->row as $dia){
                foreach($dia->valor as $valor){
                    if($valor>(float)$media){
                    $cont++;
                }
            }
        }                 
        echo "<br>";
        printf("Total dias em que o valor de faturamento diário foi superior à média mensal: %d dias.",$cont);
        echo "<br>";
        echo "<br>";
    ?>
