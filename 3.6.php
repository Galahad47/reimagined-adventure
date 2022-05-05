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
<h1>Задание 3.6 </h1>
<?php
$db = new PDO("mysql:host=task;dbname=work", "root", "");
$stmt = $db->query(' SELECT `task_for_group_students_lesson`.`task_id`, `task_for_group_students_lesson`.`student_id`
FROM `task_for_group_students_lesson`;
FIELD (`task_id`, (1,2,3,4,5)');
//Установка fetch mode
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch())
{
    echo $names = 'task_id   id студента' ;
    echo "<p>" . $row['task_id'] .  "&emsp;" . "&emsp;" . $row['student_id']  . "</p>";
}
?>
</body>

</html>
