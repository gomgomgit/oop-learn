<!DOCTYPE html>
<html>
<head>
	<title>3</title>
</head>
<body>
<?php
class Hari {
	public $nama_hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu");
	public $hari_ke;

	function __construct($e) {
		$this->hari_ke = $e;
	}
	function message() {
		return "Sekarang hari " . $this->nama_hari[($this->hari_ke - 1)];
	}
}
$kemarin = new Hari(3);
echo $kemarin->message();

?>
</body>
</html>