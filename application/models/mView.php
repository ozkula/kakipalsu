<?php 
/**
* 
*/
class mView extends CI_Model
{
	function check_login($username, $password){
		$query = "SELECT * FROM user WHERE user = ? AND pass = ?";
		$parameter = array($username,$password);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
    // Count All data
    function Count_Post_data(){
    	$query = "SELECT count(*) as Count_post from post";
    	$result = $this->db->query($query);
    	return $result->result_array();
    }
    function Count_article_data(){
    	$query = "SELECT count(*) as Count_artikel from artikel";
    	$result = $this->db->query($query);
    	return $result->result_array();
    }
    function Count_category_data(){
    	$query = "SELECT count(*) as Count_category from kategori";
    	$result = $this->db->query($query);
    	return $result->result_array();
    }
	// Post 
	function Show_Post_data(){
		$query = "SELECT *,kategori as trig FROM post 
				LEFT JOIN kategori ON kategori.trig = post.trig
				 ORDER BY id_post DESC";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	function Show_Post_data_byId($id){
		$query = "SELECT * FROM post
					WHERE id_post = ?";
		$parameter = array($id);					
		$result = $this->db->query($query,$parameter);
		return $result->result_array();
	}
	// Article
	function Show_Article_data(){
		$query = "SELECT * FROM artikel 
				 ORDER BY id_artikel DESC";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	function Show_Article_data_byId($id){
		$query = "SELECT * FROM artikel 
					WHERE id_artikel = ?";
		$parameter = array($id);					
		$result = $this->db->query($query,$parameter);
		return $result->result_array();
	}
	// Category
	function Show_Category_data(){
		$query = "SELECT * FROM kategori ORDER BY id_kategori DESC";
		$result = $this->db->query($query);
		return $result->result_array();	
	}
	
	
}
?>