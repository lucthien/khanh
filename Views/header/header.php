<div class="top">
    <div class="location">
        <img class="location-img" src="Public/image/location.jpg" alt="">
        <label class="text-locate" for="">147 Cửa hàng khắp cả nước </label>

    </div>
    <div class="call">
        <img class="call-img" src="Public/image/call.jpg" alt="">
        <label class="number-call" for="">18006936</label>
    </div>
    <?php if (!isset($_COOKIE['ckus'])) : ?>
        <a style="cursor: pointer; margin-left: 100px; padding: 5px 10px; border: 1px solid #000; border-radius: 30px;" href="index.php?controller=auth&action=signin" class="user">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
        </a>
    <?php else : ?>
        <a style="cursor: pointer; margin-left: 100px; padding: 5px 10px; border: 1px solid #000; border-radius: 30px;" href="index.php?controller=auth&action=logout" class="user">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
        </a>
    <?php endif ?>


</div>
<header>
    <div class="wrapper">
        <div class="header-logo">
            <a class="home" href="#"><img class="logo" src="Public/image/logo.png" alt=""></a>
        </div>
        <div class="menu">
            <ul class="main-menu">
                <a class="link-menu" href="index.php">
                    <li class="item-item">Home</li>
                </a>
                <?php foreach ($menu as $row) : ?>
                    <a class="link-menu" href="index.php?controller=product&action=list&name=<?php echo $row["slug"]; ?>&limit=8&offset=0">
                        <li class="item-menu"><?php echo $row['name']; ?></li>
                    </a>
                <?php endforeach ?>
                <li class="item-menu" style="margin-left: 150px; font-size: 20px;">
                    <div class="circle" style="width: 15px; height: 15px; border-radius: 50%; position: absolute; font-size: 12px; color: red; margin-left: 15px; font-weight: bold;">
                        <p style="margin-left: 4px;"><?php echo $sl;?></p>
                    </div>
                    <a href="index.php?controller=product&action=cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>
</header>
<main>
    <div class="home-banner">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="Public/image/banner-1.jpg" style="width: 100%; height: 500px;" alt="">
            </div>
            <div class="mySlides fade">
                <img src="Public/image/banner-2.jpg" style="width: 100%; height: 500px;" alt="">
            </div>
            <div class="mySlides fade">
                <img src="Public/image/banner-3.jpg" style="width: 100%; height: 500px;" alt="">
            </div>
        </div>
    </div>
</main>