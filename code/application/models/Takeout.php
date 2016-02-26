<?php
class Takeout extends CI_Model {

     function get_takeouts_by_user_id($user_id)
     {
          $query = "SELECT takeouts.created_at, takeouts.description, takeouts.payment_stat, takeouts.driver_accepts, takeouts.price, users.first_name, rides.destination_name
          FROM takeouts
          JOIN rides ON takeouts.ride_id=rides.id
          JOIN users ON rides.driver_id=users.id
          WHERE takeouts.user_id=?";
         return $this->db->query($query, array($user_id))->result_array();
     }
     function get_takeouts_received_by_user($user_id)
     {
          $query = "SELECT takeouts.created_at as takeout_date, users.first_name, takeouts.id, takeouts.price, rides.takeout_fee, takeouts.description, takeouts.driver_accepts, takeouts.payment_stat, rides.id as ride_id, rides.destination_name, rides.created_at
                    FROM takeouts
                    JOIN rides ON takeouts.ride_id=rides.id
                    JOIN users ON users.id=takeouts.user_id
                    WHERE rides.driver_id=?";
         return $this->db->query($query, array($user_id))->result_array();
     }
     function get_takeouts_by_ride_id($ride_id)
     {
          $query = "SELECT * FROM takeouts JOIN users ON takeouts.user_id=users.id WHERE ride_id=?";
          return $this->db->query($query,$ride_id)->result_array();
     }
     function get_takeout_by_id($takeout_id)
     {
          return $this->db->query("SELECT * FROM takeouts WHERE id=?",$takeout_id)->row_array();
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
