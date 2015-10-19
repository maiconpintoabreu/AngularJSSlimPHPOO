<?php
class Location {
	public $idLocation;
	public $descName;
	public $fkLocation;
	public $descDescription;
	public function __construct($values = null) {
		if (isset ( $values )) {
			$this->idLocation = $values [0];
			$this->descName = $values [1];
			$this->fkLocation = $values [2];
			$this->descDescription = $values [3];
		}
	}
}
?>