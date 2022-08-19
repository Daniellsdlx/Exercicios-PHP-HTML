<?php
$Idade = $_POST ['Idadizinha'];
if ( $Idade >= 18) {
    echo "Maior de idade...seja bem vindo";
}else{
    echo "Menor de idade.....Acesso Negado";
}
?>