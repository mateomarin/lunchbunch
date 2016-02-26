<?php
class Ride extends CI_Model {
     function get_all_rides()
     {
         return $this->db->query("SELECT * FROM Rides")->result_array();
     }
     function get_ride_by_day()
     {
         return $this->db->query("SELECT users.id as user_id, users.first_name, users.last_name, rides.destination_name, rides.departure_time, rides.duration, rides.accepts_order, rides.id as ride_id FROM rides
                                  JOIN user_has_rides ON user_has_rides.ride_id = rides.id
                                  JOIN users ON user_has_rides.user_id = users.id
                                  WHERE rides.created_at = DATE(DATE(NOW())+1) AND user_has_rides.driver = 1
                                  ORDER BY rides.updated_at desc")->result_array();
     }
     function get_ride_by_id($ride_id)
     {
         return $this->db->query("SELECT * FROM Rides WHERE id = ?", array($ride_id))->row_array();
     }
     function get_user_rides($user_id) {
        $query = "SELECT rides.id from users
                  JOIN user_has_rides ON users.id = user_has_rides.user_id
                  JOIN rides ON user_has_rides.ride_id = rides.id
                  WHERE user_has_rides.driver = 0 AND rides.created_at = DATE(DATE(NOW())+1) AND users.id = ?";
        $values = array($user_id);
        return $this->db->query($query, $values)->result_array();
     }
     function get_all_by_day() {
        $query = "SELECT * FROM users
                  JOIN user_has_rides ON users.id = user_has_rides.user_id
                  JOIN rides ON user_has_rides.ride_id = rides.id
                  WHERE rides.created_at = DATE(DATE(NOW())+1)";
        return $this->db->query($query)->result_array();
     }
     function add_ride($ride)
     {
         $query = "INSERT INTO Rides (destination_name, destination_lat, destination_lng, origin_lat, origin_lng, seats_avail, departure_time, created_at, updated_at, duration, accepts_order) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
         $values = array($ride['destination_name'], $ride['destination_lat'], $ride['destination_lng'], $ride['origin_lat'], $ride['origin_lng'],$ride['seats_avail'], $ride['departure_time'], date("Y-m-d"), date("Y-m-d, H:i:s"), $ride['duration'], $ride['accepts_order']);
         $this->db->query($query, $values);
         $insert_id = $this->db->insert_id();
         return $insert_id;
     }

     function unjoin_ride($ride_id, $user_id) {
        $query = "DELETE FROM user_has_rides WHERE ride_id = ? AND user_id = ?";
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
