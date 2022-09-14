<?php
class Komli extends Controller
{
    public function index()
    {
        $data['judul'] = "Home";
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('komli/index');
        $this->view('templates/footer');
    }
}