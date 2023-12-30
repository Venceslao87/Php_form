
<html>
    <h2> Перевірте Ваші дані</h2>
<?php
$name = $_POST['first_name'];
$surname = $_POST['second_name'];
$point = $_POST['sex'];
$birthDate = $_POST['Birth_date'];
$clientMail = $_POST['email'];
$clientTelephone = $_POST['telefon'];
$aboutself = $_POST['someabout'];

echo "Ваше ім'я ". $name. '<br>';
echo "Ваше прізвище ". $surname. '<br>';
echo "Ваша стать ".$point.'<br>';
echo "Дата народження ".$birthDate.'<br>';
echo "Ваша пошта ".$clientMail.'<br>';
echo "Ваш телефон ".$clientTelephone.'<br>';
echo "Дещо про себе ". $aboutself. '<br>';
?>
<a href="index.html">Назад, до форми</a>
</html>
