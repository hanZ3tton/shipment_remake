<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shipment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Shipment_model',);
    }

    public function index()
    {
        // Ambil semua data shipments dari model
        // Panggil model sesuai nama yang di-load
        $data['shipments'] = $this->Shipment_model->get_all();

        // Load view dengan data
        $data['content'] = 'app/shipment/index';
        $data['title'] = 'Shipment List';
        $data['style'] = 'app/shipment/index_style';
        $this->load->view('app', $data);
    }
    public function order()
    {
        $data['shipments'] = $this->Shipment_model->get_all();

        // Load view dengan data
        $data['content'] = 'app/shipment/not_yet_completed';
        $data['title'] = 'Shipment List';
        $data['style'] = 'app/shipment/index_style';
        $this->load->view('app', $data);
    }
    public function completed()
    {
        $data['shipments'] = $this->Shipment_model->get_all();

        // Load view dengan data
        $data['content'] = 'app/shipment/completed';
        $data['title'] = 'Shipment List';
        $data['style'] = 'app/shipment/index_style';
        $this->load->view('app', $data);
    }

    public function inbound()
    {
        $data['shipments'] = $this->Shipment_model->get_all();
        $data['content'] = 'app/shipment/inbound';
        $data['title'] = 'Inbound List';
        $data['style'] = 'app/shipment/index_style';

        $this->load->view('app', $data);
    }

    public function create()
    {
        $data['title'] = 'Create Shipment';
        $data['content'] = 'component/shipment_form'; // This should point to the create shipment view
        // Load create shipment view
        $this->load->view('app', $data);
    }

    public function save()
    {
        $data = [
            'status'                => $this->input->post('status'),
            'shipper_name'          => $this->input->post('shipper_name'),
            'shipper_phone_number'  => $this->input->post('shipper_phone_number'),
            'receiver_name'         => $this->input->post('receiver_name'),
            'receiver_phone_number' => $this->input->post('receiver_phone_number'),
            'receiver_state'        => $this->input->post('receiver_state'),
            'receiver_city'         => $this->input->post('receiver_city'),
            'receiver_postal_code'  => $this->input->post('receiver_postal_code'),
            'receiver_address'      => $this->input->post('receiver_address'),
            'category'              => $this->input->post('category'),
            'length'                => $this->input->post('length'),
            'width'                 => $this->input->post('width'),
            'height'                => $this->input->post('height'),
            'service'               => $this->input->post('service'),
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s')
        ];

        if ($this->Shipment_model->insert_shipment($data)) {
            $this->session->set_flashdata('success', 'Data pengiriman berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menyimpan data.');
        }

        redirect('app/shipment/');
    }

    // Memproses aksi dari form (edit atau delete)
    public function process_action()
    {
        // Mengambil ID yang di-checklist dari form
        $shipment_ids = $this->input->post('shipment_ids');

        // Jika tombol "Delete Shipment" yang diklik
        if ($this->input->post('delete_action')) {
            if (empty($shipment_ids)) {
                $this->session->set_flashdata('error', 'Pilih minimal satu data untuk dihapus.');
            } else {
                $deleted_rows = $this->Shipment_model->delete_shipments_by_ids($shipment_ids);
                $this->session->set_flashdata('success', $deleted_rows . ' data berhasil dihapus.');
            }
        }
        // Jika tombol "Edit Shipment" yang diklik
        else if ($this->input->post('edit_action')) {
            if (empty($shipment_ids)) {
                $this->session->set_flashdata('error', 'Pilih satu data untuk diedit.');
            } else if (count($shipment_ids) > 1) {
                $this->session->set_flashdata('error', 'Hanya bisa mengedit satu data dalam satu waktu.');
            } else {
                // Jika valid (tepat 1 data), redirect ke halaman edit
                $edit_id = $shipment_ids[0];
                redirect('app/shipment/edit/' . $edit_id);
                return; // Hentikan eksekusi agar tidak redirect ke index
            }
        }

        redirect('app/shipment');
    }

    // Halaman untuk menampilkan form edit (contoh)
    public function edit($id)
    {
        $data['shipment'] = $this->Shipment_model->get_shipment_by_id($id);
        if (empty($data['shipment'])) {
            show_404();
        }
        // Tampilkan view form edit, misalnya 'edit_shipment_view'
        // $this->load->view('edit_shipment_view', $data); 
        echo "<h1>Halaman Edit untuk ID: " . $id . "</h1>";
        echo "<pre>";
        print_r($data['shipment']);
        echo "</pre>";
        echo '<a href="' . base_url('app/shipment') . '">Kembali</a>';
    }
}
