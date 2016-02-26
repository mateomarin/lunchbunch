<?php
class User extends CI_Model {
     function get_all_users()
     {
         return $this->db->query("SELECT * FROM Users")->result_array();
     }
     function get_user_by_email($user_email)
     {
         return $this->db->query("SELECT * FROM Users WHERE email = ?", array($user_email))->row_array();
     }
     function get_user_by_id($user_id)
     {
         return $this->db->query("SELECT * FROM Users WHERE id = ?", array($user_id))->row_array();
     }
     function add_user($user)
     {
        date_default_timezone_set('America/Los_Angeles');
        $query = "INSERT INTO Users (first_name, last_name, email, password, created_at, updated_at) VALUES (?,?,?,?,?,?)";
        $values = array($user['first_name'], $user['last_name'], $user['email'], $user['password'], date('Y-m-d, H:i:s'), date('Y-m-d, H:i:s'));
        return $this->db->query($query, $values);
     }
}
?>
