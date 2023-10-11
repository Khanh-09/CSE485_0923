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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <form class="card card-body bg-secondary" style="border-radius: 1dx;">
                        <h5 class="text-white">Sign In</h5>
                        <hr style="border: 1px solid;">
                        <div class="form-outline">
                            <label><i class="bi bi-person-fill"></i></label>
                            <input class="form-control " type="text" placeholder="username">
                        </div>
                        <div class="form-outline">
                            <label><i class="bi bi-key-fill"></i></label>
                            <input type="password" class="form-control" placeholder="password" />
                        </div>
                        <div class="">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" value=""/>
                                <label class="form-check-label text-white">Remember me</label>
                            </div>
                        </div>  
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-warning ml-auto" type="submit">Login</button>
                        </div>
                        <hr style="border: 1px solid;">    
                        <div>
                            <p class="text-center">Don't have an account? <a href="" class="text-decoration-none text-warning">Sign Up</a>
                            <br><a href="" class="text-decoration-none text-warning">Forgot your password?</a>
                            </p>
                        </div>
                   </form>    
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