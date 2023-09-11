<?php
class Employ extends CI_Controller{

    public function student(){
        $this->load->model('Users');
        $out['get'] = $this->Users->dbData();
        $this->load->view('practice' , $out);
    }
    public function Data(){
        $this->load->model('Users');
       $out['db'] = $this->Users->studentData();
       $this->load->view('student' , $out);
    }
}
