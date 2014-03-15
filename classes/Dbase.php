<?php
class Dbase{
	
	private $_host ="localhost";
	private $_user = "root";
	private $_password = "mrlnottingham1!";
	private $_name = "openbasket";
	
	private $_conndb = false;
	public $_last_query = null;
	public $_affected_rows = 0;
	
	public $_insert_keys = array();
	public $_insert_values = array();
	public $_update_sets = array();
	
	public $_id;
	
	public function __construct(){
		$this->connect();		
	}
	
	private function connect(){
		
		
	}
	
}