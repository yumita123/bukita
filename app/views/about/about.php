<?php
class Home extends Controller {
public function index()
{




$data['title'] = 'Halaman AboutMe';
$data['nama'] = 'yumita';
$data['alamat'] = 'pango raya';
$data['no_hp'] = '082291665806';



$this->view('templates/header', $data);
$this->view('templates/sidebar', $data);
$this->view('about/index', $data);
$this->view('templates/footer');

     }
     public function__construct(){
          if($_SESSION['session_login'] != 'sudah_login'){
               Flasher::setMessage('Login','Tidak ditemukan.','danger');
               header('location: '. base_ur1 . '/login');
               exit;
          }
     }
 }