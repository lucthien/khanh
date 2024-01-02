<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title></title>
</head>

<body>
    <div id="container">
        <a href="index.php">
            <div class="cart-bar" style="background: gray; width: 2%; height: 25px; padding: 0 5px; border-top-left-radius: 50px; border-bottom-left-radius: 50px;">
                <div class="back" style="width: 100%; height: 100%; display: flex; align-items: center;">
                    <i style="font-size: 20px; color: #fff;" class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                </div>

            </div>
        </a>

        <div class="shopping-cart" style="margin-top: 70px;">
            <h1>Shopping Cart</h1>

            <div class="column-labels">
                <label class="product-image">Image</label>
                <label class="product-details">Name</label>
                <label class="product-price">Price</label>
                <label class="product-quantity">Quantity</label>
                <label class="product-removal">Action</label>
                <label class="product-line-price">Total</label>
            </div>
            <?php foreach ($cart as $i) : ?>
                <div class="product">
                    <div class="product-image">
                        <img src="Public/image/<?php echo $i['hinh_anh'] ?>">
                    </div>
                    <div class="product-details">
                        <div class="product-title"><?php echo $i['ten_san_pham'] ?></div>
                    </div>
                    <div class="product-price"><?php echo number_format($i['gia']) ?></div>
                    <div class="product-quantity">
                        <input type="number" value="<?php echo $i['quantity']; ?>" min="1" disabled>
                    </div>
                    <div class="product-removal">
                        <button class="remove-product">
                            <a href="index.php?controller=product&action=removeCart&id=<?= $i['id']; ?>" style="cursor: pointer; color: #fff; text-decoration: none;">
                                Remove
                            </a>
                        </button>
                    </div>
                    <div class="product-line-price"><?php echo number_format($i['gia'] * $i['quantity']) ?></div>
                </div>
            <?php endforeach ?>
            <?php foreach ($total_quantity as $i) : ?>
                <?php foreach ($sale as $row) : ?>
                    <form action="index.php?controller=product&action=invoice" method="POST">
                        <?php foreach ($cart as $item) :?>
                            <input type="hidden" name="id" value="<?=$item['id'];?>">
                        <?php endforeach?>
                        <div class="totals">
                            <div class="totals-item">
                                <label>Total Quantity</label>
                                <div class="totals-value" id="cart-subtotal"><?= $i[0]; ?></div>
                                <input type="hidden" name="total_quantity" value="<?= $i[0]; ?>">
                            </div>
                            <div class="totals-item">
                                <label>Sale</label>

                                <div class="totals-value" id="cart-tax">$<?= number_format($row[0] * $i[0]) ?> - $<?= number_format(($row[0] * $i[0]) / 100 * 15) ?> (15%)</div>
                                <input type="hidden" name="sale" value="<?=($row[0] * $i[0]) / 100 * 15 ?>">
                            </div>
                            <div class="totals-item">
                                <label>Shipping</label>
                                <div class="totals-value" id="cart-shipping">$30000</div>
                                <input type="hidden" name="shipping" value="30000">
                            </div>
                            <div class="totals-item totals-item-total">
                                <label>Grand Total</label>
                                <div class="totals-value" id="cart-total">$<?= number_format((($row[0] * $i[0]) - ($row[0] * $i[0]) / 100 * 15) - 30000) ?></div>
                                <input type="hidden" name="total" value="<?= (($row[0] * $i[0]) - ($row[0] * $i[0]) / 100 * 15) - 30000 ?>">
                            </div>
                        </div>
                        <button type="submit" style="text-decoration: none;" class="checkout">Checkout</button>
                    </form>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
    </div>
    <script src="Public/js/cart.js"></script>
    <script src="Public/js/main.js"></script>
    <script>
        window.addEventListener('load', function() {
            if (window.location.href == 'http://localhost:3000/PHP/khanh/index.php?controller=product&action=cart&pay=done') {
                alert('Thanh toán thành công!');
                window.location = 'http://localhost:3000/PHP/khanh/index.php';
            }
        })
    </script>
</body>

</html>