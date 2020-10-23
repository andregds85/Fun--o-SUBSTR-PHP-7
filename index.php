<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h1>";
echo "Separação : ";
echo "<br>";
$codSigTap=415010012;
echo $codSigTap;
echo "</h1>"; 



$grupo = substr($codSigTap, 0, 1); // retorna "d"
$subgrupo = substr($codSigTap, 0, 3); // retorna "d"
$forma = substr($codSigTap, 3, 6); // retorna "d"



echo "<br>";
echo "<h1>";
echo "Grupo: ".$grupo;
echo "<br>";
echo "Sub Grupo: ".$subgrupo;
echo "<br>";
echo "Forma: ".$forma;
?>