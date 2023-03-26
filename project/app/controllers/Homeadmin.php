<?php

class Homeadmin extends Controller {
    public function index()
    {
        $data['title'] = 'Home';
        $data['nama'] = $this->model('User_Model')->getUser();
        $this->view('template/header', $data);
        $this->view('homeadmin/index', $data);
        $this->view('template/footer');
    }
}