<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('home');
        }

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim'
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim'
        );

        if ($this->form_validation->run() == FALSE) {

            $data['title'] = 'Masuk';

            $this->load->view('front-end/login.php', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = htmlspecialchars($this->input->post('username'), true);
        $password = htmlspecialchars($this->input->post('password'), true);

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username']
                ];

                $this->session->set_userdata($data);

                if ($user['username'] == 'admin') {
                    redirect('home');
                } else {
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Username atau Password salah! </div>');
                redirect('login');
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');

        $this->session->set_flashdata(
            'message',
            '<br>
        Kamu telah keluar dari Aplikasi ini.</br>'

        );
        redirect('login');
    }
}
