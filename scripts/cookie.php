<?php
$cookie_name = "language";
echo isset($_POST['language']);
$cookie_value = isset($_REQUEST['language']) ? $_REQUEST['language'] : "en";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day