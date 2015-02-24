<?php
namespace Fliglio\Fltk;

use Fliglio\Flfc\ResponseContent;

class View implements ResponseContent {
	
	protected $text;
	
	public function __construct($text) {
		$this->text = (string)$text;
	}
	
	public function render() {
		return array($this->text);
	}

}