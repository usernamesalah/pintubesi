<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->data['whatsapp'] = $this->Setting_m->get_row(['index' => 'whatsapp']);
        $this->data['alamat'] = $this->Setting_m->get_row(['index' => 'alamat']);

        if (empty($this->data['whatsapp']))
            $this->data['whatsapp']->value = "62898xxx";
    }

    public function index()
    {
        $this->data['products'] = $this->Product_m->get();
        $this->data['clients'] = $this->Client_m->get();
        $this->data['home_img'] = $this->Home_image_m->get();

        $this->data['content'] = 'home';
        $this->data['title'] = 'Home | '.$this->title;
        $this->template($this->data ,'home');
    }

    
    public function product()
    {
        $this->data['products'] = $this->Product_m->get();

        $this->data['content'] = 'produk';
        $this->data['title'] = 'Home | '.$this->title;
        $this->template($this->data ,'home');
    }

    
    public function product_detail($id)
    {
        $this->data['product'] = $this->Product_m->get_row(['id' => $id]);
        $image[] = $this->data['product']->foto;
        $a = json_decode($this->data['product']->galery);
        if(count($a) > 0) {
            $this->data['product']->image = array_merge($image ,  $a);
        } else {
            $this->data['product']->image = $image;
        }
        
        $this->data['content'] = 'product-detail';
        $this->data['title'] = 'Home | '.$this->title;
        $this->template($this->data ,'home');
    }    

    public function about()
    {
        $this->data['about'] = $this->Setting_m->get_row(['index' => 'tentang'])->value;
        $docs = $this->Setting_m->get_row(['index' => 'document_pendukung'])->value;
        $this->data['docs'] = json_decode($docs, true);

        $this->data['content'] = 'about';
        $this->data['title'] = 'About | '.$this->title;
        $this->template($this->data ,'home');
    }

}
