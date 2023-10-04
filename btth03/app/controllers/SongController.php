<?php
require_once APP_ROOT.'/app/services/CategoryService.php';
class SongController{
    public function index(){
        $songService = new SongService();
        $songs = $songService->getAllSongs();

        include APP_ROOT.'/app/views/home/index.php';
    }
}
?>