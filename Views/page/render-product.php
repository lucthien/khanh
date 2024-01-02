
<ul class="listing">
    <?php foreach ($product as $rows) : ?>
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
                <form action="index.php?controller=product&action=addToCart" method="post">
                    <input type="hidden" name="quantity" min="0" value="1">
                    <input type="hidden" name="id" value="<?= $rows['id_san_pham']; ?>">
                    <input type="hidden" name="name" value="<?= $rows['ten_san_pham']; ?>">
                    <input type="hidden" name="price" value="<?= $rows['gia']; ?>">
                    <button style="border: none; display: flex; cursor: pointer; background: none; margin-left: 20px;" type="submit" class="add-btn cart">
                        Cart
                    </button>
                </form>
            </div>
        </li>
    <?php endforeach ?>
</ul>