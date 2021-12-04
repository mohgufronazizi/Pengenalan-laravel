<?

class orang{
	// property
	var $nama;
	var $asal;

	// constructor (method ini akan otomatis dijalankan pertama kali tidak peduli dimanapun posisinya)
	function __construct($namaOrang, $asalOrang) {
		echo "saya jalan duluan yaaa!!…<br>";

		// mengubah value property
		$this->nama = $namaOrang;
		$this->asal = $asalOrang;
		// $this berfungsi untuk mencari value di dalam class yang sama, tidak akan mencari di class lain
	}
	// method
	function kenalkan(){
		return "haloo, aku ".$this->nama." dari ".$this->asal."<br>";
	}
	//destructor (method ini akan otomatis dijalankan terakhir tidak peduli dimanapun posisinya)
	function __destruct(){
		echo "<br>Saya berjalan terakhir..";
	}
}

// instalasi dari class orang
// setelah mengganti value di function, kita masukkan nilai di bagian pemanggilan
$panggil = new orang("JongKoding","Jakarta");
$rahman = new orang("Rahman","Situbondo");
echo $panggil->kenalkan();
echo $rahman->kenalkan();
// contruck akan dijalankan sebanyak obejct di panggil

?>