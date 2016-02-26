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
         $query = "INSERT INTO Rides (destination_name, destination_lat, destination_lng, origin_lat, origin_lng, seats_avail, departure_time, created_at, updated_at, duration, accepts_order) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
         $values = array($ride['destination_name'], $ride['destination_lat'], $ride['destination_lng'], $ride['origin_lat'], $ride['origin_lng'],$ride['seats_avail'], $ride['departure_time'], date("Y-m-d"), date("Y-m-d, H:i:s"), $ride['duration'], $ride['accepts_order']);
         $this->db->query($query, $values);
         $insert_id = $this->db->insert_id();
         return $insert_id;
     }

     function add_user_ride_rel($user_id, $ride_id, $user_type) {
        $query = "INSERT INTO user_has_rides (user_id, ride_id, driver) VALUES (?, ?, ?)";
        $values = array($user_id, $ride_id, $user_type);
        return $this->db->query($query, $values);
     }

     function update_seats($ride_id) {
        $query = "UPDATE rides SET seats_avail = seats_avail - 1 WHERE id = ?";
        $values = array($ride_id);
        return $this->db->query($query, $values);
     }

}
?>
