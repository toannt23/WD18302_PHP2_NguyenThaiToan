<body>
    <form class="bg-light p-4 my-3" action="" method="POST">
        <h3 class="d-flex justify-content-center">THÊM CÔNG VIỆC</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <label class="m-1">Tên công việc</label>
                <input type="text" class="form-control" aria-label="First name">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <label class="m-1">Thời hạn</label>
                <input type="date" class="form-control" aria-label="First name">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <label class="m-1">Trạng thái</label>
                <input type="text" class="form-control" aria-label="First name">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <label class="">Chi tiết công việc</label>
                <textarea cols="80" rows="10"></textarea>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-2">
                <a href="index.php?ctrl=task"><button class="btn btn-primary p-2 mt-3 col-12" name="btn_Add"
                        type="button">Thêm</button></a>
            </div>
            <div class="col-2">
                <a href="index.php?ctrl=task"><button class="btn btn-outline-success p-2 mt-3 col-12" type="button">Quay
                        về</button></a>
            </div>
        </div>
    </form>
</body>