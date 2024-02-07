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
                <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModalCreate"
                    data-bs-whatever="@mdo" class="btn btn-primary">Thêm công việc</button>
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
                                    <?= $status ?>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalEdit" data-bs-whatever="@mdo">
                                        <img src="Public/img/edit-1-svgrepo-com.svg" alt="">
                                    </button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-danger">
                                        <img src="Public/img/delete-2-svgrepo-com.svg" alt="">
                                    </button>
                                </td>
                                <td width="130px">
                                    <!-- jquery lay data-id  -->
                                    <button type="submit" class="btn btn-success" data-id="" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" data-bs-whatever="@mdo">Phân công</button>
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
    <!-- MODAL TASK -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Phân công công việc</h5>
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
                        <button class="btn btn-primary" type="button">Phân công</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL CREATE -->
    <div class="modal fade" id="exampleModalCreate" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm công việc</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="?url=TaskController/insertTask" method="POST">
                        <div class="mb-3">
                            <label class="">Tên công việc</label>
                            <input type="text" name="name" class="form-control" aria-label="First name">
                        </div>
                        <div class="mb-3">
                            <label class="">Thời hạn</label>
                            <input type="date" name="dealine" class="form-control" aria-label="First name">
                        </div>
                        <div class="mb-3">
                            <label class="">Trạng thái</label>
                            <input type="text" name="status" value="Task đang mở" class="form-control"
                                aria-label="First name">
                        </div>
                        <div class="mb-3">
                            <label class="">Chi tiết công việc</label><br>
                            <textarea name="description" id="" cols="60" rows="5"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay về</button>
                            <button class="btn btn-primary" type="submit">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL UPDATA -->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" data-id=""
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa công việc</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="">Tên công việc</label>
                            <input type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="mb-3">
                            <label class="">Thời hạn</label>
                            <input type="date" class="form-control" aria-label="First name">
                        </div>
                        <div class="mb-3">
                            <label class="">Trạng thái</label>
                            <select name="" id="" class="form-control">
                                <option value="">Đang thực hiện</option>
                                <option value="">Đã hoàn thành</option>
                                <option value="">Chưa hoàn thành</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="">Chi tiết công việc</label><br>
                            <textarea name="" id="" cols="60" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay về</button>
                    <a href="index.php?ctrl=assignment">
                        <button class="btn btn-primary" type="button">Chỉnh sửa</button>
                    </a>
                </div>
            </div>
        </div>
    </div>