<?php
class Sample extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load any necessary models, libraries, or helpers here
    }

    public function index()
    {
        // This method will be called when the controller is accessed
        $data['title'] = 'Sample Page';
        $data['content'] = 'app/dashboard/dashboard'; // This should point to the view you want to load
        $this->load->view('app', $data);
    }

    public function login()
    {
        // Load the login view
        $data['title'] = 'Dashboard';
        $data['style'] = ''; // You can define styles specific to the login page
        $data['content'] = 'auth/login'; // Adjust the path as necessary
        $this->load->view('auth', $data);
    }

    public function register()
    {
        // Load the register view
        $data['title'] = 'Register';

        $data['content'] = 'auth/register'; // Adjust the path as necessary
        $this->load->view('auth', $data);
    }

    public function another_method()
    {
        // Another method for demonstration
        echo "This is another method in the Sample controller.";
    }

    public function table()
    {
        // Load the table view
        $data['title'] = 'Table Page'; // You can define styles specific to the table page
        $data['content'] = 'component/table_user'; // Adjust the path as necessary
        $this->load->view('component/table_user');
    }
}
