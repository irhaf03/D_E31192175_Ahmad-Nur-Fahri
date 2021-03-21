<?php 
class Kode extends CI_Controller {
    public function hello($var) {
        if(isset($var)){
            switch(strtolower($var)){
                case 'PHP':
                    $this->load->view('phpview');
                    break;
                case 'PYTHON':
                    $this->load->view('pythonview');
                    break;
                case 'CPP':
                    $this->load->view('cppview');
                    break;
                case 'JAVA':
                    $this->load->view('javaview');
                    break;
                default:
                    echo "input URI salah";
              }
    } else {
      echo 'Input URI salah';
    }
  }
}