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
        <h2 class="text-center mt-4">PHÂN CÔNG</h2>
        <main class="d-flex justify-content-center">

            <div class="col-5">
                <form id="" action="?url=AssignmentController/insertAssignment/<?= $task['id'] ?>" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Ngày tạo</label>
                        <input type="date" id="creatd_at" name="creatd_at" class="form-control" aria-label="First name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Danh sách nhân viên</label>
                        <select name="users_id" id="users_id" class="form-control">
                            <option>Vui lòng chọn nhân viên</option>
                            <?php
                            foreach ($users as $user) {
                                ?>
                                <option value="<?= $user['id'] ?>">
                                    <?= $user['fullname'] ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-primary" value="Phân công">
                    </div>
                    <div class="float-end">
                        <a href="?url=TaskController/taskPage" type="button" class="btn btn-secondary">Quay về</a>
                    </div>
                </form>
            </div>
        </main>
        <!-- MAIN -->
    </section>