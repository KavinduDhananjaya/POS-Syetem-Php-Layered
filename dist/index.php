<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/12/2019
 * Time: 10:23 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>



    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="js/semantic.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cssDashbord.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index.css">


</head>
<body>

<header>

</header>


<div class="ui placeholder segment" style="width: 70%;margin-left: 150px">
    <div class="ui two column very relaxed stackable grid">
        <div class="column">
            <div class="ui form">
                <div class="field">
                    <label>Username</label>
                    <div class="ui left icon input">
                        <input type="text" placeholder="Username">
                        <i class="user icon"></i>
                    </div>
                </div>
                <div class="field">
                    <label>Password</label>
                    <div class="ui left icon input">
                        <input type="password">
                        <i class="lock icon"></i>
                    </div>
                </div>
                <a href="dashbord.php">  <div class="ui blue submit button">Login</div></a>
            </div>
        </div>
        <div class="middle aligned column">
            <div class="ui big button">
                <i class="signup icon"></i>
                Sign Up
            </div>
        </div>
    </div>
    <div class="ui vertical divider">
        Or
    </div>
</div>

</body>
</html>
