<?php
include "../app/models/Song.php";
class SongService{
    private $listOfSongs;

    public function __construct(){
        $song01 = new Song(1,'bai1', 'casi1',1);
        $song02 = new Song(2,'bai2', 'casi2',2);
        $song03 = new Song(3,'bai3', 'casi3',3);
        $this->listOfSongs[] = $song01;
        $this->listOfSongs[] = $song02;
        $this->listOfSongs[] = $song03;
    }
    public function getAllSongs(){
        return $this->listOfSongs;
    }
}