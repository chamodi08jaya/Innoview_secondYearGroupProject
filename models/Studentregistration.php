<?php

class Studentregistration extends CI_Model{

public function registeruser(){
$data1 = array(
'user_id'=> $this->input->post('student_id'),
'user_type'=> $this->input->post('user_type'),
'user_name'=> $this->input->post('user_name'),
'password'=> $this->input->post('password'),
);
$this->db->insert('users',$data1);
$data2 = array(
'name'=> $this->input->post('pname'),
'studentid_fk'=> $this->input->post('student_id'),
'contact_no'=> $this->input->post('pnum'),
);
$this->db->insert('student_parent',$data2);

$data3 = array(
'studentid_fk'=> $this->input->post('student_id'),
'courseid_fk'=> $this->input->post('sub1'),
);
$this->db->insert('student_learn',$data3);


$t = sub2;

if ($t != 'pick1') {
	'studentid_fk'=> $this->input->post('student_id'),
	'courseid_fk'=> $this->input->post('sub2'),
);

}

$data4 = array(

// if(sub2!='NULL')
$this->db->insert('student_learn',$data4);

$data5 = array(
'studentid_fk'=> $this->input->post('student_id'),
'courseid_fk'=> $this->input->post('sub3'),
);
// if(sub3!='NULL')
$this->db->insert('student_learn',$data5);

$data6 = array(
'studentid_fk'=> $this->input->post('student_id'),
'courseid_fk'=> $this->input->post('sub4'),
);
// if(sub4!='NULL')
$this->db->insert('student_learn',$data6);

$data = array(
'student_id'=> $this->input->post('student_id'),
'first_name'=> $this->input->post('first_name'),
'last_name'=> $this->input->post('last_name'),

'contact_no'=> $this->input->post('contact_number'),
'address'=> $this->input->post('address'),
'date_of_birth'=> $this->input->post('dob'),
'email_address'=> $this->input->post('email'),
);
return $this->db->insert('student',$data); }
}?>
