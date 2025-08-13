<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'profile');
    }

    // Read data
    public function index()
    {
        $data['title'] = 'Profile';
        $data['users'] = $this->profile->get_all(); // ✅ pakai alias
        $user_id = $this->session->userdata('user_id');
        $data['user'] = $this->profile->get_by_id($user_id); // ✅ pakai alias
        $data['content'] = 'app/user/index';
        $data['style'] = 'app/user/index_style';
        $data['script'] = 'app/user/index_script';
        $this->load->view('app', $data);
    }

    // Create data
    public function create()
    {
        $data = [
            'user_name'     => $this->input->post('user_name'),
            'password'      => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
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

        $this->profile->insert($data);
        redirect('profile');
    }

    // Update data
    public function update($id)
    {
        $data = [
            'user_name'     => $this->input->post('user_name'),
            'full_name'     => $this->input->post('full_name'),
            'date_of_birth' => $this->input->post('date_of_birth'),
            'email'         => $this->input->post('email'),
            'phone_number'  => $this->input->post('phone_number'),
            'state'         => $this->input->post('state'),
            'city'          => $this->input->post('city'),
            'address'       => $this->input->post('address'),
            'updated_at'    => date('Y-m-d H:i:s')
        ];

        if (!empty($this->input->post('password'))) {
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        }

        $this->profile->update($id, $data);
        redirect('profile');
    }

    // Delete multiple data
    public function delete()
    {
        $ids = $this->input->post('ids');
        if (!empty($ids)) {
            foreach ($ids as $id) {
                $this->profile->delete($id);
            }
        }
        redirect('profile');
    }
}
