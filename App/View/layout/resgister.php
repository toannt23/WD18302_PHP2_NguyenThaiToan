<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h5 class="display-5 text-center mt-2">Đăng ký tài khoản</h5>
                            <form action="?url=ResgisterController/handleResgister" method="POST">
                                <div class="form-group mb-3">
                                    <input id="inputFullname" type="text" placeholder="Họ và tên" autofocus=""
                                        class="form-control rounded-pill border-0 shadow-sm px-4" name="fullname">
                                    <?php echo (isset($_SESSION['fullname_error']) ? '<div class="text-danger">' . $_SESSION['fullname_error'] . '</div>' : '');
                                    $_SESSION['fullname_error'] = null; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputEmail" type="text" placeholder="Email"
                                        class="form-control rounded-pill border-0 shadow-sm px-4" name="email">
                                    <?php echo (isset($_SESSION['email_error']) ? '<div class="text-danger">' . $_SESSION['email_error'] . '</div>' : '');
                                    $_SESSION['email_error'] = null; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputPassword" type="password" placeholder="Mật khẩu"
                                        class="form-control rounded-pill border-0 shadow-sm px-4 text-primary"
                                        name="password">
                                    <?php echo (isset($_SESSION['password_error']) ? '<div class="text-danger">' . $_SESSION['password_error'] . '</div>' : '');
                                    $_SESSION['password_error'] = null; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputPhone" type="text" placeholder="Số điện thoại" autofocus=""
                                        class="form-control rounded-pill border-0 shadow-sm px-4" name="phone">
                                    <?php echo (isset($_SESSION['phone_error']) ? '<div class="text-danger">' . $_SESSION['phone_error'] . '</div>' : '');
                                    $_SESSION['phone_error'] = null; ?>
                                </div>

                                <div class="form-group mb-3">
                                    <input id="inputStatus" type="hidden" placeholder="Status" value="1" autofocus=""
                                        class="form-control rounded-pill border-0 shadow-sm px-4 " name="status">
                                </div>
                                <button type="submit"
                                    class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Đăng
                                    ký</button>
                                <div class="mb-3">
                                    <?php echo (isset($_SESSION['error_user']) ? '<div class="text-danger">' . $_SESSION['error_user'] . '</div>' : '');
                                    $_SESSION['error_user'] = null; ?>
                                </div>
                                <div class="text-center d-flex justify-content-between mt-4">
                                    <p>
                                        <a href="?url=LoginController/loadViewLogin" class="btn btn-dark">
                                            Đăng nhập<i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- End -->

        </div>
    </div><!-- End -->

</div>
</div>