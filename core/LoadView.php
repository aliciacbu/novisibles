<?php

class LoadView {

	private $properties;

	function __construct() {

	}

	public function render($name) {

		include VIEWPATH . 'header.php';
		include VIEWPATH . 'jumbotron.php';
		include VIEWPATH . $name . '.php';
		include VIEWPATH . 'footer.php';

	}

	public function render2($name) {

		include VIEWPATH . 'header.php';
		include VIEWPATH . $name . '.php';
		include VIEWPATH . 'footer.php';

	}

	public function __set($property, $value) {
		if (!isset($this -> $property)) {
			$this -> properties[$property] = $value;
		}
	}

	public function __get($property) {
		if (isset($this -> properties[$property])) {
			return $this -> properties[$property];
		}
	}

}