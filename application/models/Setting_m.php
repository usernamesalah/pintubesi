<?php defined('BASEPATH') || exit('No direct script allowed');

class Setting_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'setting';
		$this->data['primary_key'] = 'id';
	}
}

