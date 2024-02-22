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
                            <h3 class="display-4 text-center mt-3">Đăng nhập</h3>
                            <form action="?url=LoginController/handleLogin" method="POST">
                                <div class="form-group mb-3">
                                    <input id="inputEmail" type="text" placeholder="Email" autofocus=""
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
                                    <?php echo (isset($_SESSION['password_login']) ? '<div class="text-danger">' . $_SESSION['password_login'] . '</div>' : '');
                                    $_SESSION['password_login'] = null; ?>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Đăng
                                    nhập</button>
                                <div class="mb-3">
                                    <?php echo (isset($_SESSION['email_login']) ? '<div class="text-danger">' . $_SESSION['email_login'] . '</div>' : '');
                                    $_SESSION['email_login'] = null; ?>
                                </div>
                                <div class="text-center d-flex justify-content-between mt-4">
                                    <p><a href="?url=ResgisterController" class="font-italic text-muted">
                                            <u style="text-decoration: none;" class="text-primary">Đăng ký</u></a> tài
                                        khoản mới</p>
                                </div>
                                <div>
                                    <p class="text-muted"><a href="?url=ForgotPassController/viewPass">Quên mật
                                            khẩu</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>