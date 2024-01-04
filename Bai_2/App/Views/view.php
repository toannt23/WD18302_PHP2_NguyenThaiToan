<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1.2_NguyenThaiToan</title>
</head>

<body>
    <?php echo "PC06149 - Lab 1.2 <br>" ?>
    <?php echo "Level Developer IT" ?>
    <h1>
        <?= $course_name ?>
    </h1>
    <form action="">

        <select name="level" id="">
            <?php foreach ($courses as $key => $value): ?>
                <option value="<?= $key ?>">
                    <?= $value ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Search level</button>
    </form>
</body>

</html>