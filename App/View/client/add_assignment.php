<body>
    <form class="bg-light p-4 my-3" action="" method="POST">
        <h3 class="d-flex justify-content-center">PHÂN CÔNG CÔNG VIỆC</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <label class="m-1">Ngày tạo</label>
                <input type="date" class="form-control" aria-label="First name">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <label class="m-1">ID Task</label>
                <input type="text" class="form-control" aria-label="First name">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <label class="m-1">ID Nhân viên</label>
                <input type="text" class="form-control" aria-label="First name">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <label class="m-1">Trạng thái</label>
                <select name="" id="" class="form-control">
                    <option value="">Đang thực hiện</option>
                    <option value="">Đã hoàn thành</option>
                    <option value="">Chưa hoàn thành</option>
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-2">
                <a href="index.php?ctrl=assignment"><button class="btn btn-primary p-2 mt-3 col-12" name="btn_Add"
                        type="button">Thêm</button></a>
            </div>
            <div class="col-2">
                <a href="index.php?ctrl=assignment"><button class="btn btn-outline-success p-2 mt-3 col-12"
                        type="button">Quay
                        về</button></a>
            </div>
        </div>
    </form>
</body>