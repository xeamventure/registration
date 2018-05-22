<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login extends CI_Controller
{
    public function signin()
    {
        $this->load->view('auth/signin');
    }

    public function validatelogin()
    {
        $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");

        if ($this->form_validation->run('login')) {
            $this->load->model('LoginModel');
            $login_details =$this->LoginModel->validate_login($this->input->post('uname'), $this->input->post('upass'));
            if ($login_details == false) {

                $this->session->set_flashdata('message','Invalid User Id/Password');
                $this->session->set_flashdata('class','alert alert-danger');
                return redirect('login/signin');
            } else {
                $this->load->library('session');
                $this->session->set_userdata('user_id', $login_details->Id);
                $this->session->set_userdata('user_name', $login_details->FirstName);
                //$this->session->set_userdata('user_roll', $login_details->roll);
                return redirect('user/basicdetails');
            }
        } else {
            $this->load->view('auth/signin');
        }
    }

    public function NewRegistration()
    {
        $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        $dbResponse = array('message'=>'','class'=>'');

        if ($this->input->server('REQUEST_METHOD')=="POST") {
            if ($this->form_validation->run('CitizenRegistration')) {
              $this->load->model('LoginModel','login');
              $post=$this->input->post();
              unset($post['ConfirmPassword']);
              if($this->login->new_regisration($post))
              {
                  $this->session->set_flashdata('message','Data inserted successfully.');
                  $this->session->set_flashdata('class','alert alert-success');
                  return redirect('login/signin');

              }else {

                $dbResponse["message"]="Insert fail to add, please try again.";
                $dbResponse["class"]="alert alert-danger";
              }

            } else {
                $dbResponse["message"]="Please fill all mandatory fields *";
                $dbResponse["class"]="alert alert-danger";
            }
        }

        $this->load->view('auth/newregistration', $dbResponse);
    }

    public function logout(){
      $this->session->unset_userdata('user_id');
      return redirect('login/signin');
    }
}
