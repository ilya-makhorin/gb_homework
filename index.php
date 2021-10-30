<?php
session_start();
$price =['400','200'];
$link = mysqli_connect("localhost", "root", "1", "geekbrains");

if ($_POST['price1']) {
    $price_item = $price[0];
    $a = $_POST['quantity1'];
}
else{
    $price_item = $price[1];
    $a = $_POST['quantity2'];
}

$bar = (integer)$a;
if ($bar == 0 ) {
    $bar = 'a';
} else {
    $result = $price_item * $bar;
}
$x1 = mysqli_real_escape_string($link, $result);
$query = mysqli_query($link, "INSERT INTO basket(price,quantity) VALUES ('$x1','$bar') ");
$query1 = mysqli_query($link, "SELECT SUM(price) sum  from basket  ");
$query2 = mysqli_query($link, "SELECT price FROM basket ORDER BY id DESC LIMIT 1");
$query3 = mysqli_query($link, "SELECT quantity FROM basket ORDER BY id DESC LIMIT 1");
$query1=mysqli_fetch_assoc($query1);
$sum=$query1['sum'];
$query2 =mysqli_fetch_assoc($query2);
$query3=mysqli_fetch_assoc($query3);
$_SESSION['price'] = $query2;
$_SESSION['quantity_item'] = $query3;
$_SESSION['total'] = $sum;
?>
<form enctype="multipart/form-data" method="post" action="index.php" xmlns="http://www.w3.org/1999/html">
    <a href="basket.php">
        <img width="200" height="200" src="img-php/p1.png">
    </a>
    <input name="quantity1" type="number">
    <input type="submit" name="price1" value="<?php echo $price[0]?>"/></br>
    <a href="basket.php">
        <img width="200" height="200" src="img-php/3.png">
    </a>
    <input name="quantity2" type="number">
    <input type="submit" name="price2" value="<?php echo $price[1]?>">
    <p>Total:<?php echo $sum .'$';?></p>
</form>
<?php
//Чтобы при обновлении страницы в базу данных ничего не записывалось
var_dump($_SESSION);
if ($_POST) {
    header("Location: {$_SERVER['REQUEST_URI']}", true, 303);
    exit();
}
?>
