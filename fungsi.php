<?php

class Kalkulator {
    //PROPERTY
    public $x;
    private $y;
    protected $c;

    //METHOD

    public function setTambah($x, $y, $c){
        $this->x = $x;
        $this->y = $y;
        $this->c = $c;
        $hasil =  $this->x + $this->y + $this->c;
        return $hasil;
    }
    public function setKurang($x, $y, $c){
        $this->x = $x;
        $this->y = $y;
        $this->c = $c;
        $hasil =  $this->x - $this->y - $this->c;
        return $hasil;
    }
    public function setKali($x, $y, $c){
        $this->x = $x;
        $this->y = $y;
        $this->c = $c;
        $hasil =  $this->x * $this->y * $this->c;
        return $hasil;
    }
    public function setBagi($x, $y, $c){
        $this->x = $x;
        $this->y = $y;
        $this->c = $c;
        $hasil =  $this->x / $this->y / $this->c;
        return $hasil;
    }
 
}
?>