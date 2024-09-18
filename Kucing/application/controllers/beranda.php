<?php 

	class Beranda extends CI_Controller
{
    public function index()
    {   
        $data["judul"] ='Halaman Utama';
        $this->load->view('template/header');
        $this->load->view('beranda/index',$data);
        $this->load->view('template/footer');
    }
}
 ?>