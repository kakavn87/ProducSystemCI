<?php
class Dl extends CI_Model {
	public function __construct() {
		parent::__construct ();
		$this->properties = array (
				'id' => null,
				'name' => null,
				'product_id' => null, 
				'requirement_id' => null, 
				'order_id' => null, 
				'role_id' => null,
				'description' => null,
				'status' => null,
				'create_date' => null,
				'modied_date' => null,
				'deleted' => null,
				'status' => null
		);
	}
	public function getServices() {
		$this->db->select ( '*' );
		$this->db->from ( 'service' );
		$this->db->order_by('created DESC');
		$query = $this->db->get ();
		$result = $query->result ();
		return $result;
	}
	
	function saveService($data) {
		$this->db->insert ( 'service', $data );
		return $this->db->insert_id();
	}
}
