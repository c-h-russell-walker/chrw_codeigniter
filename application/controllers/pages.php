<?php

class Pages extends CI_Controller {
  
  public function _construct()
  {
  }
  
	public function view($page = 'index')
	{
    if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}
	
	$data['title'] = ucfirst($page); // Capitalize the first letter
  
	$this->load->view('templates/header', $data);
  $this->load->view('templates/topnav', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer', $data);
  
	}
}
