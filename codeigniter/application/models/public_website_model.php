<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Public_Website_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getTimeline($site_code)
	{
		$this->db->select("community_timeline.*, community_activities.*");
		$this->db->from("community_timeline");
		$this->db->join("community_activities", "community_timeline.activity_id = community_activities.activity_id");
		$this->db->join("site", "community_timeline.site_id = site.id");
		$this->db->where("site.name", $site_code);
		$this->db->order_by("community_timeline.start_date", "DESC");
		$result = $this->db->get();

		return json_encode($result->result_object());
	}

}