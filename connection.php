<?php
$host = 'sql7.freesqldatabase.com'; // адрес сервера 
$database = 'sql7386311'; // имя базы данных
$user = 'sql7386311'; // имя пользователя
$password = '3rW9W2gPv1'; // пароль
?>
<?php
require_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
$query ="SELECT * FROM h_artifacts";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo ($result);
}
 
// закрываем подключение
mysqli_close($link);
?>