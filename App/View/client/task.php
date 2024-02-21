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
                            <a class="active" href="#">Quản lí công việc</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="?url=TaskController/taskAdd" type="button" class="btn btn-primary">Thêm công việc</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên công việc</th>
                            <th scope="col">Chi tiết công việc</th>
                            <th scope="col">Thời hạn</th>
                            <th scope="col">Trạng thái</th>
                            <th></th>
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
                                    <?= $name ?>
                                </td>
                                <td>
                                    <?= $description ?>
                                </td>
                                <td width="120px">
                                    <?= $dealine ?>
                                </td>
                                <td width="150px">
                                    <?=
                                        ($status == 1) ? 'Task đã mở' : 'Task đã đóng'
                                        ?>
                                </td>
                                <td>
                                    <a href="?url=TaskController/detail/<?= $id ?>" class="btn btn-primary">
                                        <img src="Public/img/edit-1-svgrepo-com.svg" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="?url=TaskController/deleteTask&id=<?= $id ?>" class="btn btn-danger">
                                        <img src="Public/img/delete-2-svgrepo-com.svg" alt="">
                                    </a>
                                </td>
                                <td width='130px'>
                                    <a href="?url=AssignmentController/creatdAssignment/<?= $id ?>"
                                        class="btn btn-success">Phân
                                        công</a>
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