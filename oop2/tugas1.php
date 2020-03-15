<!DOCTYPE html>
<html>
<head>
	<title>1</title>
</head>
<body>
	<?php
class Minum {
	protected $drink;
	public $nama;

	public function __construct($what) {
		$this->drink = $what;
	}
}

class Pesan extends Minum {
	public function atas_nama($siapa) {
		$this->nama = $siapa;
	}
	public function message() {
		return "Pesanan " . $this->drink . " atas nama " . $this->nama;
	}
}

$aldo = new Pesan("Kopi");
$aldo->atas_nama("Aldo");
echo $aldo->message();

?>
</body>
</html>