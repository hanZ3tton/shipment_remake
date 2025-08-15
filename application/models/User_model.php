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

    /**
     * Fungsi register user baru
     * @param array $data Data user yang akan disimpan
     * @return bool
     */
    public function register($data)
    {
        return $this->db->insert($this->table, $data);
    }

    /**
     * Fungsi login user
     * @param string $username
     * @param string $password
     * @return object|bool
     */
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

    /**
     * Mengecek apakah email sudah terdaftar
     * @param string $email
     * @return bool
     */
    public function is_email_exists($email)
    {
        $this->db->where('email', $email);
        return $this->db->count_all_results($this->table) > 0;
    }

    /**
     * Ambil data user berdasarkan ID
     */
    public function get_user_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    /**
     * Update data user berdasarkan ID
     */
    public function update_user($id, $data)
    {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    /**
     * Ambil semua user kecuali ID tertentu
     */
    public function get_all_users_except($id)
    {
        $this->db->where('id !=', $id);
        return $this->db->get($this->table)->result();
    }

    /**
     * Buat user baru (admin)
     */
    public function create_user($data)
    {
        return $this->db->insert($this->table, $data);
    }

    /**
     * Hapus user berdasarkan ID
     */
    public function delete_user($id)
    {
        return $this->db->where('id', $id)->delete($this->table);
    }
}
