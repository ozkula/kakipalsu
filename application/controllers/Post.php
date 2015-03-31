<?php 
/**
* 
*/
class Post extends CI_controller
{
	
	function index(){
		$data['allpost'] = $this->view_model->post_content();
		$this->load->view('post',$data);
	}
	function new_post(){
		$this->load->view('post');
	}
}
?>