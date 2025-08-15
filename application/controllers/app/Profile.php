<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url');
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        $data['user'] = $this->User_model->get_user_by_id($user_id);
        $data['users'] = $this->User_model->get_all_users_except($user_id);

        $data['title'] = 'Profile';
        $data['content'] = 'app/user/index';
        $data['style'] = 'app/user/index_style';
        $this->load->view('app', $data);
    }

    public function create()
    {
        $this->form_validation->set_rules('user_name', 'Username', 'required|trim|is_unique[users.user_name]');
        $this->form_validation->set_rules('full_name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|trim');
        $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('state', 'State', 'required|trim');
        $this->form_validation->set_rules('city', 'City', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Create User';
            $data['content'] = 'app/user/form_create';
            $data['style'] = 'app/user/index_style';
            $this->load->view('app', $data);
        } else {
            $insert_data = [
                'user_name'     => $this->input->post('user_name'),
                'password'      => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'full_name'     => $this->input->post('full_name'),
                'date_of_birth' => $this->input->post('date_of_birth'),
                'email'         => $this->input->post('email'),
                'phone_number'  => $this->input->post('phone_number'),
                'state'         => $this->input->post('state'),
                'city'          => $this->input->post('city'),
                'address'       => $this->input->post('address'),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ];

            if ($this->User_model->create_user($insert_data)) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">New user added successfully!</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Failed to add user.</div>');
            }
            redirect('app/profile');
        }
    }

    public function update($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">User ID not provided.</div>');
            redirect('app/profile');
        }

        $user_data = $this->User_model->get_user_by_id($id);
        if (!$user_data) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">User not found.</div>');
            redirect('app/profile');
        }

        $this->form_validation->set_rules('full_name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
        $this->form_validation->set_rules('state', 'State', 'required|trim');
        $this->form_validation->set_rules('city', 'City', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');

        $current_email = $user_data->email;
        $new_email = $this->input->post('email');
        if ($new_email !== $current_email) {
            $this->form_validation->set_rules('email', 'Email', 'is_unique[users.email]');
        }

        if (!empty($this->input->post('password'))) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[6]|trim');
        }

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Update User';
            $data['user'] = $user_data;
            $data['content'] = 'app/user/form_update';
            $data['style'] = 'app/user/index_style';
            $this->load->view('app', $data);
        } else {
            $update_data = [
                'full_name'     => $this->input->post('full_name'),
                'date_of_birth' => $this->input->post('date_of_birth'),
                'email'         => $this->input->post('email'),
                'phone_number'  => $this->input->post('phone_number'),
                'state'         => $this->input->post('state'),
                'city'          => $this->input->post('city'),
                'address'       => $this->input->post('address'),
                'updated_at'    => date('Y-m-d H:i:s')
            ];

            if (!empty($this->input->post('password'))) {
                $update_data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            }

            if ($this->User_model->update_user($id, $update_data)) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">User updated successfully!</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Failed to update user.</div>');
            }
            redirect('app/profile');
        }
    }

    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">User ID not provided.</div>');
            redirect('app/profile');
        }

        $logged_in_user_id = $this->session->userdata('user_id');
        if ($id == $logged_in_user_id) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">You cannot delete your own account.</div>');
            redirect('app/profile');
        }

        if ($this->User_model->delete_user($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">User deleted successfully!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Failed to delete user.</div>');
        }
        redirect('app/profile');
    }
}
