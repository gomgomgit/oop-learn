<!DOCTYPE html>
<html>
<head>
	<title>4</title>
</head>
<body>
	<?php
class Time {
	private $waktu;

	public function __construct($t) {
		$this->waktu = $t;
	}
	public function message() {
		return "Buka di " . $this->waktu . " hari di " . $this->tempat;
	}
}

class Martabak extends Time {
	public $tempat;
	public function place($p) {
		$this->tempat = $p;
	}
}
$qwe = new Martabak("malem");
$qwe->place('MGT');
echo $qwe->message();

?>
</body>
</html>