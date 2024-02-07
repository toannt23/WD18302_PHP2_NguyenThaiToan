<body>
    <!-- SIDEBAR -->
    <!-- SIDEBAR -->
    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <?php
        include 'App/View/layout/header.php';
        ?>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Admin</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Quản lí nhân viên</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Số điện thoại</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Lặp mỗi phần tử trong mảng data và gán cho biến item 
                        foreach ($data as $item) {
                            extract($item);
                            ?>
                            <tr>
                                <th scope="row">
                                    <?= $id ?>
                                </th>
                                <td>
                                    <?= $fullname ?>
                                </td>
                                <td>
                                    <?= $email ?>
                                </td>
                                <td>
                                    <?= $phone ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->