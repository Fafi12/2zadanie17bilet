<?php
require("helper.php");
if($_POST){
    echo "Результат: <b>";
    if($_POST['action'] == 1){
        echo Singleton::SqrNumber($_POST['number']);
    }else if($_POST['action'] == 2){
        echo Singleton::FormatNumber($_POST['number']);
    }else{
        echo "Неизвестное действие!";
    }
    echo "</b>";
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Задание</title>
</head>
<body>
<form action="/" method="post">
    <input name="action" type="hidden" value="1">
    <input name="number" placeholder="Число возвести в квадрат">
    <input type="submit">
</form>
<form action="/" method="post">
    <input name="action" type="hidden" value="2">
    <input name="number" placeholder="Форматирование числа">
    <input type="submit">
</form>
</body>
</html>
