<?php

session_start();

if (!isset($_SESSION['counter']))
{
    $_SESSION['counter'] = 0;
}
else
{
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Counter displays how many time user requested page">
        <title>Basic I PHP Assignment</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div id="timer-box">
                <h1>You visited the site</h1>
                <div id="timer">
<?php
                if(isset($_SESSION['counter']))
                { ?>
                  <p><?= $_SESSION['counter'] ?></p>
<?php
                }
                else
                { ?>
                    <p>0</p>
<?php
                } ?>
                </div>
                <h1>times</h1>
                <form action="process.php" method="post">
                    <input type="submit" value="Reset">
                </form>
            </div>
        </div>
    </body>
</html>
