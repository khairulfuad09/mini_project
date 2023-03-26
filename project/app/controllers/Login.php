<?php

class Login extends Controller {
    public function index()
    {
        $data['title'] = 'Login';
        // $data['nama'] = $this->model('User_Model')->getUser();
        $this->view('template/headerLogin', $data);
        $this->view('login/index', $data);
        $this->view('template/footer');
    }
    public function daftar()
    {
        $data['title'] = 'Daftar';
        // $data['nama'] = $this->model('User_Model')->getUser();
        $this->view('template/headerLogin', $data);
        $this->view('login/daftar', $data);
        $this->view('template/footer');
    }
    public function tambahData()
    {
        // var_dump($_POST);
        if($_POST['status'] == 'rental provider'){
            if( $this->model('Login_Model')->tambahDataPenyewa($_POST) > 0 ){
                Flasher::setFlash('Berhasil', 'daftar', 'success');
                header('Location: ' . BASEURL . '/login');
                exit;
            }else{
                Flasher::setFlash('Gagal', 'daftar', 'danger');
                header('Location: ' . BASEURL . '/login');
                exit;
            }
        }else if($_POST['status'] == 'Customer'){
            if( $this->model('Login_Model')->tambahDataCustomer($_POST) > 0 ){
                Flasher::setFlash('Berhasil', 'daftar', 'success');
                header('Location: ' . BASEURL . '/login');
                exit;
            }else{
                Flasher::setFlash('Gagal', 'daftar', 'danger');
                header('Location: ' . BASEURL . '/login');
                exit;
            }
        }

    }
    public function loginUser()
    {
        // var_dump($_POST);
        $data['title'] = 'Home';
        $user['user'] = $this->model('Login_Model')->getAllUserPenyewa();
        $cs['user'] = $this->model('Login_Model')->getAllUserCustomer();
        // var_dump($user['user']);
        foreach($cs['user'] as $cus){
        foreach($user['user'] as $usr){
            if($_POST['nik'] == $usr['nik'] && $_POST['password'] == $usr['password']){
                    Flasher::setFlash('Berhasil', 'Login', 'success');
                    // header('Location: ' . BASEURL . '/home');
                    $data['nik'] = $_POST['nik'];
                    $this->view('template/headerP', $data);
                    $this->view('home/index', $usr);
                    $this->view('template/footer');
                    exit;
            }else if($_POST['nik'] == $cus['nik'] && $_POST['password'] == $cus['password']){
                    Flasher::setFlash('Berhasil', 'Login', 'success');
                    // header('Location: ' . BASEURL . '/home');
                    $data['nik'] = $_POST['nik'];
                    $this->view('template/headerC', $data);
                    $this->view('homecustomer/index', $usr);
                    $this->view('template/footer');
                    exit;
                }
            else if($_POST['nik'] == 'admin' && $_POST['password'] == '999'){
                Flasher::setFlash('Berhasil', 'Login', 'success');
                    // header('Location: ' . BASEURL . '/home');
                    $this->view('template/header', $data);
                    $this->view('homecustomer/index', $data);
                    $this->view('template/footer');
                    exit;
            }
        }}Flasher::setFlash('Gagal', 'Login', 'danger');
        header('Location: ' . BASEURL . '/login');
        exit;
    }
}