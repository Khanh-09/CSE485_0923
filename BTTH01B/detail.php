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
    <link rel="stylesheet" href="./bootstrap-5.3.0-dist/css/bootstrap.min.css">
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
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="images/caylagio.png" alt="" style="width: 300px; height: 200px; margin-left: 60px; margin-top: 20px;">
                    </div>
                </div>
                <div class="col-md-7">
                    <h5 class="text-primary mt-3">Cây và gió</h5>
                    <p><strong>Bài hát:</strong> Cây và gió</p>
                    <p><strong>Thể loại:</strong> Nhạc trữ tình</p>
                    <p><strong>Tóm tắt:</strong>Em và anh, hai đứa quen nhau thật tình cơ. Lời hát của anh từ bài hát "Cây và gió" đã làm tâm
                        hôn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận
                        sâu trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt hay thực ra em
                        không dám đối diện với chính mình.
                    </p>
                    <p><strong>Nội dung:</strong>Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát "Cây và gió đã làm
                        tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy
                        nghĩ tận sâu trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay
                        thực ra em không dám đối diện với chính mình.
                    </p>
                    <p><strong>Tác giả:</strong>Nguyễn Văn Giả</p>
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