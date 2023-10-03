<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bài hát</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <a href="" class='btn btn-success'>Add a new song</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tên bài hát</th>
                    <th scope="col">Ca sĩ</th>
                    <th scope="col">Id thể loại</th>
                    <th scope="col">Hoạt động</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($songs as $song) { 
            ?>
                <tr>
                    <th scope="row"><?= $song->getId(); ?></th>
                    <td><?= $song->getTenBaiHat(); ?></td>
                    <td><?= $song->getCaSi(); ?></td>
                    <td><?= $song->getIdTheLoai(); ?></td>
                    <td>
                        <a href=""><i class="bi bi-pencil-fill"></i></a>
                        <a href=""><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div> 
</body>
</html>