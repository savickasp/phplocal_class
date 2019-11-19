<?php
$luckyNumber = 59;

if (isset($_POST['number'])) {
    if ($_POST['number'] == $luckyNumber) {
        print 'WIN';
    } elseif (abs($_POST['number'] - $luckyNumber) < 10) {
        print 'getting close';
    } else {
        print 'sorry';
    }
}else {
    print 'ne';
}

?>

<html>
<head>
    <title></title>
</head>
<body>
<form method="post">
    <input style="width: 500px" name="number" type="number" placeholder="Gues number between 0 and 255 ">
    <input type="submit" value="try your luck">
</form>
</body>
</html>