<?php

class User {
    
}

include 'userAction.php';
use userAction\UserAction;

$db = new UserAction();

print $db->update_user_field('user_name', 'Daniela', 'user_id', 9);
//$db->insert_user_data('Kamile S', 'kamileS@gmail.com', 'taip');
$db->remove_user('user_id', 12);

$result = $db->select_user_all('User');
var_dump($result);

////___________________________________________________select
//$sql_select = 'SELECT * FROM users';
//$result = $db->select($sql_select, 'User');
//
//var_dump($result);
//___________________________________________________insert
//$name = 'Viktorija';
//$email = 'pastas@gmail.com';
//$password = 'sekme';
//$sql_insert = "INSERT INTO users (user_name, user_email, user_password)
//    VALUES ('$name', '$email', '$password')";
//$result = $db->insert($sql_insert);
//var_dump($result);
//___________________________________________________update
$update_table = $_POST['users'];
$update_what = 'user_name';
$update_new = 'Patricija';
$update_if = 'user_id';
$update_equal = 7;

$sql_update = "UPDATE $update_table 
    SET $update_what = '$update_new'
    WHERE $update_if = $update_equal";

var_dump($sql_update);

$db->update($sql_update);

$result = $db->select($sql_select, 'User');

var_dump($result);
//___________________________________________________update
$delete_table = 'users';
$delete_if = 'user_id';
$delete_equal = 8;
$sql_delete = "DELETE FROM $delete_table WHERE $delete_if = $delete_equal";

var_dump($sql_delete);

$db->remove($sql_delete);