<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
</head>

<body>
    <div id="container">
        <?php 
            include_once (PATH . "/Views/header/header.php");
        ?>
        

        <section>
            <div class="list-home">
                <div class="wrapper-list">

                    <div class="list-product_home">
                        <div class="ads">
                            <img class="image-ads" src="Public/image/ads.jpg" style="width: 100%; height: 300px; border-radius: 10px;" alt="">
                        </div>
                        <?php foreach ($prod as $item) : ?>
                            <div class="list-item">
                                <img class="items-image" src="Public/image/<?php echo $item['hinh_anh']; ?>" style="width: 90%; height: 200px; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);" alt=""> <br> <br>
                                <label class="name" for=""><?php echo $item['ten_san_pham'] ?></label> <br>
                                <label style="color: red;" for=""><?php echo number_format($item['gia']); ?> vnđ </label>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="blog-home">
                <div class="bg-blog">
                    <a href="#" class="btn-hover">
                        <div class="layer-hover">
                        </div>
                    </a>
                    <p class="btn-read">Xem Thêm</p>
                </div>
            </div>
            <div class="signature">
                <div class="title-signature">
                    <h1>SIGNATURE</h1>
                    <h1>By AZ Store</h1>
                    <p>Nơi bạn thoả mã đam mê với giày, nơi đây chúng tối có hầu hết các loại giày mẫu mã đẹp cho các bạn chọn.</p>
                    <br> <br>
                    <a href="">
                        Tìm hiểu thêm
                    </a>
                </div>
                <div class="slider">
                    <div class="list">
                        <div class="item">
                            <img src="Public/image/signature-1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="Public/image/signature-2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="Public/image/signature-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="buttons">
                        <button id="prev">
                            < </button>
                                <button id="next">></button>
                    </div>
                    <ul class="dots">
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="news">
                <div class="title-news">
                    <img src="Public./image/icon-news.png" style="width: 50px;" alt="">
                    <h2>News</h2>
                </div>
                <div class="wrapper-daily">
                    <div class="title-daily">
                        <h3>Daily</h3>
                    </div>
                    <div class="content-daily">
                        <div class="box-daily">
                            <img src="Public/image/news-1.jpg" alt=""> <br>
                            <div class="date-submitted">
                                <span>12/12/2023</span>
                            </div>
                            <div class="title-post">
                                <a href="#">
                                    <h3>41+ Cách phối đồ Noel, outfit đi chơi Giáng Sinh đẹp ấn tượng</h3>
                                </a>
                            </div>
                            <div class="content-post">
                                <p>
                                    Phối đồ Noel cho nam thu hút mọi ánh nhìn
                                    Đón chào mùa Noel với sự lịch lãm và thu hút! Những thông tin dưới đây sẽ mang đến cho bạn các gợi ý về cách phối đồ sao cho nam giới có thể tỏa sáng và thu hút mọi ánh nhìn trong những dịp lễ quan trọng.

                                    1. Phối áo len cổ lọ cùng quần âu
                                    Áo len cổ lọ và quần âu là một bộ đôi hoàn hảo để tạo nên vẻ ngoài ấm áp và lịch lãm trong mùa Noel. Bạn có thể chọn áo len màu đỏ trầm kết hợp với quần âu đen, tạo nên một diện mạo trang nhã và thu hút mọi ánh nhìn.
                                    Để trông gọn gàng hơn, chàng có thể sơ vin áo len với quần tây bằng chiếc thắt lưng da, mang lại cảm giác ôm gọn cơ thể và tôn lên vóc dáng. Khi kết hợp với giày da lịch lãm, chàng sẽ sở hữu vẻ ngoài chuẩn lãng tử trời Tây khi đi chơi noel.
                                </p>
                            </div>
                        </div>
                        <div class="box-daily">
                            <img src="Public/image/casual.jpg" alt=""> <br>
                            <div class="date-submitted">
                                <span>12/12/2023</span>
                            </div>
                            <div class="title-post">
                                <a href="#">
                                    <h3>Giày casual là gì? 8+ Mẫu giày Casual nam thịnh hành hiện nay</h3>
                                </a>
                            </div>
                            <div class="content-post">
                                <p>
                                    Giày casual nam là gì?
                                    Casual là thuật ngữ miêu tả sự đơn giản và thoải mái. Dòng giày casual cũng vậy, bao gồm các loại giày như giày thể thao và giày da nam.
                                    Thông thường, giày casual nam có kiểu dáng đơn giản, không có quá nhiều họa tiết hay thiết kế độc đáo và ưa chuộng những màu sắc trung tính. Đa số đều được làm từ chất liệu da, vải hoặc da tổng hợp.

                                    Nếu bạn biết cách kết hợp chúng một cách sáng tạo với bộ suit, caravat, giày tây nam phong cách casual sẽ tạo nên vẻ ngoài thanh lịch. Outfit này hòa quyện giữa sự trẻ trung và phong cách.
                                </p>
                            </div>
                        </div>
                        <div class="box-daily">
                            <img src="Public/image/black-friday.jpg" alt=""> <br>
                            <div class="date-submitted">
                                <span>12/12/2023</span>
                            </div>
                            <div class="title-post">
                                <a href="#">
                                    <h3>Black Friday là gì? Hé lộ 6 Tuyệt chiêu săn sale ngày Black Friday</h3>
                                </a>
                            </div>
                            <div class="content-post">
                                <p>
                                    Black Friday là gì? Tìm hiểu từ A – Z
                                    Đọc ngay những thông tin dưới đây, để bạn có thể hiểu rõ hơn về sự kiện Black Friday lớn có quy mô toàn thế giới này nhé!

                                    1. Black Friday là ngày gì? Black Friday 2023 vào ngày nào?
                                    Black Friday hay còn được biết đến với cái tên “Thứ 6 đen tối”, là một ngày mua sắm lớn diễn ra sau ngày Lễ Tạ ơn ở Hoa Kỳ. Ngày này thường rơi vào ngày thứ sáu sau ngày Lễ Tạ ơn. Nó được xem là ngày khởi đầu chính thức cho mùa mua sắm lễ hội.

                                    Ngày hội Black Friday thường được đánh dấu bởi các chương trình giảm giá, ưu đãi và khuyến mãi hấp dẫn từ các cửa hàng và nhà bán lẻ.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-blog">
                    <div class="title-blog">
                        <h3>Blog</h3>
                    </div>
                    <div class="content-blog">
                        <div class="box-blog">
                            <img src="Public/image/blog-1.jpg" alt=""> <br>
                            <div class="date-submitted">
                                <span>12/12/2023</span>
                            </div>
                            <div class="title-post">
                                <a href="#">
                                    <h3>Tuyệt chiêu phối đồ với phong cách Basic nam đầy lịch lãm và nam tính</h3>
                                </a>
                            </div>
                            <div class="content-post">
                                <p>
                                    Tìm hiểu phong cách Basic là gì?
                                    Với những người đam mê thời trang, chắc chắn hiểu được phong cách Basic nam thường được sử dụng để miêu tả một phong cách trang phục đơn giản, cơ bản và dễ dùng. Phong cách thời trang nam này tập trung vào những món đồ cơ bản, không quá phô trương hoặc phức tạp.
                                    Những trang phục như áo sơ mi trắng, áo polo đơn giản, áo len đen, quần jeans, giày sneaker trắng,… mà có trong tủ quần áo hàng ngày của bạn, được coi là trang phục theo phong cách Basic. Với sự tối giản, phong cách này có gam màu trung tính như trắng, đen, nâu hay be,…
                                </p>
                            </div>
                        </div>
                        <div class="box-blog">
                            <img src="Public/image/blog-2.jpg" alt=""> <br>
                            <div class="date-submitted">
                                <span>12/12/2023</span>
                            </div>
                            <div class="title-post">
                                <a href="#">
                                    <h3>Lookbook là gì? Hé lộ 5 Tips để có một bộ lookbook ấn tượng</h3>
                                </a>
                            </div>
                            <div class="content-post">
                                <p>
                                    Bạn hiểu Lookbook là gì? Chụp lookbook là gì?
                                    Lookbook không chỉ đơn thuần là một bộ ảnh, mà còn là một video thời trang được tạo ra dựa trên tiêu chuẩn và ý tưởng riêng, phù hợp với từng sản phẩm hay thương hiệu.
                                    Thường được thiết kế dưới dạng một tài liệu nhỏ in trên giấy màu, lookbook kết hợp sự sáng tạo trong việc sắp xếp màu sắc, bố cục để truyền tải thông điệp với giá trị của thương hiệu tới khách hàng và người dùng.
                                </p>
                            </div>
                        </div>
                        <div class="box-blog">
                            <img src="Public/image/blog-3.jpg" alt=""> <br>
                            <div class="date-submitted">
                                <span>12/12/2023</span>
                            </div>
                            <div class="title-post">
                                <a href="#">
                                    <h3>Phối đồ với tất cao cổ thời trang cho nam, nữ trendy xu hướng nhất</h3>
                                </a>
                            </div>
                            <div class="content-post">
                                <p>
                                    Cách phối đồ với tất cao cổ nam đầy năng động
                                    Phối đồ với tất cao cổ chưa bao giờ là khó nếu bạn chưa biết đến những cách phối đồ đầy lịch lãm và cá tính cho nam giới sau đây!

                                    1. Mix áo phông và quần short với tất cao cổ
                                    Chắc hẳn đây là outfit đặc trưng vào những ngày hè nắng nóng của các anh chàng. Phù hợp cho những buổi đi chơi, dã ngoại, các anh chàng có thể dễ dàng lựa chọn.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
            include_once (PATH . "/Views/footer/footer.php");
        ?>
    </div>



    <script src="Public/js/main.js"></script>
</body>

</html>