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
    public function load_takeouts($ride_id)
    {
      $takeouts = array('takeouts'=>$this->Takeout->get_takeouts_by_ride_id($ride_id));
      $this->load->view('takeouts_page', $takeouts);
    }
  }

?>
