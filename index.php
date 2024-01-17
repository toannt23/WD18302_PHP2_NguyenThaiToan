<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminHub</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
    $controller = "login";
    if (isset($_GET['ctrl']))
        $controller = $_GET['ctrl'];

    switch ($controller) {
        case "home":
            include 'App/View/client/home.php';
            break;
        case "task":
            include 'App/View/client/task.php';
            break;
        case "add_task":
            include 'App/View/client/add_task.php';
            break;
        case "staff":
            include 'App/View/client/staff.php';
            break;
        case "assignment":
            include 'App/View/client/assignment.php';
            break;
        case "add_assignment":
            include 'App/View/client/add_assignment.php';
            break;
        case "login":
            include 'App/View/client/login.php';
            break;
        case "logout":
            unset($_SESSION['user']);
            header("location: index.php");
            exit;
    }
    ?>
    <script src="Public/js/login.js"></script>
    <script src="Public/js/scrpit.js"></script>
    <!-- SCRPIT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>

</body>

</html>
<?php
ob_end_flush();
?>