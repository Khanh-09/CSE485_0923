<?php
require_once APP_ROOT.'/app/models/Song.php';
class SongService{
    public function getAllSongs() {
        try{
            $conn = new PDO('mysql:host=localhost;dbname=QuanLyBaiHat','root','');

            $sql= "SELECT * FROM songs";
            $stmt = $conn->query($sql);

            $songs = []; 
            while ($row = $stmt->fetch()){
                $song = new Song($row['id'],$row['tenBaiHat'],$row['caSi'],$row['idTheLoai']);
                $songs[]=$song;
            }
            return $songs;
        }catch(PDOException $e){
            return $songs = [];
        }
    }
}
?>