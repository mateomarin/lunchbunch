<?php
class Notification extends CI_Model {
     function get_all_notifications()
     {
         return $this->db->query("SELECT * FROM users_has_notifications")->result_array();
     }
     function get_notifications_by_user_id($user_id)
     {
          $query = "SELECT notifications.id as notif_id, takeouts.fee, takeouts.price, Notifications.notification, users_has_notifications.created_at, users_has_notifications.id, rides.destination_name, driver.first_name,
IF(TIMESTAMPDIFF(MONTH, users_has_notifications.created_at, NOW())!=0,concat(TIMESTAMPDIFF(MONTH, users_has_notifications.created_at, NOW()),' month(s) ago'),
IF(TIMESTAMPDIFF(WEEK, users_has_notifications.created_at, NOW())!=0,concat(TIMESTAMPDIFF(WEEK, users_has_notifications.created_at, NOW()),' week(s) ago'),
IF(TIMESTAMPDIFF(DAY, users_has_notifications.created_at, NOW())!=0,concat(TIMESTAMPDIFF(DAY, users_has_notifications.created_at, NOW()),' day(s) ago'),
IF(TIMESTAMPDIFF(HOUR, users_has_notifications.created_at, NOW())!=0,concat(TIMESTAMPDIFF(HOUR, users_has_notifications.created_at, NOW()),' hour(s) ago'),
IF(TIMESTAMPDIFF(MINUTE, users_has_notifications.created_at, NOW())!=0,concat(TIMESTAMPDIFF(MINUTE, users_has_notifications.created_at, NOW()),' minute(s) ago'),
concat(TIMESTAMPDIFF(SECOND, users_has_notifications.created_at, NOW()),' second(s) ago')))))) as diff
                    FROM users
                    JOIN users_has_notifications
                    ON users.id = users_has_notifications.user_id
                    JOIN notifications
                    ON users_has_notifications.notification_id = notifications.id
                    JOIN takeouts
                    ON users_has_notifications.takeout_id=takeouts.id
                    JOIN rides
                    ON takeouts.ride_id=rides.id
                    INNER JOIN users driver
                    ON rides.driver_id=driver.id
                    WHERE users.id=?
                    ORDER BY users_has_notifications.created_at DESC";
         return $this->db->query($query, $user_id)->result_array();
     }
     function add_notification($user_id, $takeout_id, $notification_id)
     {
         $query = "INSERT INTO users_has_notifications (user_id, takeout_id, notification_id, created_at) VALUES (?,?,?,NOW())";
         $values = array($user_id, $takeout_id, $notification_id);
         return $this->db->query($query, $values);
     }
     function delete_by_id($notification_id)
     {
          return $this->db->query("DELETE FROM users_has_notifications WHERE id=?",$notification_id);
     }
}
?>
