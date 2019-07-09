<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
	    $this->load->view('site/common/header');
	    $this->load->view('site/common/top_menu');
	    $this->load->view('site/index');
	    $this->load->view('site/common/footer');
	}
}
