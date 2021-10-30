<?php
if(empty($_POST['login']) || empty($_POST['pass']) ){
    echo 'Error';
}
else{
    echo 'Hello:'. $_POST['login'];
    setcookie('login',true);
}