<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['content'] = 'home';
        $this->data['title'] = 'Home | '.$this->title;
        $this->template($this->data ,'home');
    }
}
