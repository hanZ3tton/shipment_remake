<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load necessary models, helpers, libraries here
        $this->load->model('Shipment_model');
        $this->load->helper('url');
        $this->load->library('session');
        // Add authentication check if needed
    }

    public function index()
    {
        // Example: Get shipment statistics
        $data['total_shipments'] = $this->Shipment_model->count_all();
        $data['pending_shipments'] = $this->Shipment_model->count_by_status('pending');
        $data['delivered_shipments'] = $this->Shipment_model->count_by_status('delivered');
        $data['recent_shipments'] = $this->Shipment_model->get_recent(10);

        // Load dashboard view
        $this->load->view('dashboard/index', $data);
    }
}