<?php
class Car extends CI_Model {
     function get_all_cars()
     {
         return $this->db->query("SELECT * FROM Cars")->result_array();
     }
     function get_car_by_userid($user_id)
     {
         $query = "SELECT Cars.id as car_id, Cars.maker, Cars.seats, Cars.plate, Users.id
         FROM Users
         LEFT JOIN Cars
         ON Users.car_id=Cars.id
         WHERE Users.id=?";

         return $this->db->query($query, $user_id)->row_array();
     }
     function add_car($car)
     {
         $query = "INSERT INTO Cars (maker, seats, plate, created_at, updated_at) VALUES (?,?,?,?,?)";
         $values = array($car['maker'], $car['seats'], $car['plate'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
         return $this->db->query($query, $values);
     }
}
?>
