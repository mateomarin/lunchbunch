<?php
  if(!defined('BASEPATH')) exit('No direct script access allowed');

  class Takeouts extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('Takeout');
      $this->load->model('Ride');

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

      $takeouts_ordered = $this->Takeout->get_takeouts_by_user_id($user_id);
      $takeouts_received = $this->Takeout->get_takeouts_received_by_user($user_id);
      $takeouts = array('takeouts_ordered'=>$takeouts_ordered,'takeouts_received'=>$takeouts_received);

      $this->load->view('takeouts_page', $takeouts);
    }
    public function driver_accepts($takeout_id){
      $this->Takeout->driver_accepts($takeout_id);
      redirect('/Takeouts/load_takeouts_page');
    }
    public function update_as_paid($takeout_id){
      $this->Takeout->update_as_paid($takeout_id);
      redirect('/Takeouts/load_takeouts_page');
    }
    public function update_final_price(){
      $post = $this->input->post();
      $price = $post['price'] + $post['takeout_fee'];
      $this->Takeout->driver_inputs_final_price($price, $post['takeout_id']);
      redirect('/Takeouts/load_takeouts_page');
    }
  }

?>
