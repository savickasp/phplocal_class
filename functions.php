<?php

function dnd($var)
{
    print '<pre>';
    print_r($var);
    print '</pre>';
}

function chooseSite() {
    print <<<FORMA
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
            <input name="page" type="text">
            <input name="pagebtn" type="submit" value="goto">
        </form>
    </div>
</section>
</body>
</html>
FORMA;

}

function loginForm() {
    print "<html>
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
        <form method=\"post\">
            <input name=\"name\" type=\"text\">
            <input name=\"email\" type=\"email\">
            <input name=\"role\" type=\"number\">
            <input name=\"submit\" type=\"submit\" value=\"submit\">
        </form>
    </div>
    <div>";
        dnd($_COOKIE);
        print "</div>
</section>
</body>
</html>";
}