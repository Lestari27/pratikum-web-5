<?php
class Dispenser{
    protected $volume;
    protected $hargaGelas;
    private $volumeGelas;
    public $nama;

    function __construct(){
        $this->volume = 10000;
        $this->hargaGelas = 1000;
        $this->volumeGelas = 250;
    }

    protected function set_volume(){
        $this->volume = 1000;
    }

    function get_volume(){
        return $this->volume;
    }

    function get_nama($nama){
        return $this->nama = $nama;
    }

    public function beli($aqua){
        return "Beli sebanyak {$aqua} Gelas<br/> Sisa volume : ".($this->volume-($this->volumeGelas*$aqua));
    }
}

$aqua1 = new Dispenser;
echo "Nama Minum : ".$aqua1->get_nama("AQUA");
echo "<br/> Volume AQUA : ".$aqua1->get_volume();
echo "<br/>".$aqua1->beli(4);
?>