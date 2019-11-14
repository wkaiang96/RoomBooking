<?php


class User extends CI_Controller
{
	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'views/user/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}


		$data['title'] = ucfirst($page); // Capitalize the first letter
		if($page == 'UserLogin'){
			//$this->load->view('templates/AdminHeader', $data);
			$this->load->view('user/'.$page, $data);
			//$this->load->view('templates/footer', $data);
		}else{
			$this->load->helper('url');
			$this->load->view('templates/header', $data);
			$this->load->view('user/'.$page, $data);
			$this->load->view('templates/footer', $data);
		}
	}
}
