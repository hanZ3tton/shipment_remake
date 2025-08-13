<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $table = 'users'; // ganti jadi ini

    public function __construct()
    {
        parent::__construct();
        // Load database if not autoloaded
        $this->load->database();
    }

    /**
     * Login user by username and password
     * @param string $username
     * @param string $password
     * @return object|bool User object if found, FALSE otherwise
     */
    public function login($username, $password)
    {
        // Fetch user by username
        $this->db->where('user_name', $username);
        $query = $this->db->get('users'); // Assuming your table is 'users'

        if ($query->num_rows() == 1) {
            $user = $query->row();

            // Verify password (assuming password is hashed)
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }

    /**
     * Register a new user
     * @param array $data
     * @return bool
     */
    public function register($data)
    {
        return $this->db->insert('users', $data);
    }


    // Ambil semua data user
    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    // Ambil satu data user berdasarkan ID
    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    // Tambah data user
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Update data user
    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    // Hapus data user
    public function delete($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
