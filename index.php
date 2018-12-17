<?php
    define('PATGANG',true);
    define('DS',DIRECTORY_SEPARATOR);

    require_once "lib".DS."error.php";
    require_once "lib".DS."pathang.php";

    $pathang::getInstance('pathang')->main();
?>