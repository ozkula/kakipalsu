<?php
/**
* 
*/
class Add_model extends CI_Model
{
	function add_input_post(){
		$data = array(
			'subject' => $this->input->post('txtsubject'),
			'post' => $this->input->post('content')
			);
		$this->db->insert('post', $data);
	}
}
?>