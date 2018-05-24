<?php
/**
 *
 */
class Users extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Member');
    $this->load->model('Admin_m');
  }

  public function user_view()
  {
    $data['subview'] = 'users/edit_profile';

    $this->load->view('master_layout',$data);
  }

  public function login()
  {
    $this->form_validation->set_rules('username', 'username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run() === FALSE){
      $this->load->view('users/login');
    } else {


        // Get username
        $username = $this->input->post('username');
        // Get and encrypt the password
        $password = md5($this->input->post('password'));

        // Login user_registered
        $userdata  = $this->Member->login($username, $password);


        if ($userdata) {

          $user_data = array(
            'user_id' => $userdata->user_id,
            'fname'  => $userdata->first_name,
            'lname'  => $userdata->last_name,
            'image'  => $userdata->img_name,
            'role_id' => $userdata->role_id,
            'username'  => $username,
            'logged_in' => true
          );

          $this->session->set_userdata($user_data);

            if($_SESSION['role_id'] == 2){
              redirect('Users/user_view');
            }else{
              redirect('Admin/main');
            }

        }else {
          $data['error'] = 'لقد ادخلت اسم مستخدم او كلمة مرور غير صالحة';

          $this->load->view('users/login', $data);
        }

      }
  }

  public function profile($id)
  {
      $data['user'] = $this->Admin_m->user_by_id($id);
      $data['subview'] = 'users/edit_profile';

      $this->load->view('master_layout', $data);
  }

  public function updateUser($id)
  {
    $this->form_validation->set_rules('pass', 'Password', 'required');

    if ($this->form_validation->run() === FALSE) {
      redirect('Users/profile/'.$id);
    }else {
      $password = md5($this->input->post('password'));
      $this->Member->updateUser($id, $password);

      redirect('Users/profile/'.$id);
    }
  }

  public function logout()
  {
    $_SESSION = [];
    redirect('Users/login');
  }
}



 ?>
