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
        <h2 class="text-center mt-4">CHỈNH SỬA</h2>
        <main class="d-flex justify-content-center">

            <div class="col-5">
                <form action="?url=AssignmentController/updateAssignment/<?= $assignment['id'] ?>" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Ngày tạo</label>
                        <input type="date" value="<?= $assignment['creatd_at'] ?>" id="creatd_at" name="creatd_at"
                            class="form-control" aria-label="First name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ID Task</label>
                        <select name="tasks_id" id="tasks_id" class="form-control">
                            <option>
                                <?= $assignment['tasks_id'] ?>
                            </option>
                            <?php
                            foreach ($tasks as $task) {
                                ?>
                                <option value="<?= $task['id'] ?>">
                                    <?= $task['id']
                                        ?>
                                    (
                                    <?= $task['name'] ?>)
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Danh sách nhân viên</label>
                        <select name="users_id" id="users_id" class="form-control">
                            <option>
                                <?= $assignment['users_id'] ?>
                            </option>
                            <?php
                            foreach ($users as $user) {
                                ?>
                                <option value="<?= $user['id'] ?>">
                                    <?= $user['id'] ?>(
                                    <?= $user['fullname'] ?>)
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái</label>
                        <select name="status" id="status" class="form-control">
                            <option value="0" <?= ($assignment['status'] == 0) ? 'selected' : '' ?>>Đang thực hiện</option>
                            <option value="1" <?= ($assignment['status'] == 1) ? 'selected' : '' ?>>Chưa hoàn thành
                            </option>
                            <option value="2" <?= ($assignment['status'] == 2) ? 'selected' : '' ?>>Đã hoàn thành</option>
                        </select>
                    </div>
                    <input type="hidden" name="" id="" value="<?= $hidden ?>">
                    <div class="mb-3">
                        <button type="submit" class="form-control btn btn-primary">Chỉnh sửa</button>
                    </div>
                    <div class="float-end">
                        <a href="?url=AssignmentController/assignmentPage" type="button" class="btn btn-secondary">Quay
                            về</a>
                    </div>
                </form>
            </div>
        </main>
        <!-- MAIN -->
    </section>