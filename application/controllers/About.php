<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Tentang Kami';

        $this->load->view('front-end/header.php');
        $this->load->view('front-end/about.php', $data);
        $this->load->view('front-end/footer.php');
    }
}
