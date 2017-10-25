<?php
class bangundatar{
	public $bil1,$bil2, $bil3;

	function set_nilai1 ($panjang,$lebar){
		$this->bil1 = $panjang;
		$this->bil2 = $lebar;
	}
	function get_nilai1(){
		return $this->bil1 * $this->bil2;
	}
	
	function set_nilai11 ($panjang,$lebar){
		$this->bil1 = $panjang;
		$this->bil2 = $lebar;
	}
	function get_nilai11(){
		return $this->bil1 * 2 + $this->bil2;
	}


	function set_nilai2 ($sisi){
		$this->bil1 = $sisi;
		$this->bil2 = $sisi;
	}
	function get_nilai2(){
		return $this->bil1 * $this->bil2;

	}
	function set_nilai22 ($sisi){
		$this->bil1 = $sisi;
		$this->bil2 = $sisi;
	}
	function get_nilai22(){
		return $this->bil1 * 2 * $this->bil2;

	}


	function set_nilai3 ($alas,$tinggi){
		$this->bil1 = $alas;
		$this->bil2 = $tinggi;
	}
	function get_nilai3(){
		return $this->bil1 * $this->bil2 / 2;
	}
	


	function set_nilai33 ($a,$b,$c){
		$this->bil1 = $a;
		$this->bil2 = $b;
		$this->bil3 = $c;
	}
	function get_nilai33(){
		return $this->bil1 + $this->bil2 + $this->bil3;
	}

}

$persegipanjang1 = new bangundatar;
$persegipanjang1 ->set_nilai1(21,3);
$persegipanjang1 ->set_nilai11(21,3);
echo "Luas  persegipanjang = " .$persegipanjang1->get_nilai1().'<br>';
echo "keliling  persegipanjang = " .$persegipanjang1->get_nilai11().'<br>';




$persegi1 = new bangundatar;
$persegi1 ->set_nilai2(2,2);
$persegi1 ->set_nilai22(2,2);
echo "Luas  persegi  = " .$persegi1->get_nilai2().'<br>';
echo "keliling  persegi  = " .$persegi1->get_nilai22().'<br>';



$segitiga1 = new bangundatar;
$segitiga1 ->set_nilai3(21,3);
$segitiga1 ->set_nilai33(2,2,2);
echo "Luas  segitiga    = " .$segitiga1->get_nilai3().'<br>';
echo "keliling segitiga    = " .$segitiga1->get_nilai33().'<br>';



?>