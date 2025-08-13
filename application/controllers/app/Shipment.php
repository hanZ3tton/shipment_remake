<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shipment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Shipment_model');
        $this->load->helper('url');
        $this->load->library('session');

        // Contoh: kalau ada proteksi login
        // check_login();
    }

    public function index()
    {
        $data['shipments'] = $this->Shipment_model->get_all_shipments();
        $this->load->view('app/shipment/index', $data);
    }
}
