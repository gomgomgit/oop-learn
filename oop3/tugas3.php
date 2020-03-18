<!DOCTYPE html>
<html>
<head>
	<title>3</title>
</head>
<body>
<?php
trait ask {
	public function message() {
		echo $this->m_name . " is " . self::$type . " music";
	}
}

abstract class Music {
	abstract protected function name($n);
}

class Pop extends Music {
	use ask;

	public static $type = "POP";
	private $m_name;

	public function name($n) {
		$this->m_name = $n;
	}
}

echo Pop::$type . "<br>";

$io = new Pop;
$io->name('ckuaak');
$io->message();

?>
</body>
</html>