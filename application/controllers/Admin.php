<?php


class Admin extends CI_Controller
{
	public function view($page = 'AdminLogin')
	{
		if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

//		$this->load->view('templates/header', $data);
		$this->load->view('admin/'.$page, $data);
//		$this->load->view('templates/footer', $data);
	}
}