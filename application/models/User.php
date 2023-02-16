<?php
defined("BASEPATH") or exit("berkas ini tidak dapat diakses secara langsung");

class User extends CI_Model {
    private $table = "user";

    public function __construct() {
        parent::__construct();
    }

    // CRUD
    // insert into user (username, password, nama, role) value(...)
	public function insert(array $data)
	{
        // query builder
        $attr = array(
            'username' => $data['username'],
            'password' => sha1($data['password']),
            'nama' => $data['nama'],
            'role' => $data['role']
        );
        $this->db->insert($this->table, $attr); // param (nama table, struktur data)

        return($this->db->affected_rows()>0)? true:false;
	}
    
    public function update(array $data)
    {
        if(isset($data['password']))$this->db->set('password', sha1($data['password']));
        if(isset($data['nama'])) $this->db->set('nama', $data['nama']);
        if(isset($data['role'])) $this->db->set('role', $data['role']);

        $this->db->where('username', $data['username']);
        //$this->db->update($this->$table);

        return($this->db-> affected_rows()>0)? true:false;
    }

    public function getAll()
    {
        return $this->db->get($this->table);
    }

    // blm slesai
    // public function getAll($username)
    // {
    //     $username;
    //     return $this->db->get($this->table);
    // }

    public function delete($username)
    {
        $this->db->where('username', $username);
        $this->db->delete($this);
    }
}