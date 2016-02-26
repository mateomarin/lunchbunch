<?php
class Takeout extends CI_Model {

     function get_takeouts_by_user_id($user_id)
     {
         return $this->db->query("SELECT * FROM takeouts WHERE user_id = ?", array($user_id))->result_array();
     }
     function get_takeouts_received_by_user($user_id)
     {
          $query = "SELECT takeouts.id, takeouts.description, takeouts.driver_accepts, takeouts.payment_stat FROM takeouts
               JOIN rides ON takeouts.ride_id=rides.id
               WHERE rides.driver_id=?";
         return $this->db->query($query, array($user_id))->result_array();
     }
     function get_takeouts_by_ride_id($ride_id)
     {
          $query = "SELECT * FROM takeouts WHERE ride_id=? AND driver_accepts=1";
          return $this->db->query($query,$ride_id)->result_array();
     }
     function add_takeout($takeout, $user_id)
     {
         $query = "INSERT INTO takeouts (description, fee, ride_id, user_id, created_at, driver_accepts, payment_stat) VALUES (?,?,?,?,?,?,?)";
         $values = array($takeout['description'], $takeout['takeout_fee'], $takeout['ride_id'], $user_id, date("Y-m-d, H:i:s"),0,0);
         return $this->db->query($query, $values);
     }
     function driver_accepts($takeout_id)
     {
          $query = "UPDATE takeouts SET driver_accepts=1 WHERE id=?";
          return $this->db->query($query,$takeout_id);
     }
     function driver_inputs_final_price($final_price, $takeout_id)
     {
          $query = "UPDATE takeouts SET price=? WHERE id=?";
          $data = array($final_price, $takeout_id);
          return $this->db->query($query,$data);
     }
     function update_as_paid($takeout_id)
     {
          $query = "UPDATE takeouts SET payment_stat=1 WHERE id=?";
          return $this->db->query($query,$takeout_id);
     }
}
?>
