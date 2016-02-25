<?php
  if(!defined('BASEPATH')) exit('No direct script access allowed');

  class Rides extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->output->enable_profiler();
      $this->load->model('Ride');
    }
    public function add_new_ride_page(){
      $this->load->view('addride');
    }
    public function add_new_ride(){
      $ride=$this->input->post();
      $this->Ride->add_ride($ride);
      redirect('/Users/success');
    }
  }

?>
