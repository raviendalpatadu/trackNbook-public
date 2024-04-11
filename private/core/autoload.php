<?php
// echo "autoload.php<br>";
require("config.php");
require("functions.php");
require("database.php");
require("controller.php");
require("app.php");
require("model.php");

spl_autoload_register(function ($class_name)
{
    require("../private/models/" . $class_name . ".php");
});

require("../private/private_assets/PHPMailer-master/src/Exception.php");
require("../private/private_assets/PHPMailer-master/src/PHPMailer.php");
require("../private/private_assets/PHPMailer-master/src/SMTP.php");


?>