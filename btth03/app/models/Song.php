<?php
class Song{
    private $id;
    private $tenBaiHat;
    private $caSi;
    private $idTheLoai;
    
    public function __construct($id, $tenBaiHat, $caSi, $idTheLoai){
        $this->id = $id;
        $this->tenBaiHat = $tenBaiHat;
        $this->caSi = $caSi;
        $this->idTheLoai = $idTheLoai;
    }
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getTenBaiHat(){
        return $this->tenBaiHat;
    }
    public function setTenBaihat($tenBaiHat){
        $this->tenBaiHat = $tenBaiHat;
    }
    public function getCaSi(){
        return $this->caSi;
    }
    public function setCaSi($caSi){
        $this->caSi = $caSi;
    }
    public function getIdTheLoai(){
        return $this->idTheLoai;
    }
    public function setTenTheLoai($tenTheLoai){
        $this->tenTheLoai = $tenTheLoai;
    }
}
?>