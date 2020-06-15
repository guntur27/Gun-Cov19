<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{

		$nasional = json_decode(file_get_contents("https://indonesia-covid-19-api.now.sh/api/"), true);

		$data = [
			'nasional' => $nasional,

		];

		$this->load->view('front-end/header.php', $data);
		$this->load->view('front-end/home.php', $data);
		$this->load->view('front-end/footer.php');
	}
}
