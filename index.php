<?php

    require_once "morsecode/morsecode.php";
    use morsecode\morsecode;

    $morse = new morsecode();
    $code = $morse->morse_encode('guilherme', true);
    echo $code;