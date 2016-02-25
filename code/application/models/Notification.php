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
     function add_notification($user_id, $takeout_id, $notification_id)
     {
         $query = "INSERT INTO users_has_notifications (user_id, takeout_id, notification_id) VALUES (?,?,?)";
         $values = array($user_id, $takeout_id, $notification_id);
         return $this->db->query($query, $values);
     }
}
?>
