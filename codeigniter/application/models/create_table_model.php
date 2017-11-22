<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create_Table_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function createCommunityActivitiesTable()
	{
		$fields = array(
			'activity_id' => array(
				'type' => 'INT',
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR', 
				'constraint' => '300'
			),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => '1500'
			)
		);

		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('activity_id', TRUE);
		$this->dbforge->create_table('community_activities', TRUE);
	}


	public function createCommunityTimelineTable()
	{
		$fields = array(
			'timeline_id' => array(
				'type' => 'INT',
				'auto_increment' => TRUE
			),
			'activity_id' => array(
				'type' => 'INT',
			),
			'site_id' => array(
				'type' => 'INT'
			),
			'start_date' => array(
				'type' => 'DATE', 
			),
			'end_date' => array(
				'type' => 'DATE',
				'null' => TRUE
			),
			'content' => array(
				'type' => 'VARCHAR',
				'constraint' => '2000'
			),
			'staff_id' => array(
				'type' => 'INT'
			)
		);

		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('timeline_id', TRUE);
		$this->dbforge->add_key('activity_id');
		$this->dbforge->add_key('site_id');
		$this->dbforge->add_key('staff_id');
		$this->dbforge->create_table('community_timeline', TRUE);
	}

}