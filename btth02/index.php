<?php
    // Kết nối database
    include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="custom-border" style="border: 1px solid blue">
    <header>
        <?php
            include "layout/header.php";
        ?>
    </header>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div>
                    <img src="images/latin.png" class="img-fluid">
                </div>
                <div class="text-center">
                    <h5 class="text-primary" style="font-size: 16px;">TOP BÀI HÁT YÊU THÍCH</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="image-container">
                        <img src="images/caylagio.png" alt="" style="width: 300px; height: 200px;">
                        <p class="text-primary text-center">Cây, lá và gió</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-container">
                        <img src="images/cuocsong.png" alt="" style="width: 300px; height: 200px;">
                        <p class="text-primary text-center">Cuộc sống mến thương</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-container">
                        <img src="images/longme.png" alt="" style="width: 300px; height: 200px;">
                        <p class="text-primary text-center">Lòng mẹ</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-container">
                        <img src="images/phoiphai.png" alt="" style="width: 300px; height: 200px;">
                        <p class="text-primary text-center">Phôi phai</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="image-container">
                        <img src="images/noitinhyeu.png" alt="" style="width: 300px; height: 200px;">
                        <p class="text-primary text-center">Nơi tình yêu bắt đầu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php
            include "layout/footer.php";
        ?>
    </footer>
</body>
</html>