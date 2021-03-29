<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahsiswa extends ci {
public function index(){
$data['nama'] = "Ahmad Nur Fahri";
$data['prodi'] = "MIF";
$this->load->view('view_mahasiswa',$data);
}
public function profil(){
echo "ini adalah method profil pada controller Mahasiswa";
}
}
?>