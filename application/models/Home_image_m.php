<?php defined('BASEPATH') || exit('No direct script allowed');

class Home_image_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'home_image';
		$this->data['primary_key'] = 'id';
	}
}

