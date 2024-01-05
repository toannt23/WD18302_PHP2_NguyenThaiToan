<?php
//is_array(kiem tra mang)
if ($user !== null && is_array($user) && isset($user['firstname']) && isset($user['lastname'])) {
    echo $user['firstname'] . "" . $user['lastname'];
} else {
    echo "Chưa có dữ liệu";
}
?>
<form method="post">
    <input type="email" name="email" />
    <input type="submit">
</form>