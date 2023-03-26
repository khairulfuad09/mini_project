<?php

class User_Model {
    private $nama_pemilik = 'Admin';

    public function getUser()
    {
        return $this->nama_pemilik;
    }
}