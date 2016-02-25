<?php
  if(!defined('BASEPATH')) exit('No direct script access allowed');

  class Users extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('User');
      $this->load->model('Ride');
    }
    //The index will load the main login page
    public function index(){
      if($this->session->userdata('logged_in')==FALSE){
        $array['errors'] = $this->session->userdata('errors');
        $this->load->view('index',$array);
      } else {
        redirect('Users/success');
      }
    }
    // This function is for a new registration
    public function new_user() {
      $this->load->view('registration');
    }

    // This function is for logging in 
    public function login_page() {
      $this->load->view('login');
    }

    //This function redirects to loadwall once it updates the user session ID
    public function success(){
      $rides['rides'] = $this->Ride->get_ride_by_day();
      $this->load->view('mainview', $rides);
    }

    // This function validates whether the password is valid and it matches the confirmation.
    public function validate_password(){
      $this->load->library("form_validation");
      $this->form_validation->set_rules('email', 'Email', 'valid_email|required');
      if($this->form_validation->run()==FALSE){
        $this->session->set_userdata('errors', validation_errors());
        redirect("/Users/index");
      } else {
        $logindata = $this->input->post();
        $user = $this->User->get_user_by_email($logindata['email']);
        if($user && $user['password']==md5($logindata['password'])){
          $this->session->set_userdata('id',$user['id']);
          redirect("/Users/success");
        } else {
          $this->session->set_userdata('errors', 'Incorrect Password');
          redirect("/Users/index");
        }
      }
    }
    // This function adds a new user to the DB, then redirects to Success to update the session ID.
    public function register(){
      $this->load->library("form_validation");
      $this->form_validation->set_rules('email', 'Email', 'valid_email|required|is_unique[users.email]');
      $this->form_validation->set_rules('first_name', 'First Name', 'required');
      $this->form_validation->set_rules('last_name', 'Last Name', 'required');
      $this->form_validation->set_rules('password', 'Password must be at least 8 characters', 'min_length[8]|matches[confirm_pass]|required');
      if($this->form_validation->run()==FALSE){
        $this->session->set_userdata('errors', validation_errors());
        redirect("/index");
      } else {
        $userdata = $this->input->post();
        $userdata['password'] = md5($userdata['password']);
        $timestamp = time();

        $this->User->add_user($userdata);
        $user = $this->User->get_user_by_email($userdata['email']);
        $this->session->set_userdata('id',$user['id']);
        redirect("/Users/success");
      }
    }
    //Logs off
    public function logout(){
      $this->session->unset_userdata('id');
      $this->session->sess_destroy();
      redirect("/index");
    }
    //Loads user profile
    // We haven't made any users yet so I am going to make this function not take any arguments for now
    // We will change it back once we start actively working with the database
    public function profile_view(){
      $this->load->view('profileview');
    }

  }

?>
