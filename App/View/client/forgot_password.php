<div class="container-scroller mt-5">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-center mb-3">NHẬN LẠI MẬT KHẨU</h3>
                        <form method="POST" action="?url=ForgotPassController/forgotPassword">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control p_input" name="email" id="email"
                                    placeholder="Nhập Email">
                            </div>
                            <div class="from-group mt-3">
                                <button type="submit" class="btn btn-primary form-control" name="submit"
                                    value="submit">Lấy code</button>
                            </div>
                            <p class="sign-up text-center mt-3">Bạn có sẵn tài khoản?<a
                                    href="?url=LoginController/loadViewLogin"> Đăng nhập </a></p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>