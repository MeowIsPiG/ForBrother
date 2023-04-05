<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> • บริษัท จู ซิน หยวน เทรดดิ้ง จำกัด</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <header>
        <!-- Navbar -->
        <?php include_once __DIR__ . './component/Navbar.php'; ?>
    </header>
    <main class="bg">
        <div class="row justify-content-center">
            <img class="img-fluid" src="./img/QrcodeJuxin.jpg" alt="ไม่พบรูปภาพ">
        </div>
        <div class="row justify-content-center p-3">
            <div id="carouselSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/2.png" class="d-block w-50" alt="ไม่พบรูปภาพ" style="margin: auto;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/3.png" class="d-block w-50" alt="ไม่พบรูปภาพ" style="margin: auto;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/4.png" class="d-block w-50" alt="ไม่พบรูปภาพ" style="margin: auto;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/5.png" class="d-block w-50" alt="ไม่พบรูปภาพ" style="margin: auto;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3 p-3">
                <div class="card shadow-sm">
                    <img src="./img/what is durian.jpg">
                    <div class="card-body">
                        <p>
                            <font style="color: black; font-size: large; margin:auto;"><b>ทุเรียนคืออะไร ?</b></font>
                        </p>
                        <p class="card-text">
                            ทุเรียนเป็นผลไม้เมืองร้อนที่มีชื่อเสียงที่สุดในเอเชียตะวันออกเฉียงใต้และมีชื่อเสียงในฐานะ
                            “ราชาผลไม้เมืองร้อน”</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <form action="th-durian-story.html" method="post">
                                    <button style="background-color: #009062; border-color: #d2ad5b; color: white;" class="btn btn-sm btn-outline-secondary">อ่านเพิ่มเติม <i class="fa-solid fa-caret-right" style="color: #d4ff00;"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3 p-3">
                <div class="card shadow-sm">
                    <img src="./img/no-photo.png" width="50%" height="50%">
                    <div class="card-body">
                        <p>
                            <font style="color: black; font-size: large; margin:auto;"><b>ข่าวประชาสัมพันธ์ </b></font>
                        </p>
                        <p class="card-text">รอการอัพเดตข้อมูล</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <form action="th-about-us.html" method="post">
                                    <button style="background-color: #009062; border-color: #d2ad5b; color: white;" class="btn btn-sm btn-outline-secondary">อ่านเพิ่มเติม <i class="fa-solid fa-caret-right" style="color: #d4ff00;"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
    <?php include_once __DIR__. './component/Footer.php' ?>
    </footer>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>