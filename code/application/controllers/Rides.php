<?php
  if(!defined('BASEPATH')) exit('No direct script access allowed');

  class Rides extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('Ride');
    }
    public function add_new_ride_page(){
      $this->load->view('addride');
    }

    public function add_new_ride(){
      $ride=$this->input->post();
      $this->Ride->add_ride($ride);
    }

    public function load_ride_detail($ride_id)
    {
        $single_ride = $this->Ride->get_ride_by_id($ride_id);
        $this->load->view('ridedetail',$single_ride);
    }
  }

?>
