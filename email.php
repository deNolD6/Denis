<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);
$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);
$name = trim($name);
$email = trim($email);
$message = trim($message);
if (mail("blender6git@gmail.com", "Форма зворотнього зв^язку", "Ім^я:".$name.". E-mail: ".$email.".Текст:".$message ,"From: denis.solovey66@gmail.com \r\n"))
 {     echo "Повідомлення відправлене"; 
} else { 
    echo "Виникли помилки при відправці, спробуйте пізніше!";
}?>
