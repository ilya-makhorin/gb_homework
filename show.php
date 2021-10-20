<?php
$link = mysqli_connect("localhost", "root", "Marina024", "geekbrains");
$id = $_GET['image_id'];
mysqli_query($link,'update images set viewed = viewed + 1 where id=' . $id);
$result = mysqli_query($link, 'select * from images where id=' . $id);
$image = mysqli_fetch_assoc($result);
if($image){
    echo '<img  src = "' . $image['img'] .'">';
}