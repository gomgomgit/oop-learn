<!DOCTYPE html>
<html>
<head>
	<title>2</title>
</head>
<body>
	<?php
class Bus {
	protected $tujuan;
	public $jumlah;
	protected $waktu;
	public $total;

	public function __construct($tjan) {
		$this->tujuan = $tjan;
	}
	protected function time() {
		return "<br>He : jam " . $this->waktu;
	}
	const THX = "Terima kasih";

}

class Ticket extends Bus {

	public function __construct($wk) {
		$this->waktu = $wk;
	}
	public function harga($kam) {
		$this->harga = $kam;
	}
	public function message() {
		echo $this->time() . " Harga " . $this->harga;
	}
}

class Pergi extends Bus {

	public function pesan() {
		return "Me : Saya pesan Tiket " . $this->tujuan . " " . $this->jumlah;
	}

}

$otw = new Pergi("bekasi");
echo $otw->pesan();

$sok = new Ticket("setengah sepuluh");
$sok->harga(5000);
$sok->message();
echo "<br>";
echo $sok::THX;
?>

</body>
</html>