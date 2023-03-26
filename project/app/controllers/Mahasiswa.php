<?php

class Mahasiswa extends Controller {
    public function index()
    {
        $data['title'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_Model')->getAllMhs();
        $this->view('template/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('template/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail';
        $data['mhs'] = $this->model('Mahasiswa_Model')->getMhsById($id);
        $this->view('template/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('template/footer');
    }
    public function tambah()
    {
        // var_dump($_POST);
        if( $this->model('Mahasiswa_Model')->tambahDataMhs($_POST) > 0 ){
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            // header('Location: localhost/phpMVC/public/mahasiswa');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            // header('Location: localhost/phpMVC/public/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        // var_dump($_POST);
        if( $this->model('Mahasiswa_Model')->hapusDataMhs($id) > 0 ){
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function ubah()
    {
        // var_dump($_POST);
        if( $this->model('Mahasiswa_Model')->ubahMhsData($_POST) > 0 ){
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            // header('Location: localhost/phpMVC/public/mahasiswa');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            // header('Location: localhost/phpMVC/public/mahasiswa');
            exit;
        }
    }
}