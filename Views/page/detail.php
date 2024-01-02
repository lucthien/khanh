<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/css/home.css">
    <link rel="stylesheet" href="Public/css/detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div id="container">
        <?php
        include_once(PATH . "/Views/header/header.php");
        ?>
        <div class="card-wrapper">

            <div class="card">

                <?php foreach ($detail as $row) : ?>
                    <div class="product-imgs">
                        <div class="img-display">
                            <div class="img-showcase">
                                <img src="Public/image/<?php echo $row['hinh_anh']; ?>" alt="">
                                <img src="Public/image/<?php echo $row['anh_1']; ?>" style="width: 100%;" alt="">
                                <img src="Public/image/<?php echo $row['anh_2']; ?>" alt="">
                                <img src="Public/image/<?php echo $row['anh_3']; ?>" alt="">
                            </div>
                        </div>
                        <div class="img-select">
                            <div class="img-item">
                                <a href="#" data-id="1">
                                    <img src="Public/image/<?php echo $row['hinh_anh']; ?>" style="width: 100px;" alt="">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="2">
                                    <img src="Public/image/<?php echo $row['mini_1']; ?>" style="width: 100px;" alt="">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="3">
                                    <img src="Public/image/<?php echo $row['mini_2']; ?>" style="width: 100px;" alt="">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="4">
                                    <img src="Public/image/<?php echo $row['mini_3']; ?>" style="width: 100px;" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- card right -->
                    <div class="product-content">
                        <h2 class="product-title"><?php echo $row['ten_san_pham']; ?></h2>
                        <?php foreach ($serial as $seri) : ?>
                            <a href="#" class="product-link"><?php echo $seri['thuong_hieu']; ?></a>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span><?php echo $row['danh_gia'] ?></span>
                            </div>
                            <div class="product-price">
                                <p class="last-price">Old Price: <span><?php echo number_format($row['gia']); ?></span></p>
                                <p class="new-price">New Price: <span><?php echo number_format(($row['gia'] - ($row['gia'] / 100) * 15)); ?>(15%)</span></p>
                            </div>

                            <div class="product-detail">
                                <h2>about this item: </h2>
                                <p><?php echo $row['mo_ta'] ?></p>
                                <ul>
                                    <li>Dòng: <span><?php echo $seri['dong'] ?></span></li>
                                    <li>Mẫu: <span><?php echo $seri['mau'] ?></span></li>
                                    <li>Màu sắc: <span><?php echo $seri['mau_sac'] ?></span></li>
                                    <li>Hệ điều hành: <span><?php echo $seri['he_dieu_hanh'] ?></span></li>
                                    <li>Màn hình: <span><?php echo $seri['man_hinh'] ?></span></li>
                                    <li>Card: <span><?php echo $seri['card'] ?></span></li>
                                    <li>CPU: <span><?php echo $seri['cpu'] ?></span></li>
                                </ul>
                                <div class="popup" id="popup">
                                    <div class="popup__content">
                                        <h2>Thông số kỹ thuật</h2>
                                        <ul>
                                            <li>Dòng: <span><?php echo $seri['dong'] ?></span></li>
                                            <hr>
                                            <li>Mẫu: <span><?php echo $seri['mau'] ?></span></li>
                                            <hr>
                                            <li>Màu sắc: <span><?php echo $seri['mau_sac'] ?></span></li>
                                            <hr>
                                            <li>Hệ điều hành: <span><?php echo $seri['he_dieu_hanh'] ?></span></li>
                                            <hr>
                                            <li>Màn hình: <span><?php echo $seri['man_hinh'] ?></span></li>
                                            <hr>
                                            <li>Card: <span><?php echo $seri['card'] ?></span></li>
                                            <hr>
                                            <li>CPU: <span><?php echo $seri['cpu'] ?></span></li>
                                            <hr>
                                            <li>Số nhân/luồng: <span><?php echo $seri['so_nhan'] ?></span></li>
                                            <hr>
                                            <li>Xung nhịp: <span><?php echo $seri['xung_nhip'] ?></span></li>
                                            <hr>
                                            <li>Xung boost: <span><?php echo $seri['xung_boost'] ?></span></li>
                                            <hr>
                                            <li>SSD: <span><?php echo $seri['ssd'] ?></span></li>
                                            <hr>
                                            <li>HDD: <span><?php echo $seri['hdd'] ?></span></li>
                                            <hr>
                                            <li>Ram: <span><?php echo $seri['ram'] ?></span></li>
                                            <hr>
                                            <li>Bluetooth: <span><?php echo $seri['bluetooth'] ?></span></li>
                                            <hr>
                                            <li>USB: <span><?php echo $seri['usb'] ?></span></li>
                                            <hr>
                                            <li>HDMI: <span><?php echo $seri['hdmi'] ?></span></li>
                                            <hr>
                                            <li>Trọng lượng: <span><?php echo $seri['trong_luong'] ?></span></li>
                                            <hr>
                                        </ul>
                                        <a href="index.php?controller=product&action=detail&id=<?php echo $seri['product_id']; ?>" class="button">Close</a>
                                    </div>
                                </div>
                                <div class="some-text">
                                    <a class="button" href="#popup">Xem thêm</a>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <div class="purchase-info" style="display: flex;">
                            <form action="index.php?controller=product&action=addToCart" method="post">
                                <input type="number" name="quantity" min="0" value="1">
                                <input type="hidden" name="id" value="<?= $row['id_san_pham']; ?>">
                                <input type="hidden" name="name" value="<?= $row['ten_san_pham']; ?>">
                                <input type="hidden" name="price" value="<?= $row['gia']; ?>">
                                
                                <!-- <button href="index.php?controller=product&action=addToCart&id=<?php echo $row['id_san_pham']; ?>&name=<?php echo $row['ten_san_pham']; ?>&price=<?php echo $row['gia']; ?>" style="background: #3366FF; text-decoration: none;" type="button" class="btn"> -->
                                <button style="background: #3366FF; text-decoration: none;" type="submit" class="btn">
                                    Add to Cart <i class="fa fa-shopping-cart"></i>
                                </button>
                            </form>
                            <button type="button" class="btn">Compare</button>
                        </div>
                        <div class="social-links">
                            <p>Share At: </p>
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <?php
        include_once(PATH . "/Views/footer/footer.php")
        ?>
    </div>
    <script src="Public/js/detail.js"></script>
    <script src="Public/js/main.js"></script>
</body>

</html>