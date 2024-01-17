<body>
    <!-- SIDEBAR -->
    <?php
    include 'App/View/layout/sidebar.php';
    ?>
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
                            <a class="active" href="#">Trang chủ</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-briefcase'></i>
                    <span class="text">
                        <h3>20</h3>
                        <p>Công việc hiện tại</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>20</h3>
                        <p>Số lượng thành viên</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-check-square'></i>
                    <span class="text">
                        <h3>10</h3>
                        <p>Công việc đã hoàn thành</p>
                    </span>
                </li>
            </ul>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Bảng thống kê</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Ngày nhận việc</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="./Public/img/user.jpg">
                                    <p>Nguyễn Thái Toàn</p>
                                </td>
                                <td>16-1-2024</td>
                                <td><span class="status completed">Đang thực hiện</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="./Public/img/user.jpg">
                                    <p>Nguyễn Hữu Thắng</p>
                                </td>
                                <td>15-1-2024</td>
                                <td><span class="status pending">Đã hoàn thành</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="./Public/img/user.jpg">
                                    <p>Lê Minh Huy</p>
                                </td>
                                <td>15-1-2024</td>
                                <td><span class="status process">Chưa hoàn thành</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="./Public/img/user.jpg">
                                    <p>Võ Duy Phương</p>
                                </td>
                                <td>15-1-2024</td>
                                <td><span class="status pending">Đã hoàn thành</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="./Public/img/user.jpg">
                                    <p>Võ Tấn Luôn</p>
                                </td>
                                <td>16-1-2024</td>
                                <td><span class="status completed">Đang thực hiện</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Thời lượng làm việc</h3>
                        <i class='bx bx-plus'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <ul class="todo-list">
                        <li class="completed">
                            <p>Đang thực hiện</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="ye-completed">
                            <p>Chưa hoàn thành</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="not-completed">
                            <p>Đã hoàn thành</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->