<!DOCTYPE html>
<html>
<head>
	<title>2</title>
</head>
<body>
<?php
trait mamang {
	public function tagih() {
		return "Harganya " . $this->price . " Mas";
	}
}

abstract class Beli {
	function dateng() {
		echo "Mau rasa ape? <br>";
	}
	abstract protected function rasa($fl);
}

class Martabak extends Beli {
	use mamang;

	private $t_rasa;
	private $price;

	public function rasa($fl) {
		$this->t_rasa = $fl;
		return "Rasa " . $this->t_rasa . "<br>";
	}
	public function harga($duit) {
		$this->price = $duit;
	}
}

Martabak::dateng();
$mrt = new Martabak;
echo $mrt->rasa('keju');
$mrt->harga(23000);
// echo Martabak::tagih(); kalo ada $this nya harus pake object
echo $mrt->tagih();

?>
</body>
</html>