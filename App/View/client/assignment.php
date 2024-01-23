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
                            <a class="active" href="#">Phân công công việc</a>
                        </li>
                    </ul>
                </div>
                <a href="index.php?ctrl=add_assignment" class="btn-download">
                    <span class="text">Phân công</span>
                </a>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>17-01-2024</td>
                            <td>1</td>
                            <td>1</td>
                            <td width="180px">Đang thực hiện</td>
                            <td width="50px">
                                <button type="submit" class="btn btn-primary">
                                    <img src="Public/img/edit-1-svgrepo-com.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>14-01-2024</td>
                            <td>2</td>
                            <td>2</td>
                            <td width="180px">Đã hoàn thành</td>
                            <td width="50px">
                                <button type="submit" class="btn btn-primary">
                                    <img src="Public/img/edit-1-svgrepo-com.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>15-01-2024</td>
                            <td>3</td>
                            <td>3</td>
                            <td width="180px">Đang thực hiện</td>
                            <td width="50px">
                                <button type="submit" class="btn btn-primary">
                                    <img src="Public/img/edit-1-svgrepo-com.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>15-01-2024</td>
                            <td>4</td>
                            <td>2</td>
                            <td width="180px">Đang thực hiện</td>
                            <td width="50px">
                                <button type="submit" class="btn btn-primary">
                                    <img src="Public/img/edit-1-svgrepo-com.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>14-01-2024</td>
                            <td>5</td>
                            <td>1</td>
                            <td width="180px">Chưa hoàn thành</td>
                            <td width="50px">
                                <button type="submit" class="btn btn-primary">
                                    <img src="Public/img/edit-1-svgrepo-com.svg" alt="">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>14-01-2024</td>
                            <td>6</td>
                            <td>6</td>
                            <td width="180px">Đã hoàn thành</td>
                            <td width="50px">
                                <button type="submit" class="btn btn-primary">
                                    <img src="Public/img/edit-1-svgrepo-com.svg" alt="">
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