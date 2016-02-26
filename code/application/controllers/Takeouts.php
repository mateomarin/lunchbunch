<?php
  if(!defined('BASEPATH')) exit('No direct script access allowed');

  class Takeouts extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('User');
      $this->load->model('Takeout');
      $this->load->model('Ride');
      $this->load->model('Notification');

    }
    public function add_takeout(){
      $user_id = $this->session->userdata('id');
      $takeout = $this->input->post();
      $this->Takeout->add_takeout($takeout, $user_id);
      redirect('/Takeouts/load_takeouts/'.$takeout['ride_id']);
    }
    public function add_takeout_form($ride_id)
    {
      $ride = array('ride'=>$this->Ride->get_ride_by_id($ride_id));
      $this->load->view('takeout_form', $ride);
    }
    public function load_takeouts_by_ride_id($ride_id)
    {
      $takeouts = array('takeouts'=>$this->Takeout->get_takeouts_by_ride_id($ride_id));
      $this->load->view('takeouts_page', $takeouts);
    }
    public function load_takeouts_page()
    {
      $user_id = $this->session->userdata('id');
      $data['user'] = $this->User->get_user_by_id($user_id);
      $data['takeouts_ordered'] = $this->Takeout->get_takeouts_by_user_id($user_id);
      $data['takeouts_received'] = $this->Takeout->get_takeouts_received_by_user($user_id);

      $this->load->view('takeouts_page', $data);
    }
    public function driver_accepts($takeout_id){
      $takeout = $this->Takeout->get_takeout_by_id($takeout_id);
      $this->Takeout->driver_accepts($takeout_id);
      $this->Notification->add_notification($takeout['user_id'], $takeout['id'], 2);
      $this->User->new_notification_number($this->session->userdata('id'));
      redirect('/Takeouts/load_takeouts_page');
    }
    public function update_as_paid($takeout_id){
      $takeout = $this->Takeout->get_takeout_by_id($takeout_id);
      $this->Takeout->update_as_paid($takeout_id);
      $this->Notification->add_notification($takeout['user_id'], $takeout['id'], 3);
      $this->User->new_notification_number($takeout['user_id']);
      //notification to user that driver received his payment
      redirect('/Takeouts/load_takeouts_page');
    }
    public function remind($takeout_id){
      $takeout = $this->Takeout->get_takeout_by_id($takeout_id);
      $this->Notification->add_notification($takeout['user_id'], $takeout['id'], 5);
      $this->User->new_notification_number($takeout['user_id']);
      $this->session->set_flashdata('reminder',$takeout_id);
      //notification to user that driver received his payment
      redirect('/Takeouts/load_takeouts_page');
    }
    public function update_final_price(){
      $post = $this->input->post();
      $takeout = $this->Takeout->get_takeout_by_id($post['takeout_id']);
      $price = $post['price'] + $post['takeout_fee'];
      $this->Takeout->driver_inputs_final_price($price, $post['takeout_id']);
      $this->Notification->add_notification($takeout['user_id'], $takeout['id'], 4);
      $this->User->new_notification_number($this->session->userdata('id'));
      //notification to user that driver put in the final price
      redirect('/Takeouts/load_takeouts_page');
    }
  }

?>
