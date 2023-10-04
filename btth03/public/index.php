<?php
require_once('../app/config/config.php');
require_once APP_ROOT.'/app/controllers/SongController.php';

$songController = new SongController();
$songController->index();
/*
$controller = isset($_GET['controller']) ? $_GET['controller'] :'home';
$action     = isset($_GET['action']) ? $_GET['action']:'index';
if($controller=='home'){
    require_once APP_ROOT.'/controllers/SongController.php';
    $songController = new SongController();
    $songController->index();
}else{
    echo "not to found"
}
*/
?>