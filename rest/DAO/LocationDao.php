<?php
include_once 'DaoUtil.php';
class LocationDao {
	public function __construct() {
	}
	public function getLocations() {
		$query = "SELECT id_location, desc_location, fk_location FROM tb_location WHERE in_ativo = 1 ORDER BY desc_location";
		$result = DaoUtil::getInstance ()->getResult ( $query );
		$return[] = array();
		if (isset ( $result )) {
			for($i = 0; $i < count ( $result ); $i ++) {
				array_push($return, new Location($result[$i]));
			}
		}
		return $return;
	}

}

?>