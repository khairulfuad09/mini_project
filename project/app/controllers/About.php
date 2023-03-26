<?php

class About extends Controller {
    public function index($nama="Khairul Fuad", $pekerjaan="Mahasiswa")
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['title'] = 'About';
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }
    public function page()
    {
        $data['title'] = 'pages';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}