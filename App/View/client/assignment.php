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
                            <a class="active" href="#">Theo dõi công việc</a>
                        </li>
                    </ul>
                </div>
                <!-- <a href="index.php?ctrl=add_assignment" class="btn-download">
                    <span class="text">Phân công</span>
                </a> -->
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
                                    <?= $status ?>
                                </td>
                                <td width="50px">
                                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalEdit" data-bs-whatever="@mdo">
                                        <img src="Public/img/edit-1-svgrepo-com.svg" alt="">
                                    </button>
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
    <!-- UPDATE MODAL -->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="">Ngày tạo</label>
                            <input type="date" class="form-control" aria-label="First name">
                        </div>
                        <div class="mb-3">
                            <label class="">ID Task</label>
                            <input type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="mb-3">
                            <label class="">ID Nhân viên</label>
                            <input type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="mb-3">
                            <label class="">Trạng thái</label>
                            <select name="" id="" class="form-control">
                                <option value="">Đang thực hiện</option>
                                <option value="">Đã hoàn thành</option>
                                <option value="">Chưa hoàn thành</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay về</button>
                    <a href="index.php?ctrl=assignment">
                        <button class="btn btn-primary" type="button">Xong</button>
                    </a>
                </div>
            </div>
        </div>
    </div>