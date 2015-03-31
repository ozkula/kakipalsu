<?php
/**
* 
*/
class View_model extends CI_Model
{
	function post_content(){
	$query = "SELECT id_post,judul,kategori.kategori FROM post 
				LEFT JOIN kategori ON post.trig = kategori.trig";
	$result =  $this->db->query($query);		
	return $result->result_array();
	}	
}
?>