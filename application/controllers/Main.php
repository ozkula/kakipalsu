<?php 
/**
* 
*/
class Main extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){		
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['user'];
		$data['count_post'] = $this->mView->Count_Post_data();
		$data['count_artikel'] = $this->mView->Count_article_data();
		$data['count_category'] = $this->mView->Count_category_data();
		$this->load->view('main',$data);
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}
?>