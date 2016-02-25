<?php
class Ride extends CI_Model {
     function get_all_rides()
     {
         return $this->db->query("SELECT * FROM Rides")->result_array();
     }
     function get_ride_by_day()
     {
         return $this->db->query("SELECT * FROM Rides WHERE created_at = DATE(NOW())")->result_array();
     }
     function get_ride_by_id($ride_id)
     {
         return $this->db->query("SELECT * FROM Rides WHERE id = ?", array($ride_id))->row_array();
     }
     function add_ride($ride)
     {
         $query = "INSERT INTO Rides (destination_name, destination_lat, destination_lng, origin_lat, origin_lng, seats_avail, departure_time, created_at, updated_at, duration, accepts_order) VALUES (?,?,?,?,?,?,?,?,?)";
         $values = array($ride['destination_name'], $ride['destination_lat'], $ride['destination_lng'], $ride['origin_lat'], $ride['origin_lng'],$ride['seats_avail'], $ride['departure_time'], date("Y-m-d"), date("Y-m-d, H:i:s"), $ride['duration'], $ride['accepts_order']);
         return $this->db->query($query, $values);
     }
}
?>
