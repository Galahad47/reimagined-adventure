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

<div class="gif-container">

</div>
<h1>Задание 3.2 </h1>
<?php
$db = new PDO("mysql:host=task;dbname=work", "root", "");
$stmt = $db->query(' SELECT `task_for_group_students_lesson`.`task_id`, `task_for_group_students_lesson`.`group_id`, `task_for_group_students_lesson`.`student_id`
FROM `task_for_group_students_lesson`
WHERE `task_for_group_students_lesson`.`task_id` = "1" ');
//Установка fetch mode
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch())
{
    echo $names = 'id группы   id студента' ;
    echo "<p>" . $row['task_id'] .  "&emsp;" . "&emsp;" . $row['student_id']  . "&emsp;" . "&emsp;" . $row['group_id'] . "</p>";
}
?>
</body>

</html>
