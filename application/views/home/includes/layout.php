<?php

	$this->load->view('home/includes/header', array('title' => $title));
	if ($nav == 1) {
		$this->load->view('home/includes/navbar1');
	} else {
		$this->load->view('home/includes/navbar2');
	}
	$this->load->view($content);
	$this->load->view('home/includes/footer');
?>
