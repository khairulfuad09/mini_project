<?php

class Profil extends Controller {
    public function penyewa($nik)
    {
        $data['title'] = 'Profil';
        $data['nik'] = $nik;
        $pnw['penyewa'] = $this->model('Penyewa_Model')->getSewaById($nik);
        // var_dump($pnw);
        $this->view('template/headerP', $data);
        $this->view('profil/penyewa', $pnw);
        $this->view('template/footer');
    }
    public function customer($nik)
    {
        $data['title'] = 'Profil';
        $data['nik'] = $nik;
        $pnw['penyewa'] = $this->model('Penyewa_Model')->getCustomerById($nik);
        // var_dump($pnw);
        $this->view('template/headerC', $data);
        $this->view('profil/customer', $pnw);
        $this->view('template/footer');
    }
}