<?php

require_once "vendor\autoload.php";


use Php2\Oop\Core\Base;
use Php2\Oop\Model\BaseModel;
use Php2\Oop\Core\Form;
use Php2\Oop\Core\Filed;


$base = new Base;
$basemodel = new BaseModel;


echo $base->getName() . "<br>";
$base->setName("Javascript");
echo $base->getName() . "<br>";
//Hang so khong can tao doi tung new (chang han nhu public static hay const)
echo $basemodel->create() . "<br>";
echo $basemodel->update() . "<br>";
echo $basemodel->delete() . "<br>";
echo ("Nguyễn Thái Toàn PC06149 LAB3 WD18302");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NguyenThaiToan_Lab3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <h1 class="d-flex justify-content-center">ĐĂNG KÝ TÀI KHOẢN MỚI</h1>
        <?php
        $form = Form::begin(" ", "post");
        ?>
        <div class="row">
            <div class="col">
                <?php echo $form->filed('firstname'); ?>
            </div>
            <div class="col">
                <?php echo $form->filed('lastname'); ?>
            </div>
        </div>
        <?php
        echo $form->filed("email");
        ?>
        <?php
        echo $form->filed("password")->passwordFiled();
        ?>
        <?php
        echo $form->filed("confirm")->passwordFiled();
        ?>
        <button type="submit" name="them" class="btn btn-primary">
            Gửi
        </button>
        <?php echo Form::end(); ?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
</body>

</html>