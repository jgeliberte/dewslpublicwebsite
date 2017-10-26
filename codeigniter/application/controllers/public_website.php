<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Public_website extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('monitoring_model');
		$this->load->library('../controllers/monitoring');
	}

	public function index() {

		$data['title'] = "Home";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');

		$this->load->view('templates/footer');
	}

	public function individual_site($site_code) {

		$data['site'] = json_decode($this->monitoring_model->getSites( array("name" => $site_code) ))[0];
		$data['title'] = strtoupper($data['site']->name) . " - Individual Site Page";

		$data['community_timeline'] = $this->load->view('public_website/community_timeline', $data, true);
		$data['hazard_information'] = $this->load->view('public_website/hazard_information', NULL, true);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('public_website/individual_site', $data);
		$this->load->view('templates/footer');

	}

	public function site_list() {

		$data['title'] = "Site List Page";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('public_website/site_list', $data);
		$this->load->view('templates/footer');

	}

	public function what_we_do() {
		
		$data['title'] = "What we do";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('public_website/what_we_do_page');
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
