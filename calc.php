<form enctype="multipart/form-data" method="post" action="calc.php">
      <input type="number" name="x1"><br/>
      <input type="number" name="x2"><br/>
<select name="operation">
    <option value="plus">+</option>
    <option value="minus">-</option>
    <option value="multiply">*</option>
    <option value="division">/</option>
</select>
<input type="submit"  value="Go">
</form>
<?php

$x1 = $_POST['x1'];
$x2 = $_POST['x2'];
switch ($_POST['operation']) {
    case 'plus':
        $result = $x1 + $x2;
        break;
    case 'minus':
        $result = $x1 - $x2;
        break;
    case 'multiply':
        $result = $x1 * $x2;
        break;
    case 'division':
        if($x2 == '0'){
            $result = "На 0 делить нельзя";
        }
        else {
            $result = $x1 / $x2;
        }
        break;
    default:
        return 'Операция не поддерживается';
}
echo "Ответ:".$result;
echo '</br>';
var_dump($_POST);
?>