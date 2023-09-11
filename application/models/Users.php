<?php
class Users extends CI_model{
    public function getData(){
        return[
            ['Acc. no.'=>'89' , 'firstName'=>'test1' ],
            ['Acc. no.'=>'90' , 'firstName'=>'test2' ],
            ['Acc. no.'=>'91' , 'firstName'=>'test3' ],
        ];
    }
    public function dbData(){
        $this->load->Database();
        $d = $this->db->get('lists');
        return $d->result_array();

    }
    public function studentData(){
        $this->load->database();
       $b = $this->db->get('student_data');
       return $b->result_array();
    }
}
?>