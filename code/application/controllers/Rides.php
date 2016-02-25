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
      $ride['departure_time']=date("h:i:s",strtotime($ride['departure_time']));
      if($ride['accepts_order']=='on'){
        $ride['accepts_order']=1;
      } else {
        $ride['accepts_order']= 0;
      }
      $this->Ride->add_ride($ride);
      redirect('/Users/success');
    }

    public function load_ride_detail($ride_id)
    {
        $this->Ride->get_ride_by_day()->$result_array;
        $this->load->view('ridedetail',$result_array);
    }
  }

?>
