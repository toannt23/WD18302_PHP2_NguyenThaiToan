<?php

echo "PC06149 - Lab 1.1 <br>";

$courses = [
    'block1' => 'Lập trình PHP2',
    'block2' => 'Lập trình javascript nâng cao',
    'block3' => 'Kiểm thử cơ bản'
];

///echo $course['s1'];
//Model(tương tác database)
//hàm dùng để lấy ra mảng tuần tự (return array)
function get_courses(): array
{
    global $courses;

    return array_values($courses);
}

function find_by_block($block)
{
    global $courses;

    return array_key_exists($block, $courses) ? $courses[$block] : 'Không có dữ liệu';
}



// //controller
$list_of_courses = get_courses();

$block = (!empty($_GET['block'])) ? $_GET['block'] : '';

$course_name = find_by_block($block);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1.1_NguyenThaiToan</title>
</head>

<body>
    <h1>
        <?= $course_name ?>
    </h1>
    <form action="">

        <select name="block" id="">
            <?php foreach ($courses as $key => $value): ?>
                <option value="<?= $key ?>">
                    <?= $value ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Tìm khóa học</button>
    </form>
</body>

</html>