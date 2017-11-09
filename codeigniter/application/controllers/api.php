<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class API extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('api_model');

	}
		public function GroundDataFromLEWSInRange($site,$fdate,$tdate){ // example http://localhost/api/GroundDataFromLEWSInRange/AGB/2013-01-01/2017-01-01
			if($site == "mng"){
				$site_name = "man";
			}else if( $site == "png"){
				$site_name = "pan";
			}else if($site == "bto"){
				$site_name = "bat";
			}else if($site == "jor"){
				$site_name = "pob";
			}else{
				$site_name = $site;
			}
			$os = PHP_OS;
			if (strpos($os,'WIN') !== false) {
				$pythonPath = 'c:\Users\USER\Anaconda2\python.exe';
				$fileName = 'C:\xampp\updews-pycodes\Liaison-mysql\gndmeasInRange.py';
			}
			elseif ((strpos($os,'Ubuntu') !== false) || (strpos($os,'Linux') !== false)) {
				$pythonPath = '/home/ubuntu/anaconda2/bin/python';
				$fileName = '/var/www/updews-pycodes/Liaison/gndmeasInRange.py';
			}
			else {
				echo "Unknown OS for execution... Script discontinued";
				return;
			}
			$command = $pythonPath.' '.$fileName.' '.$site_name.' '.$fdate.' '.$tdate;
			exec($command, $output, $return);
			print json_encode($output[sizeof($output)-1]);
		}


		public function SensorAllAnalysisData($site,$fdate,$tdate){ // example http://localhost/api/SensorAllAnalysisData/agbsb/2016-04-25/2016-05-25
			$os = PHP_OS;
			if (strpos($os,'WIN') !== false) {
				$pythonPath = 'c:\Users\USER\Anaconda2\python.exe';
				$fileName = 'C:\xampp\updews-pycodes\Liaison-mysql\allDataGen.py';
			}
			elseif ((strpos($os,'Ubuntu') !== false) || (strpos($os,'Linux') !== false)) {
				$pythonPath = '/home/ubuntu/anaconda2/bin/python';
				$fileName = '/var/www/updews-pycodes/Liaison/allDataGen.py';
			}
			else {
				echo "Unknown OS for execution... Script discontinued";
				return;
			}
			$command = $pythonPath.' '.$fileName.' '.$site.' '.$fdate.' '.$tdate;
			exec($command, $output, $return);
			print json_encode($output[sizeof($output)-1]);
			
		}

		

		public function RainSenslope($rsite,$fdate,$tdate){ // example http://localhost/api/RainSenslope/blcw/2016-05-25/2016-06-25
			$os = PHP_OS;
			if (strpos($os,'WIN') !== false) {
				$pythonPath = 'c:\Users\USER\Anaconda2\python.exe';
				$fileName = 'C:\xampp\updews-pycodes\Liaison-mysql\rainfallNewGetData.py';
			}
			elseif ((strpos($os,'Ubuntu') !== false) || (strpos($os,'Linux') !== false)) {
				$pythonPath = '/home/ubuntu/anaconda2/bin/python';
				$fileName = '/var/www/updews-pycodes/Liaison/rainfallNewGetData.py';
			}
			else {
				echo "Unknown OS for execution... Script discontinued";
				return;
			}
			
			$command = $pythonPath.' '.$fileName.' '.$rsite.' '.$fdate.' '.$tdate;
			exec($command, $output, $return);
			print json_encode($output);
		}
		public function RainNoah($rsite,$fdate,$tdate){ // example http://localhost/api/RainNoah/1104/2014-05-25/2016-06-25
			$os = PHP_OS;
			if (strpos($os,'WIN') !== false) {
				$pythonPath = 'c:\Users\USER\Anaconda2\python.exe';
				$fileName = 'C:\xampp\updews-pycodes\Liaison-mysql\rainfallNewGetDataNoah.py';
			}
			elseif ((strpos($os,'Ubuntu') !== false) || (strpos($os,'Linux') !== false)) {
				$pythonPath = '/home/ubuntu/anaconda2/bin/python';
				$fileName = '/var/www/updews-pycodes/Liaison/rainfallNewGetDataNoah.py';
			}
			else {
				echo "Unknown OS for execution... Script discontinued";
				return;
			}
			
			$command = $pythonPath.' '.$fileName.' '.$rsite.' '.$fdate.' '.$tdate;
			exec($command, $output, $return);
			print json_encode($output);
		}

		public function RainARQ($rsite,$fdate,$tdate){ //example http://localhost/api/RainARQ/agbtaw/2014-05-25/2016-06-25
			$os = PHP_OS;
			if (strpos($os,'WIN') !== false) {
				$pythonPath = 'c:\Users\USER\Anaconda2\python.exe';
				$fileName = 'C:\xampp\updews-pycodes\Liaison-mysql\rainfallNewGetDataARQ.py';
			}
			elseif ((strpos($os,'Ubuntu') !== false) || (strpos($os,'Linux') !== false)) {
				$pythonPath = '/home/ubuntu/anaconda2/bin/python';
				$fileName = '/var/www/updews-pycodes/Liaison/rainfallNewGetDataARQ.py';
			}
			else {
				echo "Unknown OS for execution... Script discontinued";
				return;
			}
			
			$command = $pythonPath.' '.$fileName.' '.$rsite.' '.$fdate.' '.$tdate;
			exec($command, $output, $return);
			print json_encode($output);
		}

		public function getDatafromGroundCrackNameUrl($site){
			$result = $this->api_model->getGroundCrackName($site);
			print json_encode($result);
		} 

		public function getDatafromRainPropsUrl($site){
			$result = $this->api_model->getRainProps($site);
			print json_encode($result);
		}

		public function SiteDetails($site){ // example http://localhost/cc
			$result = $this->api_model->getSiteColumn($site);
			print json_encode($result);
		}


	}