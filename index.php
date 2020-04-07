<?php

    require_once "morsecode/morsecode.php";
    use morsecode\morsecode;

    $morse = new morsecode();
    $code = $morse->encode('guilherme', true);
    echo $code;