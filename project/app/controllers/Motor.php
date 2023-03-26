<?php

class Motor extends Controller {
    public function penyewa($nik)
    {
        // protected $nik= $nik;
        $pnw['penyewa'] = $this->model('Penyewa_Model')->getMotorById($nik);
        if(!empty($pnw['penyewa'])){
            $data['title'] = 'Daftar Motor';
            $data['nik'] = $nik;
            // var_dump($pnw);
            $this->view('template/headerP', $data);
            $this->view('motor/penyewa', $pnw);
            $this->view('template/footer');
        }else{
            $data['title'] = 'Daftar Motor';
            $data['nik'] = $nik;
            $pnw['penyewa'][0]['nik'] = $nik;
            // var_dump($pnw);
            $this->view('template/headerP', $data);
            $this->view('motor/penyewa', $pnw);
            $this->view('template/footer');
        }
    }
    public function tambah($nik)
    {
        // echo $nik;
        if( $this->model('Penyewa_Model')->tambahDataMotor($_POST) > 0 ){
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            $data['title'] = 'Daftar Motor';
            $data['nik'] = $nik;
            $pnw['penyewa'] = $this->model('Penyewa_Model')->getMotorById($nik);
            // var_dump($pnw);
            $this->view('template/headerP', $data);
            $this->view('motor/penyewa', $pnw);
            $this->view('template/footer');
            // header('Location: ' . BASEURL . '/motor/penyewa');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/motor/penyewa');
            exit;
        }
    }
    public function editmotor($nik, $id_motor)
    {
        $data['title'] = 'Detail Motor';
        $data['nik'] = $nik;
        $pnw['penyewa'] = $this->model('Penyewa_Model')->getMotorById2($id_motor);
        // var_dump($pnw);
        $this->view('template/headerP', $data);
        $this->view('motor/editmotor', $pnw);
        $this->view('template/footer');
    }
    public function ubah($nik)
    {
        // var_dump($_POST);
        if( $this->model('Penyewa_Model')->ubahDataMotor($_POST) > 0 ){
            $data['title'] = 'Daftar Motor';
            $data['nik'] = $nik;
            // var_dump($data);
            $pnw['penyewa'] = $this->model('Penyewa_Model')->getMotorById($nik);
            // $data['id_motor'] = $_POST['id_motor'];
            
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            $this->view('template/headerP', $data);
            $this->view('motor/penyewa', $pnw);
            $this->view('template/footer');
            // header('Location: ' . BASEURL . '/home/index/' . $data['nik']);
            // header('Location: localhost/phpMVC/public/mahasiswa');
            exit;
        }else{
            $data['nik'] = $_POST['nik'];
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/home/index/' . $data['nik']);
            // header('Location: localhost/phpMVC/public/mahasiswa');
            exit;
        }
    }
    public function customer($nik)
    {
        $data['title'] = 'Daftar Motor';
        $data['nik'] = $nik;
        $pnw['nik'] = $nik;
        $pnw['penyewa'] = $this->model('Penyewa_Model')->getMotorAllCustomer();
        // var_dump($pnw);
        $this->view('template/headerC', $data);
        $this->view('motor/customer', $pnw);
        $this->view('template/footer');
    }
    public function pesanmotor($nik, $id_motor)
    {
        $data['title'] = 'Pesan Motor';
        $data['nik'] = $nik;
        $pnw['nik'] =$nik;
        $pnw['penyewa'] = $this->model('Penyewa_Model')->getMotorById2($id_motor);
        // var_dump($pnw);
        $this->view('template/headerC', $data);
        $this->view('motor/pesanmotor', $pnw);
        $this->view('template/footer');
    }
    public function pesan($nik)
    {
        if( $this->model('Penyewa_Model')->tambahPesanMotor($_POST) > 0 ){
            Flasher::setFlash('Berhasil', 'membuat pesanan', 'success');
            $data['title'] = 'Home Customer';
            $data['nik'] = $nik;
            $pnw['penyewa'] = $this->model('Penyewa_Model')->getMotorById($nik);
            var_dump($data);
            $this->view('template/headerC', $data);
            $this->view('homecustomer/index', $pnw);
            $this->view('template/footer');
            // header('Location: ' . BASEURL . '/motor/penyewa');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/motor/customer');
            exit;
        }
    }
}