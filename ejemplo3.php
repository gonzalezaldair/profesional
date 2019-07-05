<?php
$utilidad = 166000;
$socioa = 300000;
$sociob = 250000;
$socioc = 500000;
$totalinversion = $socioa +$sociob +$socioc;
$porcentajea= ($socioa*100)/$totalinversion;
echo '<pre> porcentaje socioa: '; print_r($porcentajea); echo '</pre>';
$porcentajeb= ($sociob*100)/$totalinversion;
echo '<pre> porcentaje sociob: '; print_r($porcentajeb); echo '</pre>';
$porcentajec= ($socioc*100)/$totalinversion;
echo '<pre> porcentaje socioc: '; print_r($porcentajec); echo '</pre>';
echo '<pre> Total Inversion: '; print_r($totalinversion); echo '</pre>';

$inversionmesa = $socioa / 9;
echo '<pre> Inversion Mensual a '; print_r($inversionmesa); echo '</pre>';
$inversionmesb = $sociob / 9;
echo '<pre> Inversion Mensual b '; print_r($inversionmesb); echo '</pre>';
$inversionmesc = $socioc / 9;
echo '<pre> Inversion Mensual c '; print_r($inversionmesc); echo '</pre>';


$utilidada = ($utilidad*$porcentajea)/100;
echo '<pre> Utilidad Socioa: '; print_r($utilidada); echo '</pre>';
$utilidadb = ($utilidad*$porcentajeb)/100;
echo '<pre> Utilidad Sociob: '; print_r($utilidadb); echo '</pre>';
$utilidadc = ($utilidad*$porcentajec)/100;
echo '<pre> Utilidad Socioc: '; print_r($utilidadc); echo '</pre>';

?>