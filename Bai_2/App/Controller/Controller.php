<?php

include '../Model/Model.php';

//controller
$list_of_courses = get_courses();

$level = (!empty($_GET['level'])) ? $_GET['level'] : '';

$course_name = find_by_level($level);

include '../Views/view.php';

?>