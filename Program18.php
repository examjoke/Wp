<?php
$cookie_name = "user";
$cookie_value = "Rakesh";
setcookie($cookie_name, $cookie_value, time() + 3600, "/");
if (isset($_COOKIE[$cookie_name])) {
    echo "Welcome back," . $_COOKIE[$cookie_name] . "!";
} else {
    echo "Welcome,new visitor! Refresh the page to see the changes.";
}
?>