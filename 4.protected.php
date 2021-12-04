<?php
// Hak akses ini hampir mirip dengan private, perbedaannya adalah
// property atau method dengan hak akses protected hanya dapat
// diakses oleh class itu sendiri dan class yang menjadi
// induknya (inheritance).
class warga {
	protected $kota = "Aku warga kota Jakarta";
}
class orang extends warga {
	function kenalkan(){
		return "Haloo, aku JongKoding. " . $this->kota;
	}
}
// instansiasi dari class orang
$obj_orang = new orang();
echo $obj_orang->kenalkan();