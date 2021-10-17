//Создать галерею фотографий. Она должна состоять всего из одной странички, на которой пользователь видит все картинки в уменьшенном виде и форму для загрузки нового изображения.
При клике на фотографию она должна открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width.
При загрузке изображения необходимо делать проверку на тип и размер файла.
<html lang="en">
<head>
</head>
<body>
<a href="img-php/1.png" target="_blank">
    <img src="img-php/1.png" width="200px" height="200px">
</a> <a href="img-php/100.png" target="_blank">
    <img src="img-php/100.png" width="200px" height="200px">
</a>
<a href="img-php/200.png" target="_blank">
    <img src="img-php/200.png" width="200px" height="200px">
</a>
</body>
</html>
//*Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки с изображениями.
Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.

<html lang="en">
<head>
</head>
<body>
<?php
$images = scandir('img-php/');
foreach($images as $image){
    if(is_file('img-php/' . $image)){
        ?>
        <a href="img-php/<?php echo $image;?>" target="_blank">
            <img src="img-php/<?php echo $image;?>" width="200px" height="200px">
        </a>
        <?php
    }
}
?>
</body>
</html>
//При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне
<html lang="en">
<head>
</head>
<body>
<?php
$images = scandir('img-php/');
foreach($images as $image){
    if(is_file('img-php/' . $image)){
        ?>

        <img src="img-php/<?php echo $image;?>" width="200" height="200" onclick="changeSizeImage(this)">
        <?php
    }
}
?>
<script>
    var bigsize = "400";
    var smallsize = "200";
    function changeSizeImage(im) {
        if(im.height == bigsize & im.width == bigsize){
            im.height = smallsize;
            im.width = smallsize;
        }
        else {
            im.height = bigsize;
            im.width = bigsize;
        }
    }
</script>
</body>
</html>
