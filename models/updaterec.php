
<?php

class updaterec extends CI_Model{

public function updaterecords(){
$data1 = array(

  
    'address'=> $this->input->post('address'),
    'contact_no'=> $this->input->post('contact_no'),
	
	

);


$this->db->where( 'emp_no',$_SESSION['user_id']);
$this->db->update('receptionist',$data1 );


$data2 = array(
    'user_name'=> $this->input->post('user_name'),
    'password'=> $this->input->post('password'),
	
  
  
    );
    $this->db->where( 'user_id',$_SESSION['user_id']);
    $this->db->update('users',$data2);

    


}
}
?>
