<?php
class Ride extends CI_Model {
     function get_all_rides()
     {
         return $this->db->query("SELECT * FROM Rides")->result_array();
     }
     function get_ride_by_day($day)
     {
         return $this->db->query("SELECT * FROM Rides WHERE created_at = ?", $day)->row_array();
     }
     function get_ride_by_id($ride_id)
     {
         return $this->db->query("SELECT * FROM Rides WHERE id = ?", array($ride_id))->row_array();
     }
     function add_ride($ride)
     {
         $query = "INSERT INTO Rides (destination_name, destination_coord, seats_avail, departure_time, created_at, updated_at, duration_id, accepts_order_id) VALUES (?,?,?,?,?,?,?,?)";
         $values = array($ride['destination_name'], $ride['destination_coord'], $ride['seats_avail'], $ride['departure_time'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $ride['duration_id'], $ride['accepts_order_id']);
         return $this->db->query($query, $values);
     }
}
?>
