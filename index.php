<?php
function dnd($var)
{
    print '<pre>';
    print_r($var);
    print '</pre>';
}

if (isset($_POST['equal'])) {
    if ($_POST['action'] === '+') {
        $sum = $_POST['numb1'] + $_POST['numb2'];
    } elseif ($_POST['action'] === '-') {
        $sum = $_POST['numb1'] - $_POST['numb2'];
    } elseif ($_POST['action'] === '*') {
        $sum = $_POST['numb1'] * $_POST['numb2'];
    } elseif ($_POST['action'] === '/') {
        $sum = $_POST['numb1'] / $_POST['numb2'];
    } else {
        die('ivyko klaida');
    }
    $saveAction = $_POST['numb1'] . $_POST['action'] . $_POST['numb2'] . '=' . $sum;

    if (isset($_COOKIE['calc'])) {
        $count = count($_COOKIE['calc']);
    }else {
        $count = 0;
    }

    setcookie("calc[$count]", "$saveAction", time() + 60);
    header('location:index.php');
}
?>
<html>
<head>
    <title>Cookie</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        section {
            width: 100vw;
            height: 100vh;
            background-color: chartreuse;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
<section>
    <div>
        <form method="post">
            <input name="numb1" type="number">
            <select name="action">
                <option value="+">sum</option>
                <option value="-">subtract</option>
                <option value="*">multiply</option>
                <option value="/">devide</option>
            </select>
            <input name="numb2" type="number">
            <input name="equal" type="submit" value=" = ">
        </form>
    </div>
    <div>

        <?php dnd($_COOKIE['calc']) ?>
    </div>
</section>
</body>
</html>
