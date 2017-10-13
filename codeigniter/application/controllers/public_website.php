<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Public_website extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('pubrelease_model');
		$this->load->library('../controllers/monitoring');
	}

	public function index() {

		$data['title'] = "Home";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');

		$this->load->view('templates/footer');
	}

	public function sample_site() {

		$data['title'] = "Individual Site Page";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('public_website/site_info_sample', $data);
		$this->load->view('templates/footer');

	}

	public function site_list() {

		$data['title'] = "Site List Page";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('public_website/site_list_sample', $data);
		$this->load->view('templates/footer');

	}

	public function what_we_do() {
		$data['title'] = "What we do";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');

		$this->load->view('templates/footer');
	}

	public function where_we_work() {
		$data['title'] = "Where we work";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');

		$this->load->view('templates/footer');
	}

	public function who_we_are() {
		$data['title'] = "Who we are";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('public_website/who_we_are_page');
		$this->load->view('templates/footer');
	}

}

/* End of file pubrelease.php */
/* Location: ./application/controllers/pubrelease.php */
