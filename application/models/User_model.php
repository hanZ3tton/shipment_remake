<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $table = 'users';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($username, $password)
    {
        $this->db->where('user_name', $username);
        $query = $this->db->get($this->table);

        if ($query->num_rows() == 1) {
            $user = $query->row();
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }

    public function get_user_by_id($id)
    {
        $query = $this->db->get_where($this->table, array('id' => $id));
        return $query->row();
    }

    public function update_user($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function get_all_users_except($id)
    {
        $this->db->where('id !=', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function create_user($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function delete_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}
