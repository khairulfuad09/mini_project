<?php

class Login_Model {
    private $table = 'pemilik';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahDataPenyewa($data)
    {
        $query = "INSERT INTO pemilik VALUES
        (:nik, :nama_pemilik, :jeniskelamin, :alamat, :password)";

        $this->db->query($query);
        $this->db->bind('nama_pemilik', $data['nama_pemilik']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('jeniskelamin', $data['jeniskelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function tambahDataCustomer($data)
    {
        $query = "INSERT INTO customer VALUES
        (:nik, :nama_pemilik, :jeniskelamin, :alamat, :password)";

        $this->db->query($query);
        $this->db->bind('nama_pemilik', $data['nama_pemilik']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('jeniskelamin', $data['jeniskelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function getAllUserPenyewa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getAllUserCustomer()
    {
        $this->db->query('SELECT * FROM customer');
        return $this->db->resultSet();
    }
}