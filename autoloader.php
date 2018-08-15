<?php

function spl_loader_fnc($className)
{
    $ds              = DIRECTORY_SEPARATOR;
    $pathToClassFile = str_replace('\\', $ds, $className);
    $file = __DIR__.'/'. $pathToClassFile . '.php';
    if (is_readable($file)) {
        require $file;
    }
}
spl_autoload_register('spl_loader_fnc');