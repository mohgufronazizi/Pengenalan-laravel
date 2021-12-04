<?
// Cara menghubungkan child dengan parent adalah dengan menggunakan sintaks extends.

// parent class
class warga {
	protected $kota = "Aku warga kota Jakarta";
	public function kecamatan() {
		return "<br>Aku dari Kecamatan Duren Sawit";
	}
}
// child class
class orang extends warga {
	function kenalkan(){
		return "Haloo, aku JongKoding. " . $this->kota;
	}
}
// instansiasi dari class orang
$obj_orang = new orang();
echo $obj_orang->kenalkan();
echo $obj_orang->kecamatan();
?>