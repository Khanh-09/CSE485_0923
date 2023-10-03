<?php
class SongController{
    public function index(){
        // include "app/services/SongService.php";
        
        include "../app/services/SongService.php";
           
        $songService = new SongService();
        $songs = $songService->getAllSongs();
        // include APP_ROOT.'/app/views/home/index.php';
        include "../app/views/home/index.php";
    }
}
