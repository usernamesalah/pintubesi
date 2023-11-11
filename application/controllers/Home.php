<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->config->load('app');
        $this->data['api_url'] = $this->config->item('API_URL');
        $this->data['poll_id'] = $this->config->item('poll_id');
        $this->data['admin_url']    = $this->config->item('ADMIN_URL');
        // $this->load->library('ci_jwt');
        // $this->data['payload'] = $this->ci_jwt->decode($this->data['token']);
        $this->load->library('gz');
    }

    public function index()
    {
        $this->data['nav'] = 1;
        $this->data['content'] = 'home/home';
        $this->data['title'] = 'Home | '.$this->title;
        $this->template($this->data ,'home');
    }

    public function about()
    {
        $this->data['nav'] = 1;
        $this->data['content'] = 'home/about';
        $this->data['title'] = 'About | '.$this->title;
        $this->template($this->data , 'home');
    }
    
    public function history()
    {
        $this->data['nav'] = 1;
        $this->data['content'] = 'home/history';
        $this->data['title'] = 'History | '.$this->title;
        $this->template($this->data , 'home');
    }

    public function register()
    {
        $this->data['nav'] = 1;
        $this->data['content'] = 'home/pendaftaran';
        $this->data['title'] = 'Pendaftaran | '.$this->title;
        $this->template($this->data , 'home');
    }

    public function listvoucher()
    {
        $this->data['nav'] = 1;
        $this->data['content'] = 'home/daftar_voucher';
        $this->data['title'] = 'Daftar Voucher | '.$this->title;
        $this->template($this->data , 'home');
    }

    public function formulir()
    {
        $this->data['nav'] = 1;
        $this->data['content'] = 'home/formulir';
        $this->data['title'] = 'Formulir | '.$this->title;
        $this->template($this->data , 'home');
    }

    public function himbauan()
    {
        $this->data['nav'] = 1;
        $this->data['content'] = 'home/himbauan';
        $this->data['title'] = 'Himbauan | '.$this->title;
        $this->template($this->data , 'home');
    }

}
