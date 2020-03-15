<!DOCTYPE html>
<html>
<head>
	<title>5</title>
</head>
<body>
	<?php
class Pergi {
	protected $tempat;
	public function f_tempat($ft) {
		$this->tempat = $ft;
	}
}

class Malem extends Pergi {
	private $want;
	public function f_want($fw) {
		$this->want = $fw;
	}

	public function permis() {
		echo "Pengen pergi ke " . $this->tempat . " lah, mau " . $this->want;
	}
}

$kopi = new Malem;
$kopi->f_tempat("Revo town");
$kopi->f_want("ngopi");
$kopi->permis();

?>
</body>
</html>