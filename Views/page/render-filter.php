


<ul class="listing">
    <?php foreach ($filter as $rows) : ?>
        <li class="product">
            <a class="img-wrapper" href="#">
                <img src="Public/image/<?php echo $rows['hinh_anh'] ?>" alt="" />
            </a>

            <div class="info">
                <a style="text-decoration: none; color: #fff;" href="index.php?controller=product&action=detail&id=<?php echo $rows["id_san_pham"]; ?>">
                    <div class="title"><?php echo $rows['ten_san_pham'] ?></div>
                </a>
                <div class="price"><?php echo number_format($rows['gia']) ?> <sup>đ</sup></div>
            </div>

            <div class="actions-wrapper">
                <a href="#" class="add-btn wishlist">Wishlist</a>
                <a href="#" class="add-btn cart">Cart</a>
            </div>
        </li>
    <?php endforeach ?>
</ul>