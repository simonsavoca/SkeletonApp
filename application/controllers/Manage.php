<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login');
        }

	}



	public function index()
	{
		if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login');
        }

        // Datas collection
        $user = $this->ion_auth->user()->row();
        $email = $user->email;
        $data['email']= $email;

        // Page creation
	    $this->load->view('manage/common/header', $data);

	    // Top menu
	    $this->load->view('manage/common/top_menu', $data);

	    // Compose sidebar according privileges
	    $this->load->view('manage/common/sidebar_header', $data);
	    //Admin menu
	    if ($this->ion_auth->is_admin())
	    {
	        $this->load->view('manage/common/sidebar_admin', $data);
	    }
	    // User menu
	    $this->load->view('manage/common/sidebar_user', $data);
	    $this->load->view('manage/common/sidebar_footer', $data);

	    // Main page
	    $this->load->view('manage/index', $data);
	    $this->load->view('manage/common/footer', $data);
	}

	public function users()
	{
	    if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login');
        }
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
			$this->data['title'] = $this->lang->line('index_heading');

			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data['users'] = $this->ion_auth->users()->result();

			//USAGE NOTE - you can do more complicated queries like this
			//$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();

			foreach ($this->data['users'] as $k => $user)
			{
				$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}

	        // Datas collection
            $user = $this->ion_auth->user()->row();
            $email = $user->email;
            $data['email']= $email;

            // Page creation
    	    $this->load->view('manage/common/header', $this->data);

    	    // Top menu
    	    $this->load->view('manage/common/top_menu', $this->data);

    	    // Compose sidebar according privileges
    	    $this->load->view('manage/common/sidebar_header', $data);
    	    //Admin menu
    	    if ($this->ion_auth->is_admin())
    	    {
    	        $this->load->view('manage/common/sidebar_admin', $this->data);
    	    }
    	    // User menu
    	    $this->load->view('manage/common/sidebar_user', $this->data);
    	    $this->load->view('manage/common/sidebar_footer', $this->data);

    	    // Main page
			//$this->_render_page('manage' . DIRECTORY_SEPARATOR . 'users', $this->data);
			$this->load->view('manage/user/list', $this->data);

			$this->load->view('manage/common/footer', $this->data);
		}
	}

	public function events()
	{
	    if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login');
        }

        // Datas collection
        $data['user'] = $this->ion_auth->user();


	    // Page creation
	    $this->load->view('manage/common/header', $data);

	    // Top menu
	    $this->load->view('manage/common/top_menu', $data);

	    // Compose sidebar according privileges
	    $this->load->view('manage/common/sidebar_header', $data);
	    //Admin menu
	    if ($this->ion_auth->is_admin())
	    {
	        $this->load->view('manage/common/sidebar_admin', $data);
	    }
	    // User menu
	    $this->load->view('manage/common/sidebar_user', $data);
	    $this->load->view('manage/common/sidebar_footer', $data);

	    // Main page
	    $this->load->view('manage/events', $data);
	    $this->load->view('manage/common/footer', $data);
	}

	public function photos()
	{
	    if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login');
        }

        // Datas collection
        $data['user'] = $this->ion_auth->user();


	    // Page creation
	    $this->load->view('manage/common/header', $data);

	    // Top menu
	    $this->load->view('manage/common/top_menu', $data);

	    // Compose sidebar according privileges
	    $this->load->view('manage/common/sidebar_header', $data);
	    //Admin menu
	    if ($this->ion_auth->is_admin())
	    {
	        $this->load->view('manage/common/sidebar_admin', $data);
	    }
	    // User menu
	    $this->load->view('manage/common/sidebar_user', $data);
	    $this->load->view('manage/common/sidebar_footer', $data);

	    // Main page
	    $this->load->view('manage/photos', $data);
	    $this->load->view('manage/common/footer', $data);
	}
}
