
<?php
$link = mysqli_connect("localhost", "root", "Marina024", "geekbrains");
$x1 =mysqli_real_escape_string($link, $_POST['text']);
if (!$link) {
    die('Could not connect: ');
}

if ( empty($_POST['text']) )
{
    echo "Напишите текст!";
}
else{
    $query = mysqli_query($link,"INSERT INTO feedback(comment)  VALUES ('$x1')");
}
mysqli_close($link);
?>
<form enctype="multipart/form-data" method="post" action="review.php">
    <input  type="text" placeholder="Напишите свой отзыв" name="text"><br/>
    <input type="submit"  value="Go">
    <p><?php echo $x1;?></p>
</form>
