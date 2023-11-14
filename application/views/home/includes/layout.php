<?php

$this->load->view('home/includes/header', array('title' => $title));
$this->load->view('home/includes/navbar');
$this->load->view('home/' . $content);
$this->load->view('home/includes/footer');
?>