<?php
class Order extends CI_Model {
	public function __construct() {
		parent::__construct ();
		$this->properties = array (
				'id' => null,
				'number' => null,
				'deleted' => 0,
				'status' => null 
		);
	}
	
	function getAlls() {
		$this->db->select ( '*' );
		$this->db->from ( 'order' );
		$query = $this->db->get ();
		$result = $query->result ();
		return $result;
	}
}
?>