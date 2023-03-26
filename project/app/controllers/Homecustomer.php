<?php

class Homecustomer extends Controller {
    public function index($nik)
    {
        $data['title'] = 'Home';
        $data['nik'] = $nik;
        // $data['nama_pemilik'] = $this->model('User_Model')->getUser();
        $this->view('template/headerC', $data);
        $this->view('homecustomer/index', $data);
        $this->view('template/footer');
    }
    public function ubah($nik)
    {
        // var_dump($_POST);
        if( $this->model('Penyewa_Model')->ubahCustomerData($_POST) > 0 ){
            $data['nik'] = $_POST['nik'];
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            $this->view('template/headerC', $data);
            $this->view('homecustomer/index');
            $this->view('template/footer');
            // header('Location: ' . BASEURL . '/home/index/' . $data['nik']);
            // header('Location: localhost/phpMVC/public/mahasiswa');
            exit;
        }else{
            $data['nik'] = $_POST['nik'];
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/homecustomer/index/' . $data['nik']);
            // header('Location: localhost/phpMVC/public/mahasiswa');
            exit;
        }
    }
}