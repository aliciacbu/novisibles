<?php
require 'core/SimpleXLS.php';
require 'core/Curl.php';
require 'core/FileValidation.php';

class Main extends Controller {
	function __construct() {
		parent::__construct('main_model');
	}

	function index() {
		$this -> viewLoader -> render('form');

	}

	function upload(){
		$this -> viewLoader -> file = $this -> model -> upload();
		$this -> viewLoader -> urls = $this -> model -> parse_arxiu($this -> viewLoader -> file);
		$this -> viewLoader -> render2('upload');
	}

}