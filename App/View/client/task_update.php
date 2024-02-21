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
            <h2 class="text-center">CHỈNH SỬA CÔNG VIỆC</h2>
            <div class="d-flex justify-content-center">
                <form action="?url=TaskController/updateTask/<?= $id ?>" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Tên công việc</label>
                        <input type="text" id="name" name="name" value="<?= $data['name'] ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Thời hạn</label>
                        <input type="date" id="dealine" name="dealine" value="<?= $data['dealine'] ?>"
                            class="form-control" aria-label="First name">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" <?= ($data['status'] == 1) ? 'selected' : '' ?>>Task đang mở</option>
                            <option value="2" <?= ($data['status'] == 2) ? 'selected' : '' ?>>Task đã đóng</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chi tiết công việc</label><br>
                        <textarea name="description" id="description" cols="60" rows="5"><?= $description ?></textarea>
                    </div>
                    <input type="hidden" name="" id="" value="<?= $hidden ?>">
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-primary" value="Chỉnh sửa">
                    </div>
                    <div class="float-end">
                        <a href="?url=TaskController/taskPage" type="button" class="btn btn-secondary">Quay về</a>
                    </div>
                </form>
            </div>
        </main>
        <!-- MAIN -->
    </section>