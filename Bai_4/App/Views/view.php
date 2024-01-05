<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1.4_NguyenThaiToan</title>
    <script src="https://kit.fontawesome.com/754a43a651.js" crossorigin="anonymous"></script>
</head>
<style>
    .table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        border: 1px solid #ddd;
        font-family: 'Times New Roman', Times, serif;
    }

    .row-1 {
        background-color: #e7e7e7;
    }

    .edit {
        margin: 5px;
        color: green;
        cursor: pointer;
    }

    i {
        padding: 3px;

    }

    h1 {
        text-align: center;
    }
</style>

<body>
    <h1>Bảng phân công nhiệm vụ</h1>
    <table class="table">
        <thead>
            <tr class="row-1">
                <th><input type="checkbox"></th>
                <th scope="col">Name<i class="fa-solid fa-chevron-down"></i></th>
                <th scope="col">Email<i class="fa-solid fa-chevron-down"></th>
                <th scope="col">Phone<i class="fa-solid fa-chevron-down"></th>
                <th scope="col">Task<i class="fa-solid fa-chevron-down"></th>
                <th scope="col">Dealine<i class="fa-solid fa-chevron-down"></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($staff as $staff): ?>
                <tr>
                    <th scope="row"><input type="checkbox"></th>
                    <td>
                        <?= $staff['name'] ?>
                    </td>
                    <td>
                        <?= $staff['email'] ?>
                    </td>
                    <td>
                        <?= $staff['phone'] ?>
                    </td>
                    <td>
                        <?= $staff['task'] ?>
                    </td>
                    <td>
                        <?= $staff['deadline'] ?>
                    </td>
                    <td class="edit"><i class="fa-solid fa-pen-to-square"></i>Phân công nhiệm vụ</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>