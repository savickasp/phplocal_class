<?php

namespace userAction;

include 'database.php';

use database\Database;

class UserAction extends Database {

    public function select_user_all($param) {
        $sql = 'SELECT * FROM users';
        $ret = parent::select($sql, $param);
        return $ret;
    }

    public function insert_user_data($name, $email, $password) {
        if (empty($name) || empty($email) || empty($password)) {
            $ret = 'kazkuris is laukeliu yra tuscias';
        } else {
            $sql = "INSERT INTO users (user_name, user_email, user_password)
                    VALUES ('$name', '$email', '$password')";
            parent::insert($sql);
            $ret = 'user data inserted ';
        }

        return $ret;
    }

    public function update_user_field($update_what, $update_new, $update_if, $update_equal) {
        if (empty($update_new)) {
            $ret = 'Field is empty';
        } elseif (!is_string($update_new)) {
            $ret = 'Name must have text';
        } else {
            $sql = "UPDATE users 
                SET $update_what = '$update_new'
                WHERE $update_if = $update_equal";
            parent::update($sql);
            $ret = 'success';
        }
        return $ret;
    }

    public function remove_user($delete_if, $delete_equal) {
        $sql = "DELETE FROM users WHERE $delete_if = $delete_equal";
        parent::remove($sql);
    }

}
