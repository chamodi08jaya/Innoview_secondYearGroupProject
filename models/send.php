<?php

class send extends CI_Model{

public function resend(){
$data = array(
// 'notification_id'=> $this->input->post('notification_id'),
'date'=> $this->input->post('date'),
'message'=> $this->input->post('message')
);

// echo $data1['notification_id'];
$this->db->insert('notification',$data);

}
}
?>
