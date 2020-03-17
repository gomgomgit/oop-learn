<!DOCTYPE html>
<html>
<head>
	<title>1</title>
</head>
<body>
	<?php
class Caffee {
	public $drink;
	public $nama;

	function __construct($d) {
		$this->drink = $d;
	}
	function atas_nama($n) {
		$this->nama = $n;
	}
	function __destruct() {
		echo "Pesanan " . $this->drink;
		if ($this->nama) {
			echo " atas nama " . $this->nama;
		}
	}
}

$iwan = new Caffee("latte");
$iwan->atas_nama('Iwan');

?>
</body>
</html>