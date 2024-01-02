<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/css/home.css">
    <link rel="stylesheet" href="Public/css/product.css">
    <link rel="stylesheet" href="Public/css/pagination.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
</head>

<body>
    <div id="container">
        <?php
        include_once(PATH . "/Views/header/header.php");
        ?>
        <div class="container" style="display: flex;">
            <div class="filter">
                <div class="box-filter">
                    <h3>Loại sản phẩm</h3>
                    <a href="index.php?controller=product&action=list&name=product&limit=8&offset=0">Tất cả</a>
                    <?php foreach ($category as $fill) : ?>
                        <a name='link' href="index.php?controller=product&action=filter&id=<?php echo $fill['id_loai']; ?>"><?php echo $fill['ten_loai']; ?></a>
                    <?php endforeach ?>
                </div>
            </div>

            <?php

            if (isset($_GET['action']) == 'list' && isset($_GET['name']) == 'product') {
                include_once(PATH . '/Views/page/render-product.php');
            } else {
                include_once(PATH . '/Views/page/render-filter.php');
            }
            ?>
        </div>
        <?php
        if (isset($_GET['action']) == 'list' && isset($_GET['name']) == 'product') :
        ?>
            <ul class="page">
                <li class="page__btn"><i class="fa fa-arrow-left" aria-hidden="true"></i></li>
                <?php
                $limit = 8;
                $total_page = ceil($totalProduct / $limit);
                for ($i = 1; $i <= $total_page; $i++) :
                    // for ($i = 1; $i < 6; $i++) :
                ?>
                    <li class="page__numbers"> <a style="text-decoration:none;" href="index.php?controller=product&action=list&name=product&limit=<?php echo $limit; ?>&offset=<?php echo $i - 1; ?>"><?php echo $i; ?></a> </li>
                <?php
                endfor;
                ?>
                <li class="page__btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></li>
            </ul>
        <?php endif ?>
        <br>
        <?php
        include_once(PATH . "/Views/footer/footer.php");
        ?>
    </div>
    <script src="Public/js/main.js"></script>
    <script src="Public/js/filter.js"></script>
</body>

</html>