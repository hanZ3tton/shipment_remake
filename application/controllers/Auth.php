<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['session', 'form_validation']);
        $this->load->model('Auth_model');
        $this->load->database();
        $this->load->helper('url');
    }

    public function login()
    {
        $data['title'] = 'Login';

        // Validation rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['content'] = 'auth/login';
            $this->load->view('guest', $data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Check credentials
            $user = $this->Auth_model->login($username, $password);

            if ($user) {
                $this->session->set_userdata([
                    'user_id'   => $user->id,
                    'username'  => $user->user_name, // Sesuai kolom DB
                    'logged_in' => TRUE
                ]);
                //redirect('dashboard');
                echo "Login successful! Welcome, " . $user->full_name;
            } else {
                $this->session->set_flashdata('error', 'Invalid username or password');
                $data['content'] = 'auth/login';
                $this->load->view('guest', $data);
            }
        }
    }

    public function register()
    {
        $data['title'] = 'Register';

        // Validation rules
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.user_name]');
        $this->form_validation->set_rules('fullname', 'Full Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required');
        $this->form_validation->set_rules('birthdayDate', 'Date of Birth', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['content'] = 'auth/register';
            $this->load->view('guest', $data);
        } else {
            $userData = [
                'email'         => $this->input->post('email'),
                'user_name'     => $this->input->post('username'),
                'full_name'     => $this->input->post('fullname'),
                'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'phone_number'  => $this->input->post('phonenumber'),
                'date_of_birth' => $this->input->post('birthdayDate'),
                'state'         => $this->input->post('state'),
                'city'          => $this->input->post('city'),
                'address'       => $this->input->post('address'),
                'created_at'    => date('Y-m-d H:i:s'),
                'update_at'     => date('Y-m-d H:i:s')
            ];

            if ($this->Auth_model->register($userData)) {
                $this->session->set_flashdata('success', 'Registration successful. Please login.');
                redirect('auth/register');
            } else {
                $this->session->set_flashdata('error', 'Registration failed. Please try again.');
                $this->load->view('auth/register', $data);
            }
        }
    }
}
