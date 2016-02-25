<?php
class Notification extends CI_Model {
     function get_all_notifications()
     {
         return $this->db->query("SELECT * FROM users_has_notifications")->result_array();
     }
     function get_notifications_by_user_id($user_id)
     {
          $query = "SELECT Notifications.notification, users_has_notifications.created_at
                    FROM users
                    JOIN users_has_notifications
                    ON users.id = users_has_notifications.user_id
                    JOIN notifications
                    ON users_has_notifications.notification_id = notifications.id
                    WHERE users.id=?";
         return $this->db->query($query, $user_id)->result_array();
     }
     function add_ride_notification($user_id, $notification_id, $ride_id)
     {
         $query = "INSERT INTO users_has_notifications (user_id, takeout_id, notification_id, created_at, ride_id) VALUES (?,1,?,?,?)";
         $values = array($user_id, $notification_id, date("Y-m-d, H:i:s"), $ride_id);
         return $this->db->query($query, $values);
     }
}
?>
