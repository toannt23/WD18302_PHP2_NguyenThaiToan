<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="" class="brand">
            <i class='bx bx-calendar'></i>
            <span class="text">Dashboard</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="home">
                    <i class='bx bxs-home'></i>
                    <span class="text">Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="?url=StaffController">
                    <i class='bx bxs-user'></i>
                    <span class="text">Quản lí nhân viên</span>
                </a>
            </li>
            <li>
                <a href="?url=TaskController">
                    <i class='bx bx-table'></i>
                    <span class="text">Quản lí công việc</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-task'></i>
                    <span class="text">Phân công công việc</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Cài đặt</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-log-out'></i>
                    <span class="text">Đăng xuất</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->
    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Tìm kiếm công việc</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="Public/img/user.jpg">
            </a>
        </nav>
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