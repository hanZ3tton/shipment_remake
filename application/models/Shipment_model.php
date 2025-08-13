<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shipment_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data shipment
    public function get_all_shipments()
    {
        $this->db->order_by('created_at', 'DESC'); // Urutkan dari terbaru
        return $this->db->get('shipments')->result_array(); // ganti sesuai nama tabel
    }
}
