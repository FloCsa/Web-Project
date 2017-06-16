<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/Login.js"></script>
    <link rel="stylesheet" href="../css/main.css"><
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div id="fullscreen_bg" class="fullscreen_bg"/>
<div id="regContainer" class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="Login.php" method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="E-Mail" value="">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember"> Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form id="register-form" action="Login.php" method="post" role="form" style="display: none;">
                                <div class="form-group">
                                    <label for="email1">E-Mail</label>
                                    <input type="email" name="f[email1]" required id="email1" tabindex="1" class="form-control" placeholder="E-Mail" value="">
                                </div>
                                <div class="form-group">
                                    <label for="password1">Password</label>
                                    <input type="password" name="f[password1]" required id="password1" minlength="6" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="confirm-password">Confirm password</label>
                                    <input type="password" name="confirm-password" required id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit"  name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" onclick="checkPW(); checkMail(); checkall()"  value="Register Now" >
                                            <span id="confirmMessage" class="confirmMessage"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
require_once('includes/classes/Database.php');

define("DB_HOST", 'localhost');
define("DB_NAME", 'testdatabase');
define("DB_USER", 'testuser2');
define("DB_PASS", 'testpass');

$db= new Database(); ?>
</html>