<?php
// Property atau method dengan hak akses private hanya dapat
// diakses oleh class itu sendiri.
class orang {
// property
	private $nama;
// method
	public function kenalkan(){
		return "Haloo, aku " . $this->nama;
	}
}
// instansiasi dari class orang
$obj_orang = new orang();
echo $obj_orang->kenalkan();
// pemanggilan function masih di dalam class orang
// jika memanggilnya dari luar class orang, maka tidak akan bisa digunakan