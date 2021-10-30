<?php
setcookie('login', null, -1, '/');
?>
<form  method = "post" action = "login.php" >
    <input type = "text" name = "login" placeholder = "login" /></br >
    <input type = "password" name = "pass" placeholder = "password" /></br >
    <input type = "submit" name = "go" value = "Go" >
</form >
