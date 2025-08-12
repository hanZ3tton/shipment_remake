<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load necessary models, helpers, libraries here
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->library('session');
        check_login(); // kalau belum login diarahkan ke /auth/login
        // Add authentication check if needed
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['content'] = 'app/dashboard/index'; // This should point to the view
        // Load dashboard view
        $this->load->view('app', $data);
    }
    public function edituser()
    {
        $data['title'] = 'Edit User';
        $data['content'] = 'component/edit_user'; // This should point to the edit user view
        // Load edit user view
        $this->load->view('app', $data);
    }
}
