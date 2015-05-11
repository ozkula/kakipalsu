<?php 
/**
* 
*/
class Post extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['user'];
		$data['show_post_data'] = $this->mView->Show_Post_data();
		$data['show_category'] = $this->mView->Show_Category_data();
		$this->load->view('post',$data);
	}
	function add_new(){
		$this->mCreate->add_post();
		redirect('post','refresh');
	}
	function edit(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['user'];
		// This for web
		$idpost = $this->uri->segment(3); // change number to your number <-see uri segment CI
		$data['show_category'] = $this->mView->Show_Category_data();
		$data['show_post_data'] = $this->mView->Show_Post_data_byId($idpost);
		$this->load->view('edit_post',$data);
	}
	function edit_true(){
		$this->mUpdate->edit_post();
		redirect('post','refresh');
	}
	function delete(){
		$idpost = $this->uri->segment(3);
		$this->mDelete->delete_post($idpost);
		redirect('post','refresh');
	}
}
?>