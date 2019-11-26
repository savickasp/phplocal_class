<?php
include_once 'functions.php';

if (isset($_POST['submit'])) {
    setcookie('user[name]', $_POST['name'], time() + 10);
    setcookie('user[email]', $_POST['email'], time() + 10);
    setcookie('user[role]', $_POST['role'], time() + 10);
    header('location:index.php');
}

if (isset($_COOKIE['user']['name']) && isset($_COOKIE['user']['email'])){

    if (isset($_COOKIE['user']['role'])) {
        if ($_COOKIE['user']['role'] == 0) {
            print 'Team leader page'; //include
        }elseif ($_COOKIE['user']['role'] == 1) {
            print 'team member page'; //include
        }elseif ($_COOKIE['user']['role'] == 2) {
            print 'user page'; //include
        }else {
            die('wrong role code');
        }
    }else {
        $name = $_COOKIE['user']['name'];
        $email = $_COOKIE['user']['email'];

        print "Labas, $name, <br>Sveikas sugrizes i svetaine tavo pastas buvo: $email";

        chooseSite();
    }
}else {
    loginForm();
}
