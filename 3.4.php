<!doctype html>
<html lang=ru>
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Задание 3.4 </h1>
<?php
$db = new PDO("mysql:host=task;dbname=work", "root", "");
$stmt = $db->query(' SELECT `task_some_inspectors`.`task_variant`, `task_some_inspectors`.`inspector1_id`, `task_some_inspectors`.`inspector2_id`
FROM `task_some_inspectors`;
ORDER BY `task_variant` DESC');
//Установка fetch mode
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch())
{
    echo $names = 'id   id задания   id студента' ;
    echo "<p>" . $row['id'] .  "&emsp;" . "&emsp;" . $row['task_id']  . "&emsp;" . "&emsp;" . $row['student_id'] . "</p>";
}
?>
</body>

</html>
