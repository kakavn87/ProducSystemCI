<?php
class Applications extends Ext_Controller {
	function __construct() {
		parent::__construct();

		$this->_role = array(
				'role_developer' => array('action' => array()),
				'role_hotline' => array('action' => array()),
				'role_planer' => array('action' => array('index')),
				'role_entwickler' => array('action' => array()),
				'role_technical' => array('action' => array()),
				'role_customer' => array('action' => array())
		);

		$this->checkRole();
		$this->load->model('application');
	}
	
	function index() {
		$data['profiles'] = $this->profile->getAll();
		
		$content = $this->load->view('public/applications/lists', $data, TRUE);
		
		$this->load->library('template');
		$this->template->load($content);
	}
}