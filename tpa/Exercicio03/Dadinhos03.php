<?php
$numero = $_POST ['Numerinho'];
if ($numero %2 == 0){
    echo "Numero Par";
}
else if ($numero %1 == 0){
    echo "Numero Impar";
}
?>