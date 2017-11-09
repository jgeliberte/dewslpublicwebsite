<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Api_model extends CI_Model {

	public function getGroundCrackName($site){
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
		$sql = "SELECT DISTINCT crack_id FROM senslopedb.gndmeas where site_id ='$site_name' order by crack_id asc";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function getRainProps($site){
		$this->db->select('*');
		$this->db->from('rain_props');
		$this->db->where("name", $site);
		$query = $this->db->get();
		return $query->result();
	}

	public function getSiteColumn($site){
		$this->db->select('*');
		$this->db->from('site_column');
		$this->db->like("name", $site);
		$query = $this->db->get();
		return $query->result();
	}
	
}