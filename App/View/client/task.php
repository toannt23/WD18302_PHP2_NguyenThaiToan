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
                <a href="index.php?ctrl=add_task" class="btn-download">
                    <span class="text">Thêm công việc</span>
                </a>
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Xây dựng API cho quản lý người dùng</td>
                            <td>
                                Phát triển các endpoint RESTful để thêm, sửa, xóa người dùng
                            </td>
                            <td width="120px">21-01-2024</td>
                            <td width="150px">Task đang mở</td>
                            <td>
                                <button type="submit" class="btn btn-primary">
                                    <img src="Public/img/edit-1-svgrepo-com.svg" alt="">
                                </button>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger">
                                    <img src="Public/img/delete-2-svgrepo-com.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Thiết kế giao diện quản trị</td>
                            <td>
                                Thiết kế giao diện quản trị dành cho người quản lý hệ thống
                            </td>
                            <td width="120px">16-01-2024</td>
                            <td>Task đã đóng</td>
                            <td>
                                <button type="submit" class="btn btn-primary"><img
                                        src="Public/img/edit-1-svgrepo-com.svg" alt=""></button>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger">
                                    <img src="Public/img/delete-2-svgrepo-com.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Tối ưu hóa mã nguồn frontend</td>
                            <td>
                                Kiểm tra và tối ưu hóa mã nguồn của ứng dụng Frontend
                            </td>
                            <td width="120px">21-01-2024</td>
                            <td>Task đang mở</td>
                            <td>
                                <button type="submit" class="btn btn-primary"><img
                                        src="Public/img/edit-1-svgrepo-com.svg" alt=""></button>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger">
                                    <img src="Public/img/delete-2-svgrepo-com.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Xây dựng trang đăng nhập</td>
                            <td>
                                Phát triển trang đăng nhập và xác thực người dùng
                            </td>
                            <td width="120px">20-01-2024</td>
                            <td>Task đang mở</td>
                            <td>
                                <button type="submit" class="btn btn-primary"><img
                                        src="Public/img/edit-1-svgrepo-com.svg" alt=""></button>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger">
                                    <img src="Public/img/delete-2-svgrepo-com.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Phát triển tính năng realtime</td>
                            <td>
                                Phát triển tính năng realtime sử dụng WebSocket
                            </td>
                            <td width="120px">15-01-2024</td>
                            <td>Task đã đóng</td>
                            <td>
                                <button type="submit" class="btn btn-primary"><img
                                        src="Public/img/edit-1-svgrepo-com.svg" alt=""></button>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger">
                                    <img src="Public/img/delete-2-svgrepo-com.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Xây dựng hệ thống xác thực</td>
                            <td>
                                hiết kế và triển khai hệ thống xác thực bảo mật cao
                            </td>
                            <td width="120px">19-01-2024</td>
                            <td>Task đang mở</td>
                            <td>
                                <button type="submit" class="btn btn-primary"><img
                                        src="Public/img/edit-1-svgrepo-com.svg" alt=""></button>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger">
                                    <img src="Public/img/delete-2-svgrepo-com.svg" alt="">
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->