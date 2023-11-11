<?php

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->library("ci_jwt");
        $this->data['token'] = $this->session->userdata('token');

        if (isset($this->data['token'])) {
            $token = $this->ci_jwt->decode($this->data['token']);
            if(isset($token->username)) {
                redirect('admin');
                exit;
            }
        }

    }

    public function index()
    {
		if ($this->POST('login')) {
			$username = $this->POST('username');
			if (!isset($username)) {
				$this->flashmsg('username tidak boleh kosong', 'danger');
				redirect('login');
				exit;
			}

			$password = $this->POST('password');
			if (!isset($password)) {
				$this->flashmsg('password tidak boleh kosong', 'danger');
				redirect('login');
				exit;
			}

			$this->data['user'] = $this->User_m->get_row(['username' => $username]);
			if (!isset($this->data['user'])) {
				$this->flashmsg('username yang anda masukkan salah', 'danger');
				redirect('login');
				exit;
			}

			if (!password_verify($password , $this->data['user']->password)) {
				$this->flashmsg('password yang anda masukkan salah', 'danger');
				redirect('login');
				exit;
			}

			$token = $this->ci_jwt->encode([
				'username' => $this->data['user']->username
			]);

			$this->session->set_userdata(['token' => $token]);

			redirect('admin');
		}

		$this->load->view('login', $this->data);
    }


}
