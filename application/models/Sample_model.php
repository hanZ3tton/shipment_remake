<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sample_model extends CI_Model
{

    protected $table = 'users';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id)->update($this->table, $data);
    }

    public function delete_multiple($ids)
    {
        $this->db->where_in('id', $ids)->delete($this->table);
    }
}
