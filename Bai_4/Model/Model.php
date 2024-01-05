<?php
function get_staff()
{
    include '../Config/config.php';
    $sql = "SELECT * FROM nhanvien";
    // Get the result
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $staff = array();


    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $staff[] = $row;
    }
    $stmt->close();
    $connection->close();
    return $staff;

}

?>