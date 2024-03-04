<?php

spl_autoload_register(function ($class){
    $classFilePath = "./classes/$class.php";

    if(file_exists($classFilePath)){
        require_once $classFilePath;
    }
});