<?php
include 'Data.php';
//Model(tương tác database)
//hàm dùng để lấy ra mảng tuần tự (return array)
function get_courses(): array
{
    global $courses;

    return array_values($courses);
}

function find_by_level($level)
{
    global $courses;

    return array_key_exists($level, $courses) ? $courses[$level] : 'Chưa có cấp bậc';
}
?>