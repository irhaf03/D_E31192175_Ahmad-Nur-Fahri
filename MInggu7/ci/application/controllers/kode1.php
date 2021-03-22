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
      public function _remap($var){
        if (isset($var)){
            switch (strtolower($var)){
                case 'phyton':
                    $this->hello_python();
                    break;
                case 'cpp':
                    $this->hello_cpp();
                    break;
                case 'java':
                    $this->hello_java();
                    break;
                default:
                $this->index();
            }
        }else{
            $this->index();
        }
    }
}
 