<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$this->load->model('User');

		$dtUser = $this->User->getSelected($user)->result_array();

		if(count($dtUser) > 0)
		{
			echo "password = ".$pass."<br>";

			$encpass = sha1($pass);
			echo "encrypted password = ".$encpass."<br>";
			echo "db password = ".$dtUser[0]."<br>";

			if($encpass == $dtUser[0]['password']) echo "login berhasil";
			else echo "password salah";
		}
		else echo "usernamme salah!";
	}
}
