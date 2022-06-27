<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<body>
<div>
<?php
    $palavra=$_GET['palavra'];
    echo "Invertendo a palavra '$palavra'..."; 
    echo "<br/>";
    $caracter= str_split($palavra);
    $tamanho=strlen($palavra);
    echo "<br>";
    $fim=$tamanho-1;
        for($i=0; $i<$fim; $i++) { 
            $aux=$caracter[$i];
            $caracter[$i]=$caracter[$fim];
            $caracter[$fim]=$aux;
            $fim--;
        }
    echo "A palavra invertida é: ";
        for($i=0; $i<$tamanho;$i++){
        $res=$caracter[$i];
        $fim--;
        echo $res;
    }
    echo "<br>";
    echo "<br>";
?>
<style>
    body{
        font-size:18px;
        font-family:arial;
    }

</style>
<a class="botao" href="index.html">VOLTAR</a>
</div>
</body>
</html>