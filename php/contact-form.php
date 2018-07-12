<?php
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$tel = htmlspecialchars($_POST["tel"]);
$website = htmlspecialchars($_POST["website"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);
 
/* Ваш адрес и тема сообщения */
$address = "superbthemovie@gmail.com";
$sub = "topsykre.tt";
 
/* Формат письма */
$mes = "topsykre.tt\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Текст сообщения:
$message";
 
 
if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
 header('Refresh: 5; URL=
http://5w33t18gif760x.github.io/#/');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на главную страницу</body>';}
else {
 header('Refresh: 5; URL=
http://5w33t18gif760x.github.io/#/');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на главную страницу</body>';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>