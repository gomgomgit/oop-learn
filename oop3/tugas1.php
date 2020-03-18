<!DOCTYPE html>
<html>
<head>
	<title>1</title>
</head>
<body>
<?php
trait sell {
	public function seller() {
		echo "Mau beli apa? <br>";
	}

	public function harga($p) {
		$this->price = $p;
		return "Harganya " . $this->price;
	}
}

abstract class fesyen {
	protected $merk;

	function __construct($nm) {
		$this->merk = $nm;
	}
	abstract protected function harga($p);
}

class Kemeja extends fesyen {
	use sell;

	private $price;

	public function want() {
		return "Mau Kemeja " . $this->merk . "<br>";
	}
}

class Celana extends fesyen {
	use sell;

	private $price;

	public function want() {
		return "Mau Celana " . $this->merk . "<br>";
	}
}

Kemeja::seller();
$bk = new Kemeja("Hush Puppies");
echo $bk->want();
echo $bk->harga(350000);

echo "<br><br>";

Celana::seller();
$bk = new Celana("Emba");
echo $bk->want();
echo $bk->harga(150000);

?>
</body>
</html>