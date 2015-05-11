<?php 
/**
* 
*/
class Article extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['user'];
		$data['show_article_data'] = $this->mView->Show_Article_data();
		$data['show_category'] = $this->mView->Show_Category_data();
		$this->load->view('artikel',$data);
	}
	function add_new(){
		$this->mCreate->add_article();
		redirect('artikel','refresh');
	}
	function edit(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['user'];
		// This for web
		$idarticle = $this->uri->segment(3); // change number to your number <-see uri segment CI
		$data['show_category'] = $this->mView->Show_Category_data();
		$data['show_article_data'] = $this->mView->Show_Article_data_byId($idarticle);
		$this->load->view('edit_artikel',$data);
	}
	function edit_true(){
		$this->mUpdate->edit_article();
		redirect('artikel','refresh');
	}
	function delete(){
		$idarticle = $this->uri->segment(3);
		$this->mDelete->delete_article($idarticle);
		redirect('artikel','refresh');
	}
}
?>