<?php

class Admin extends CI_Controller
{

  function __construct(){
    parent::__construct();
    $this->load->model('Admin_m');
   }

  public function main()
  {
    $data['subview'] = 'admin/admin';
    $data['users'] = $this->Admin_m->allUsers();

    $this->load->view('master_layout',$data);
  }

  public function add_member()
  {

    $this->form_validation->set_rules('role', 'Role', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]', array('is_unique' => 'هذا المستخدم موجود بالفعل من فضلك اختار اخر .'));


    if ($this->form_validation->run() === FALSE) {
      $data['roles'] = $this->Admin_m->allRoles();
      $data['error'] = validation_errors();
      $data['subview'] = 'admin/add_member';
      $this->load->view('master_layout',$data);
    }else {
      //Upload image
        $config['upload_path'] = './assets/dist/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3048';
        $config['max_width'] = '1200';
        $config['max_height'] = '1200';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()) {
          $errors = array('error'=>$this->upload->display_errors());
          $user_image = 'the.jpg';
        }else{
          $data = array('upload_data' => $this->upload->data());
          $user_image = $_FILES['userfile']['name'];
        }

      $password = md5($this->input->post('password'));

      $this->Admin_m->add_member($user_image, $password);

      redirect('Admin/main');
    }
  }

  public function allMember()
  {
    $data['subview'] = 'admin/all_member';
    $data['users'] = $this->Admin_m->allUsers();

    $this->load->view('master_layout',$data);
  }

  public function allMangers()
  {
    $data['subview'] = 'admin/all_mangers';
    $data['users'] = $this->Admin_m->allUsers();

    $this->load->view('master_layout',$data);
  }
}



 ?>
