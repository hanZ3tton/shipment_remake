<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load the User_model. We'll refer to it as $this->User_model directly.
        $this->load->model('User_model');
        // Load necessary libraries and helpers for form validation, session management, and URL redirection.
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url');
    }

    // Displays the user's profile and the table of other users (for admin view).
    public function index()
    {
        $user_id = $this->session->userdata('user_id'); // Get the ID of the currently logged-in user.

        // Fetch the logged-in user's data for the profile card.
        $data['user'] = $this->User_model->get_user_by_id($user_id);

        // Fetch all other users for the admin table, ensuring the logged-in user isn't in this list.
        $data['users'] = $this->User_model->get_all_users_except($user_id);

        $data['title'] = 'Profile';
        $data['content'] = 'app/user/index'; // The main view for displaying profile and user table.
        $data['style'] = 'app/user/index_style'; // Your CSS file for this page.
        $this->load->view('app', $data); // Load the main application layout view.
    }

    // Handles displaying the form and processing the submission for creating a new user (admin function).
    public function create()
    {
        // Set validation rules for the new user's fields.
        $this->form_validation->set_rules('user_name', 'Username', 'required|trim|is_unique[users.user_name]', [
            'is_unique' => 'This username is already taken.'
        ]);
        $this->form_validation->set_rules('full_name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'This email is already registered.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|trim');
        $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('state', 'State', 'required|trim');
        $this->form_validation->set_rules('city', 'City', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');

        // Check if the form validation passes.
        if ($this->form_validation->run() == FALSE) {
            // If validation fails or the form hasn't been submitted, display the creation form.
            $data['title'] = 'Create User';
            $data['content'] = 'app/user/form_create'; // Your create user form view.
            $data['style'] = 'app/user/index_style';
            $this->load->view('app', $data);
        } else {
            // If validation passes, gather data from the POST request.
            $insert_data = [
                'user_name'     => $this->input->post('user_name'),
                'password'      => password_hash($this->input->post('password'), PASSWORD_BCRYPT), // Hash the password securely.
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

            // Attempt to create the user using the model's method.
            if ($this->User_model->create_user($insert_data)) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New user added successfully!</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to add user.</div>');
            }
            redirect('app/profile'); // Redirect back to the main profile page to show the updated table.
        }
    }

    // Handles displaying the form and processing the submission for updating an existing user.
    public function update($id = null) // The user ID is passed as a URL segment.
    {
        // Check if an ID was provided.
        if ($id === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User ID not provided for update.</div>');
            redirect('app/profile');
        }

        // Fetch the existing user data to pre-populate the form.
        $user_data = $this->User_model->get_user_by_id($id);
        if (!$user_data) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User not found.</div>');
            redirect('app/profile');
        }

        // Set validation rules for the update form.
        $this->form_validation->set_rules('full_name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
        $this->form_validation->set_rules('state', 'State', 'required|trim');
        $this->form_validation->set_rules('city', 'City', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');

        // Check for unique email, allowing the current user's email to pass if unchanged.
        $current_email = $user_data->email;
        $new_email = $this->input->post('email');
        if ($new_email !== $current_email) {
            $this->form_validation->set_rules('email', 'Email', 'is_unique[users.email]', [
                'is_unique' => 'This email is already registered to another account.'
            ]);
        }

        // Only validate the password if the field is not empty (i.e., user wants to change it).
        if (!empty($this->input->post('password'))) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[6]|trim');
        }

        // Check if the form validation passes.
        if ($this->form_validation->run() == FALSE) {
            // If validation fails or the form hasn't been submitted, display the update form.
            $data['title'] = 'Update User';
            $data['user'] = $user_data; // Pass existing user data to the view for pre-population.
            $data['content'] = 'app/user/form_update'; // Your update user form view.
            $data['style'] = 'app/user/index_style';
            $this->load->view('app', $data);
        } else {
            // If validation passes, gather data for update.
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

            // Add the password to the update data only if it was provided.
            if (!empty($this->input->post('password'))) {
                $update_data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            }

            // Attempt to update the user using the model's method.
            if ($this->User_model->update_user($id, $update_data)) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User updated successfully!</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to update user.</div>');
            }
            redirect('app/profile'); // Redirect back to the main profile page.
        }
    }

    // Handles deleting a single user (admin function).
    public function delete($id = null) // The user ID to delete is passed as a URL segment.
    {
        // Check if an ID was provided.
        if ($id === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User ID not provided for deletion.</div>');
            redirect('app/profile');
        }

        // Prevent a logged-in user from deleting their own account.
        $logged_in_user_id = $this->session->userdata('user_id');
        if ($id == $logged_in_user_id) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">You cannot delete your own account.</div>');
            redirect('app/profile');
        }

        // Attempt to delete the user using the model's method.
        if ($this->User_model->delete_user($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User deleted successfully!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to delete user.</div>');
        }
        redirect('app/profile'); // Redirect back to the main profile page.
    }
}
