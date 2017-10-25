<?php
class Persegipanjang{
	public $bil1,$bil2;

	function set_nilai ($panjang,$lebar){
		$this->bil1 = $panjang;
		$this->bil2 = $lebar;
	}
	function get_nilai(){
		return $this->bil1 * $this->bil2;
	}
	
}

$Persegipanjang1 = new Persegipanjang;
$Persegipanjang1 ->set_nilai(21,3);
echo "Luas Persegipanjang = " .$Persegipanjang1->get_nilai().'<br>';

class persegi{
	public $bil1,$bil2;

	function set_nilai ($sisi){
		$this->bil1 = $sisi;
		$this->bil2 = $sisi;
	}
	function get_nilai(){
		return $this->bil1 * $this->bil2;
	}
	
}

$persegi1 = new persegi;
$persegi1 ->set_nilai(21,3);
echo "Luas persegi = " .$persegi1->get_nilai().'<br>';

class segitiga{
	public $bil1,$bil2;

	function set_nilai ($alas,$tinggi){
		$this->bil1 = $alas;
		$this->bil2 = $tinggi;
	}
	function get_nilai(){
		return $this->bil1 * $this->bil2 / 2;
	}
	
}

$segitiga1 = new segitiga;
$segitiga1 ->set_nilai(21,3);
echo "Luas segitiga = " .$segitiga1->get_nilai().'<br>';


?>