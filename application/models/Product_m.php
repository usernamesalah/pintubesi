<?php defined('BASEPATH') || exit('No direct script allowed');

class Product_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'product';
		$this->data['primary_key'] = 'id';
	}
}

