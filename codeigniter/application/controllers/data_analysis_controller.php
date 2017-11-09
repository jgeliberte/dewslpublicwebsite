<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class data_analysis_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		
		$page = 'Analysis Graphs';
		$data['first_name'] = $this->session->userdata('first_name');
		$data['last_name'] = $this->session->userdata('last_name');
		$data['user_id'] = $this->session->userdata("id");
		
		$data['title'] = $page;

		$this->load->view('templates/header', $data);
		// $this->load->view('templates/nav');
		// $this->load->view('templates/footer');
		$this->load->view('public_website/data_analysis', $data);
	}
	

	public function getAllEos(){
		$data_result = json_decode($_POST['data']);
		var_dump($data_result);
	}

	
}
?>