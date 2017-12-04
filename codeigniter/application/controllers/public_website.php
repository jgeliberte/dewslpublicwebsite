<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Public_website extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('monitoring_model');
		$this->load->model('create_table_model');
		$this->load->model('public_website_model');
		$this->load->library('../controllers/monitoring');
		$this->load->dbforge();
	}

	public function index() {

		$data['title'] = "Home";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('templates/footer');
	}

	public function individual_site($site_code) {

		$this->create_table_model->createCommunityActivitiesTable();
		$this->create_table_model->createCommunityTimelineTable();

		$data['site'] = json_decode($this->monitoring_model->getSites( array("name" => $site_code) ))[0];
		$data['title'] = strtoupper($site_code) . " - Individual Site Page";

		$features_path = "images/hazard_information/landslide_features/$site_code";
		if( is_dir($features_path) ) {
			$data['features_pic'] = array_filter(scandir($features_path), function($item) use ($features_path) {
		  		return !is_dir($features_path . "/" . $item);
			});
		}
		else $data['features_pic'] = null;

		$data['timeline'] = $this->public_website_model->getTimeline($site_code);

		$data['community_timeline'] = $this->load->view('public_website/community_timeline', $data, true);
		$data['hazard_information'] = $this->load->view('public_website/hazard_information', $data, true);
		$data['data_analysis'] = $this->load->view('public_website/data_analysis', $data, true);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('public_website/individual_site', $data);
		$this->load->view('templates/footer');

	}

	public function site_list() {

		$data['title'] = "DYNASLOPE - Site List Page";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('public_website/site_list', $data);
		$this->load->view('templates/footer');

	}
	
	public function who_we_are() {
		
		$data['title'] = "DYNASLOPE - Who We Are";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('public_website/who_we_are_page');
		$this->load->view('templates/footer');
	}

	public function what_we_do() {
		
		$data['title'] = "DYNASLOPE - What We Do";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('public_website/what_we_do_page');
		$this->load->view('templates/footer');
	}

	public function where_we_work() {
		
		$data['title'] = "DYNASLOPE - Where We Work";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');

		$this->load->view('templates/footer');
	}

	public function staff_list() {
		
		$data['title'] = "DYNASLOPE - Staff List Page";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('public_website/staff_list');
		$this->load->view('templates/footer');
	}

	/*public function upload()
	{	
		$array = array(
			'activity_id' => 4,
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate justo sed tortor sodales, id porttitor velit euismod. Nullam tristique nibh ac feugiat placerat. Suspendisse nunc tortor, egestas at magna ac, ornare pulvinar velit. Aenean vulputate imperdiet mi et rhoncus. Vestibulum accumsan tortor ac arcu luctus rhoncus non eu ligula. Etiam vestibulum rhoncus libero, ut mattis orci aliquet quis. Sed iaculis convallis ligula blandit aliquam. Quisque sed leo dapibus, tristique erat ut, dictum magna. Maecenas vitae nunc feugiat, ultrices nisi vel, aliquam sapien. Integer sit amet condimentum elit. Vestibulum cursus faucibus arcu non maximus. Donec ex nisl, finibus eu aliquet quis, feugiat et arcu. Vivamus euismod nunc ultricies, accumsan felis eu, finibus turpis. Sed eget rutrum dui, sed ullamcorper diam.',
			'staff_id' => 37,
			// 'start_date' => '2015-12-10',
			// 'end_date' => '2015-12-12'
		);

		$list = array(
			0 => array(
				'site_id' => 7,
				'start_date' => '2014-05-14',
				'end_date' => '2014-05-15'
			),
			1 => array(
				'site_id' => 8,
				'start_date' => '2014-05-16',
				'end_date' => '2014-05-17'
			),
			2 => array(
				'site_id' => 13,
				'start_date' => '2014-05-05',
				'end_date' => '2014-05-06'
			), 
			3 => array(
				'site_id' => 14,
				'start_date' => '2014-05-08',
				'end_date' => '2014-05-09'
			),
			4 => array(
				'site_id' => 20,
				'start_date' => '2014-04-26',
				'end_date' => '2014-04-27'
			), 
			5 => array(
				'site_id' => 28,
				'start_date' => '2014-03-18',
				'end_date' => '2014-03-19'
			),
			6 => array(
				'site_id' => 36,
				'start_date' => '2014-05-09',
				'end_date' => '2014-05-10'
			),
			7 => array(
				'site_id' => 41,
				'start_date' => '2014-05-06',
				'end_date' => '2014-05-07'
			),
			8 => array(
				'site_id' => 42,
				'start_date' => '2014-03-18',
				'end_date' => '2014-03-19'
			),
			// 9 => array(
			// 	'site_id' => 38,
			// 	'start_date' => '2015-08-12',
			// 	'end_date' => '2015-08-14'
			// ),
			// 10 => array(
			// 	'site_id' => 39,
			// 	'start_date' => '2015-05-28',
			// 	'end_date' => '2015-05-30'
			// ),
			// 11 => array(
			// 	'site_id' => 48,
			// 	'start_date' => '2015-12-17',
			// 	'end_date' => '2015-12-19'
			// ),
			// 12 => array(
			// 	'site_id' => 50,
			// 	'start_date' => '2015-06-22',
			// 	'end_date' => '2015-06-24'
			// ),
			// 13 => array(
			// 	'site_id' => 38,
			// 	'start_date' => '2016-03-30',
			// 	'end_date' => NULL
			// ),
			// 14 => array(
			// 	'site_id' => 39,
			// 	'start_date' => '2016-02-10',
			// 	'end_date' => NULL
			// ),
			// 15 => array(
			// 	'site_id' => 40,
			// 	'start_date' => '2016-03-30',
			// 	'end_date' => NULL
			// )
		);
		
		//$list = [4, 7, 11, 13, 14, 20, 21, 24, 27, 28, 29, 30, 31, 32, 34, 35, 43, 44, 46, 49, 50];

		foreach ($list as $arr) {
			$combined = array_merge($array, $arr);
			//$combined = $array; $combined["site_id"] = $arr;
			$this->monitoring_model->insert('community_timeline', $combined);
		}

		//$this->monitoring_model->insert('community_timeline', $array);
	}*/

	// public function createThumbnail()
	// {
	// 	$path = 'C:\xampp\dewslpublicwebsite\html\images\hazard_information\landslide_features';
	// 	$sites = array_slice(scandir($path), 2);

	// 	foreach ($sites as $site) 
	// 	{
	// 		$dir_path = $path . "/" . $site;
	// 		if( !file_exists($dir_path . "/thumbnails") ) mkdir($dir_path . "/thumbnails", 0777);
	// 		$pics = array_filter(scandir($dir_path), function($item) use ($dir_path) {
	// 	  		return !is_dir($dir_path . "/" . $item);
	// 		});

	// 		foreach ($pics as $pic) 
	// 		{
	// 			$file = $dir_path . "/" . $pic;
	// 			$imagick = new \Imagick($file);
	// 			$this->autorotate($imagick);
	// 			$imagick->writeImage($file);
	// 			$imagick->cropThumbnailImage(300, 300);
	// 			$imagick->writeImageFile(fopen($dir_path . "/thumbnails/" . $pic, 'wb'));
	// 		}
	// 	}
	// }

	function autorotate(Imagick $image)
	{
	    switch ($image->getImageOrientation()) {
	    case Imagick::ORIENTATION_TOPLEFT:
	        break;
	    case Imagick::ORIENTATION_TOPRIGHT:
	        $image->flopImage();
	        break;
	    case Imagick::ORIENTATION_BOTTOMRIGHT:
	        $image->rotateImage("#000", 180);
	        break;
	    case Imagick::ORIENTATION_BOTTOMLEFT:
	        $image->flopImage();
	        $image->rotateImage("#000", 180);
	        break;
	    case Imagick::ORIENTATION_LEFTTOP:
	        $image->flopImage();
	        $image->rotateImage("#000", -90);
	        break;
	    case Imagick::ORIENTATION_RIGHTTOP:
	        $image->rotateImage("#000", 90);
	        break;
	    case Imagick::ORIENTATION_RIGHTBOTTOM:
	        $image->flopImage();
	        $image->rotateImage("#000", 90);
	        break;
	    case Imagick::ORIENTATION_LEFTBOTTOM:
	        $image->rotateImage("#000", -90);
	        break;
	    default: // Invalid orientation
	        break;
	    }
	    
	    $image->setImageOrientation(Imagick::ORIENTATION_TOPLEFT);
	    return $image;
	}

}

/* End of file pubrelease.php */
/* Location: ./application/controllers/pubrelease.php */
