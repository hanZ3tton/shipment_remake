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
        $data['content'] = 'component/register'; // This should point to the view you want to load
        $this->load->view('app', $data);
    }

    public function another_method()
    {
        // Another method for demonstration
        echo "This is another method in the Sample controller.";
    }
}
