<!DOCTYPE html>
<html>
<head>
	<title>3</title>
</head>
<body>
	<?php
class Food {
	public $nama;

	public function __construct($n) {
		$this->nama = $n;
	}

}

class Want extends Food {
	public function speak() {
		return "Pesan " . $this->nama;
	}
}

$uci = new Want("chicken");
echo $uci->speak();

?>
</body>
</html>