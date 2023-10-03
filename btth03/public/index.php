<?php

$controller = isset($_GET['c'])?$_GET['c']:'home';
$action     = isset($_GET['a'])?$_GET['a']:'index';

$controller = ucfirst($controller);

$controller = $controller."Controller";
$path = "../app/controllers/".$controller.".php"; 
if(!file_exists($path)){
    die("Request not found. Check your path");
}
include "$path";
$myController = new $controller();
if (method_exists($myController, $action)) {
    $myController->$action();
} else {
    echo "$action does not exist in $controller class";
}

?>