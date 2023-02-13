<?php

if (isset($ret)){

switch ($ret) {
    case -2:
        echo '<script>MensagemErroExcluir()</script>';
        break;
    case -1:
        echo '<script>MensagemErro()</script>';
        break;
    case 0:
        echo '<script>MensagemCampoObrigatorio()</script>';
        break;
    case 1:
        echo '<script>MensagemSucesso()</script>';
        break;
}
}