<?php
$link = mysqli_connect("localhost", "root", "Marina024", "geekbrains");
$result = mysqli_query($link,"select * from images where 1 order by viewed desc");
while($row = mysqli_fetch_assoc($result)){
    echo '<a href = "/show.php?image_id=' . $row['id'] .'">';
    echo '<img width = "100" height = "100" src = "' . $row['img'] .'">';
    echo '</a>';

}

