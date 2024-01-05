<?php
//is_array(kiem tra mang)
echo "PC06149_Lab1.3 <br>";
if ($user !== null && is_array($user) && isset($user['firstname']) && isset($user['lastname'])) {
    echo $user['firstname'] . "" . $user['lastname'];
} else {
    echo "Chưa có dữ liệu";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1.3_NguyenThaiToan</title>
</head>

<body>
    <form method="post">
        <input type="email" name="email" />
        <input type="submit">
    </form>
</body>

</html>