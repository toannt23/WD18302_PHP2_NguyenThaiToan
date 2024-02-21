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
            <h2 class="text-center">THÊM CÔNG VIỆC</h2>
            <div class="d-flex justify-content-center">
                <form class="" action="?url=TaskController/insertTask" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Tên công việc</label>
                        <input type="text" name="name" class="form-control" aria-label="First name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Thời hạn</label>
                        <input type="date" name="dealine" class="form-control" aria-label="First name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chi tiết công việc</label><br>
                        <textarea name="description" id="" cols="60" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-primary" value="Thêm">
                    </div>
                    <div class="float-end">
                        <a href="?url=TaskController/taskPage" type="button" class="btn btn-secondary">Quay về</a>
                    </div>
                </form>
            </div>
        </main>
        <!-- MAIN -->
    </section>