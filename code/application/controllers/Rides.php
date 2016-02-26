<?php
  if(!defined('BASEPATH')) exit('No direct script access allowed');

  class Rides extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('Ride');
      $this->load->model('Notification');
    }
    public function add_new_ride_page(){
      $this->load->view('addride');
    }

    public function add_new_ride($user_id){
      $ride=$this->input->post();
      $ride['departure_time']=date("Y-m-d, h:i:s",strtotime($ride['departure_time']));

      if($ride['accepts_order']=='on'){
        $ride['accepts_order']=1;
      } else {
        $ride['accepts_order']= 0;
      }
      $ride_id0 = $this->Ride->add_ride($ride, $user_id);
      $ride_id = strval($ride_id0);
      $this->Ride->add_user_ride_rel($user_id, $ride_id, 1);
      redirect('/Users/success');
    }

    public function unjoin_ride($ride_id) {
      $user_id = $this->session->userdata('id');
      $this->Ride->unjoin_ride($ride_id, $user_id);
      $this->Ride->add_seats($ride_id);
      redirect('/success');
    }

    public function load_ride_detail($ride_id)
    {
        $rides['rides'] = $this->Ride->get_ride_by_id($ride_id);
        $this->load->view('ridedetail', $rides);
    }

    public function join_ride($ride_id)
    {
      $user_id = $this->session->userdata('id');
      $user_type = 0;
      $this->Ride->add_user_ride_rel($user_id, $ride_id, $user_type);
      $this->Ride->update_seats($ride_id);
      redirect('/success');
    }
  }

?>
