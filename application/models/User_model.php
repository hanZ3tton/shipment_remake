<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
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
        $query = $this->db->get('user'); // Assuming your table is 'users'

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
        return $this->db->insert('user', $data);
    }
}
