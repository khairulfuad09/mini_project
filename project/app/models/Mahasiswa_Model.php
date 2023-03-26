<?php

class Mahasiswa_Model {

    private $table = 'mhs';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllMhs()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMhsById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMhs($data)
    {
        $query = "INSERT INTO mhs VALUES
        ('', :nama, :nim, :prodi)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('prodi', $data['prodi']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function hapusDataMhs($id)
    {
        $query = "DELETE FROM mhs WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahMhsData($data)
    {
        $query = "UPDATE mhs SET
            nama = :nama,
            nim = :nim,
            prodi = :prodi
            WHERE id = :id
        ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}