<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shipment_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Load database library
        $this->load->database();
    }

    // Count all shipments
    public function count_all()
    {
        return $this->db->count_all('shipments');
    }

    // Count shipments by status
    public function count_by_status($status)
    {
        $this->db->where('status', $status);
        return $this->db->count_all_results('shipments');
    }

    // Get recent shipments, limit by $limit
    public function get_recent($limit = 10)
    {
        $this->db->order_by('created_at', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get('shipments');
        return $query->result_array();
    }
}