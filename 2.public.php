<?php
// Secara default, sebuah method atau property yang tidak ditetapkan
// hak aksesnya akan mempunyai hak akses public. Dengan
// menggunakan hak akses ini maka method atau property dapat
// diakses dari luar maupun dari dalam class itu sendiri.
class orang {
// property
	public $nama;
	public $asal;
// method
	function kenalkan(){
		return "Haloo, aku JongKoding dari Jakarta";
	}
}
// instansiasi dari class orang
$obj_orang = new orang();
echo $obj_orang->kenalkan();