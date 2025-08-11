<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries, models, or helpers here
        $this->load->library('session');
        $this->load->model('Auth_model'); // Assuming you have a Auth_model for user operations
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

    public function register()
    {
        $data['title'] = 'Register';

        // Set validation rules based on register.php fields
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('phoneNumber', 'Phone Number', 'required');
        $this->form_validation->set_rules('birthdayDate', 'Birthday', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Load register view with errors
            $this->load->view('component/register', $data);
        } else {
            $userData = [
                'email'      => $this->input->post('email'),
                'username'   => $this->input->post('username'),
                'password'   => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'phone'      => $this->input->post('phoneNumber'),
                'birthday'   => $this->input->post('birthdayDate'),
                'state'      => $this->input->post('state'),
                'city'       => $this->input->post('city'),
                'address'    => $this->input->post('address'),
                'created_at' => date('Y-m-d H:i:s')
            ];

            $insert = $this->Auth_model->register($userData);

            if ($insert) {
                $this->session->set_flashdata('success', 'Registration successful. Please login.');
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('error', 'Registration failed. Please try again.');
                $this->load->view('component/register', $data);
            }
        }
    }
}
