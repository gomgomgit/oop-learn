<!DOCTYPE html>
<html>
<head>
	<title>2</title>
</head>
<body>
	<?php
class Play {
	public $game;
	public $sama = array("dia");

	function __construct($g) {
		$this->game = $g;
	}
	function with($who) {
		$this->sama[(count($this->sama))] = $who;
	}
	function __destruct() {
		echo "Aku mau main " . $this->game . " bersama ";
		foreach ($this->sama as $who) {
			echo " " . $who;
		}
	}
}
$selasa = new Play("Basket");
$selasa->with('aldo');
$selasa->with('don');

?>
</body>
</html>