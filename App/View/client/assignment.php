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
                            <a class="active" href="#">Phân công công việc</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">ID Task</th>
                            <th scope="col">ID Nhân viên</th>
                            <th scope="col">Trạng thái</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $item) {
                            extract($item);
                            ?>
                            <tr>
                                <th scope="row">
                                    <?= $id ?>
                                </th>
                                <td>
                                    <?= $creatd_at ?>
                                </td>
                                <td>
                                    <?= $tasks_id ?>
                                </td>
                                <td>
                                    <?= $users_id ?>
                                </td>
                                <td width="180px">
                                    <?php
                                    if ($status == 0) {
                                        echo 'Đang thực hiện';
                                    } elseif ($status == 1) {
                                        echo 'Chưa hoàn thành';
                                    } elseif ($status == 2) {
                                        echo 'Đã hoàn thành';
                                    }
                                    ?>
                                </td>
                                <td width="50px">
                                    <a href="?url=AssignmentController/detail/<?= $id ?>" type="submit"
                                        class="btn btn-primary">
                                        <img src="Public/img/edit-1-svgrepo-com.svg" alt="">
                                    </a>
                                </td>
                                <td width="50px">
                                    <a href="?url=AssignmentController/deleteAssignment&id=<?= $id ?>"
                                        class="btn btn-danger">
                                        <img src="Public/img/delete-2-svgrepo-com.svg" alt="">
                                    </a>
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