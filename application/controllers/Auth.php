<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries, models, or helpers here
        $this->load->library('session');
        $this->load->model('Auth_model'); // Assuming you have a User_model for user operations
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function login()
    {
        $data['title'] = 'Login';
        // Set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['content'] = 'app/auth/login';
            // Load login view with errors
            $this->load->view('app', $data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Check user credentials via model
            $user = $this->Auth_model->login($username, $password);

            if ($user) {
                // Set session data
                $this->session->set_userdata([
                    'user_id' => $user->id,
                    'username' => $user->username,
                    'logged_in' => TRUE
                ]);
                redirect('dashboard');
            } else {
                $data['content'] = 'app/auth/login';
                // Set error message and reload login
                $this->session->set_flashdata('error', 'Invalid username or password');
                $this->load->view('app', $data);
            }
        }
    }
}
