<style>
    body{
        font-family: arial;
        font-size:18px;
    }
</style>
<?php
    echo "<br>";
    echo "Dado o valor de faturamento mensal de uma distribuidora, detalhado por estado:";
    $sp= 67836.43;
    $rj= 36678.66;
    $mg= 29229.88;
    $es= 27165.48;
    $outros= 19849.53;
    echo "<br>";
    echo "<br>";
    echo "SP - R$ ".number_format($sp, 2, ',', '.');
    echo "<br>";
    echo "RJ -R$ ".number_format($rj, 2, ',', '.');
    echo "<br>";
    echo "MG - R$ ".number_format($mg, 2, ',', '.');
    echo "<br>";
    echo "ES - R$ ".number_format($es, 2, ',', '.');
    echo "<br>";
    echo "OUTROS - R$ ".number_format($outros, 2, ',', '.');
    echo "<br>";
    echo "<br>";
    echo "Calcule o percentual de representação que cada estado teve dentro do valor total mensal da distribuidora:";
    echo "<br>";
    echo "<br>";
    $soma=$sp+$rj+$mg+$es+$outros;
    $SP=($sp*100)/$soma;
    echo " SP = ".number_format($SP, 2, ',', '.')," %";
    echo "<br>";
    $RJ=($rj*100)/$soma;
    echo " RJ = ".number_format($RJ, 2, ',', '.')," %";
    $MG=($mg*100)/$soma;
    echo "<br>";
    echo " MG = ".number_format($MG, 2, ',', '.')," %";
    $ES=($es*100)/$soma;
    echo "<br>";
    echo " ES = ".number_format($ES, 2, ',', '.')," %";
    echo "<br>";
    $OUTROS=($outros*100)/$soma;
    echo " OUTROS = ".number_format($OUTROS, 2, ',', '.')," %";
    echo "<br>";
?>
