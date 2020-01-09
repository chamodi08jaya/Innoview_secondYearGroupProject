<?php

class Teacherregistration extends CI_Model{

public function registeruser(){
$data1 = array(
'user_id'=> $this->input->post('emp_no'),
'user_type'=> $this->input->post('user_type'),
'user_name'=> $this->input->post('user_name'),
'password'=> $this->input->post('password'),
);
$this->db->insert('users',$data1);

$data2 = array(
'teacherid_fk'=> $this->input->post('teacherid'),
'courseid_fk'=> $this->input->post('courseid'),
'hall_no'=> $this->input->post('hall_no'),
'numofstudents'=> $this->input->post('numof_students'),
);
$this->db->insert('teacher_teach',$data2);

$data3 = array(
'course_id'=> $this->input->post('courseid'),
'subject'=> $this->input->post('subject'),
'grade'=> $this->input->post('grade'),
'teacher_fk'=> $this->input->post('teacher'),
);
$this->db->insert('teacher_teach',$data3);

$data = array(
'emp_no'=> $this->input->post('teacher_id'),
'name'=> $this->input->post('name'),
'gender'=> $this->input->post('gender'),
'contact_no'=> $this->input->post('contact_number'),
'email'=> $this->input->post('email'),
);
return $this->db->insert('teacher',$data); }
}?>
