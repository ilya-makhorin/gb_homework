<?php
if($_COOKIE['login'] == '1'){
    echo 'you already logged';?>
    <form  method = "post" action = "quit.php" >
        <input type = "submit" name = "quit" value = "Quit" >
    </form>
    <?php
}
else {
    ?>
    <form  method = "post" action = "login.php" >
        <input type = "text" name = "login" placeholder = "login" /></br >
        <input type = "password" name = "pass" placeholder = "password" /></br >
        <input type = "submit" name = "go" value = "Go" >
    </form >
<?php }
