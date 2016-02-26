<?php
  if(!defined('BASEPATH')) exit('No direct script access allowed');

  class Notifications extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('Notification');
      $this->load->model('Takeout');
      $this->load->model('User');
    }
    public function notifications_page(){
      $user_id = $this->session->userdata('id');
      $data['notifications'] = $this->Notification->get_notifications_by_user_id($user_id);
      $this->User->update_old_notification_number($user_id);
      $data['user'] = $this->User->get_user_by_id($user_id);
      $this->load->view('notifications', $data);
    }
    public function notify_driver_accepts($takeout_id){
      $takeout = $this->Takeout->get_takeout_by_id($takeout_id);
      $this->Notification->add_notification($takeout['user_id'], $takeout['id'], 2);
      redirect('/Takeout/load_takeouts_page');
    }
    public function delete($notification_id){
      $this->Notification->delete_by_id($notification_id);
      redirect('/Notifications/notifications_page');
    }
  }

?>
