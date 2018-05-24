<?php

class Admin_m extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function allRoles()
  {
      $query = $this->db->get('roles');
      return $query->result();
  }

  public function allUsers()
  {
      $query = $this->db->get('users');
      return $query->result();
  }

  public function user_by_id($id)
  {
      $this->db->where('user_id', $id);
      $query = $this->db->get('users');
      return $query->row();
  }


  public function add_member($user_image, $password)
  {
    $data = [
        'first_name' => $this->input->post('fname'),
        'last_name' => $this->input->post('lname'),
        'role_id' => $this->input->post('role'),
        'username' => $this->input->post('username'),
        'password' => $password,
        'img_name' => $user_image
    ];

    return $this->db->insert('users', $data);
  }
}

 ?>
