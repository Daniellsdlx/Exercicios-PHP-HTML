<?php
$Usuario = $_POST ['usuarinho'];
$Senha = $_POST ['seinha'];
if ( $Usuario === 'Etec' and $Senha === 'Etec062') {
    echo "Acesso confirmado.....bem vindo";
}else{
    echo "Errou feio, errou rude.....Acesso Negado";
}
?>