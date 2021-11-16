<<?php

class InsertData Extends CI_Model{
	public function getEmail(){
		$this->db->get_where('admin', array('statud'=> 'active' and 'email' => 'info@gmail.com'))
	}
} 

 ?>