<?php

class Member extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function login($username, $password)
  {
    // Validate
    $this->db->where('username', $username);
    $this->db->where('password', $password);

    $result = $this->db->get('users');

    if ($result->num_rows() == 1) {
      return $result->row();
    }
  }

  public function updateUser($id, $password)
  {
    $data = [
      'first_name' => $this->input->post('fname'),
      'last_name' => $this->input->post('lname'),
      'password' =>$password
    ];

    $this->db->where('user_id', $id);
    return $this->db->update('users', $data);
  }
}

 ?>
