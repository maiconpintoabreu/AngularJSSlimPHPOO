<?php
include_once 'DaoUtil.php';
class LocationDao {
	public function __construct() {
	}
	public function getCountries() {
		$query = "SELECT id, desc_name, fk_id_location, desc_description FROM tb_location Where fk_id_location IS NULL ORDER BY desc_name";
		$result = DaoUtil::getInstance ()->getResult ( $query );
		$return = array();
		if (isset ( $result )) {
			for($i = 0; $i < count ( $result ); $i ++) {
				array_push($return, new Location($result[$i]));
			}
		}
		return $return;
	}
	public function getCities($country) {
		$query = "SELECT id, desc_name, fk_id_location, desc_description FROM tb_location Where fk_id_location = " . $country . " ORDER BY desc_name";
		$result = DaoUtil::getInstance ()->getResult ( $query );
		$return = array();
		if (isset ( $result )) {
			for($i = 0; $i < count ( $result ); $i ++) {
				array_push($return, new Location($result[$i]));
			}
		}
		return $return;
	}
	public function getLocation($city) {
		$query = "SELECT lc.id, lc.desc_name, lf.desc_name, lc.desc_description AS country_name FROM tb_location AS lc INNER JOIN tb_location AS lf on lf.id = lc.fk_id_location Where lc.id = " . $city;
		$result = DaoUtil::getInstance ()->getResult ( $query );
		$return = array();
		if (isset ( $result )) {
			for($i = 0; $i < count ( $result ); $i ++) {
				array_push($return, new Location($result[$i]));
			}
		}
		return $return;
	}

}

?>