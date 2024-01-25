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
                        <tr>
                            <th scope="row">1</th>
                            <td> Nguyễn Văn Anh</td>
                            <td>nguyenvananh@example.com</td>
                            <td>0123456789</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Trần Thị Bích</td>
                            <td>tranthibich@example.com</td>
                            <td>0987654321</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Lê Văn Cường</td>
                            <td>levancuong@example.com</td>
                            <td>0365478901</td>

                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Phạm Thị Dung</td>
                            <td>phamthidung@example.com</td>
                            <td>0123456789</td>

                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Võ Thanh Hà</td>
                            <td>vothanhha@example.com</td>
                            <td>0987654321</td>

                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Đỗ Văn Hiếu</td>
                            <td>dovanhieu@example.com</td>
                            <td>0365478901</td>

                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Hoàng Thị Lan</td>
                            <td>hoangthilan@example.com</td>
                            <td>0123456789</td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->