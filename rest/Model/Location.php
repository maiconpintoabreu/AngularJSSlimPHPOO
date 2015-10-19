<?php
class Location {
	private $idLocation;
	public $descLocation;
	private $fkLocation;
	public function __construct($values = null) {
		if (isset ( $values )) {
			$this->idLocation = $values [0];
			$this->descEnquete = $values [1];
			$this->fkLocation = $values [2];
		}
	}
	public function getIdLocation() {
		return $this->idLocation;
	}
	public function getDescLocation() {
		return $this->descEnquete;
	}
	public function getFkLocation() {
		return $this->fkLocation;
	}
	public function toJSON() {
		return json_encode ( $this->object_to_array($this) );
	}
	
	public function object_to_array($obj) {
		$arr = null;
		$_arr = is_object($obj) ? $obj->toArray() : $obj;
		foreach ($_arr as $key => $val) {
			$val = (is_array($val) || is_object($val)) ? $this->object_to_array($val) : $val;
			$arr[$key] = $val;
		}
		return $arr;
	}
	
	public function toArray(){
		return get_object_vars ( $this );
	}
}
?>