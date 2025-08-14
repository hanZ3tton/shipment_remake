<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shipment_model extends CI_Model
{

    public function insert_shipment($data)
    {
        return $this->db->insert('shipments', $data);
    }


    private $table = 'shipments'; // Nama tabel di database

    public function get_all()
    {
        return $this->db->get($this->table)->result_array();
    }


    // Mengambil semua data pengiriman
    public function get_all_shipments()
    {
        return $this->db->order_by('id', 'DESC')->get('shipments')->result_array();
    }

    // Menghapus data berdasarkan array ID
    public function delete_shipments_by_ids($ids)
    {
        if (!empty($ids)) {
            $this->db->where_in('id', $ids);
            $this->db->delete('shipments');
            return $this->db->affected_rows();
        }
        return 0;
    }

    // Mengambil satu data untuk halaman edit nanti
    public function get_shipment_by_id($id)
    {
        return $this->db->get_where('shipments', ['id' => $id])->row_array();
    }
}
