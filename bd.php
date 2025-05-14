<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$title=$_POST['title'];
$pages=$_POST['pages'];
$about=$_POST['about'];

$mysqli=new mysqli ('localhost:8889', 'root','root','publisher');
$sql="INSERT INTO `raritet` (`name`,`email`,`number`,`title`,`pages`,`about`) VALUES('$name', '$email','$number','$title','$pages','$about')";

if($mysqli->query($sql)){
    echo "Сообщение отправлено";
}
else{
    echo "Ошибка";
}

$mysqli->close();
?>