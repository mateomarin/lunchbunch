<?php
  if(!defined('BASEPATH')) exit('No direct script access allowed');

  class Notifications extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('Notification');
    }
    public function notifications_page(){
      $user_id = $this->session->userdata('id');
      $notifications = array('notifications'=>$this->Notification->get_notifications_by_user_id($user_id));
      $this->load->view('notifications', $notifications);
    }
  }

?>
