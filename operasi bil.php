<?php
class penjumlahan{
	public $bil1,$bil2;

	function set_nilai ($bilangan1,$bilangan2){
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}
	function get_nilai1(){
		return $this->bil1 + $this->bil2;
	}
	function get_nilai2(){
		return $this->bil1 - $this->bil2;
	}
	function get_nilai3(){
		return $this->bil1 * $this->bil2;
	}
	function get_nilai4(){
		return $this->bil1 / $this->bil2;
	}
}

$penjumlahan1 = new penjumlahan;
$penjumlahan1 ->set_nilai(21,3);
echo "Hasil penjumlahan = " .$penjumlahan1->get_nilai1().'<br>';

$pengurangan1 = new penjumlahan;
$pengurangan1 ->set_nilai(21,3);
echo "Hasil pengurangan= " .$pengurangan1->get_nilai2().'<br>';

$perkalian1 = new penjumlahan;
$perkalian1 ->set_nilai(21,3);
echo "Hasil perkalian = " .$perkalian1->get_nilai3().'<br>';

$pembagian1 = new penjumlahan;
$pembagian1 ->set_nilai(21,3);
echo "Hasil pembagian = " .$pembagian1->get_nilai4().'<br>';


?>