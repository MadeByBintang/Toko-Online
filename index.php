<?php
$products = [
    [
        "id" => 0,
        "nama" => "Noir Timeless1800 96% Wireless",
        "harga" => "Rp1.223.000",
        "deskripsi" => "Laptop gaming dengan performa tinggi dan desain keren.",
        "gambar" => "https://www.noirgear.com/cdn/shop/files/timeless_1800Artboard_2_5923a441-04f7-4cb6-9209-50fb5991dcb3.jpg?v=1740037943&width=360",
        "stok" => 10
    ],

    [
        "id" => 1,
        "nama" => "Rexus Keyboard",
        "harga" => "Rp400.000",
        "deskripsi" => "Keyboard mechanical kere hore",
        "gambar" => "https://www.lg.com/content/dam/channel/wcms/id/monitor/gaming-ultragear/27gs60f-b/lg-com-pdp-kit_27gs60f_lg-ultragear_2024/gallery/02-gallery/ultragear-27gs60f-gallery-01-2010.jpg/_jcr_content/renditions/thum-1600x1062.jpeg",
        "stok" => 9
    ],

    [
        "id" => 2,
        "nama" => "Mouse Logitech G Pro X Superlight",
        "harga" => "Rp1.699.000",
        "deskripsi" => "Mouse gaming ringan dengan sensor HERO.",
        "gambar" => "https://ae01.alicdn.com/kf/H3836f0628d4f41efbfffe4440660d70cI.jpg",
        "stok" => 15
    ],

    [
        "id" => 3,
        "nama" => "Keyboard Razer Huntsman Mini",
        "harga" => "Rp1.649.000",
        "deskripsi" => "Keyboard mekanik optik dengan ukuran 60%.",
        "gambar" => "https://down-id.img.susercontent.com/file/b045879d7cfde91a9ef5c929602f8020",
        "stok" => 8
    ],

    [
        "id" => 4,
        "nama" => "Intel I9-14900k",
        "harga" => "Rp8.055.000",
        "deskripsi" => "Laptop gaming dengan performa tinggi dan desain keren.",
        "gambar" => "https://images.tokopedia.net/img/cache/700/VqbcmM/2024/1/7/83a3cff1-7f4e-4cc0-a323-138dbf8e1be9.jpg",
        "stok" => 10
    ],

    [
        "id" => 5,
        "nama" => "AMD Ryzen Threadripper PRO 7995WX",
        "harga" => "Rp. 189.460.000",
        "deskripsi" => "Monitor gaming 165Hz dengan resolusi QHD.",
        "gambar" => "https://images.tokopedia.net/img/cache/700/VqbcmM/2023/11/23/0036b9ea-07da-4150-bdd5-7697a3d1e247.jpg",
        "stok" => 5
    ],

    [
        "id" => 6,
        "nama" => "AMD Ryzen 9 5950X",
        "harga" => "Rp7.621.000",
        "deskripsi" => "Mouse gaming ringan dengan sensor HERO.",
        "gambar" => "https://images.tokopedia.net/img/cache/700/VqbcmM/2021/4/25/91dee19a-6eca-4154-8c96-da9c1a161eeb.jpg",
        "stok" => 15
    ],

    [
        "id" => 7,
        "nama" => "AMD Ryzen 7 7800X3D",
        "harga" => "Rp7.907.000",
        "deskripsi" => "Keyboard mekanik optik dengan ukuran 60%.",
        "gambar" => "https://images.tokopedia.net/img/cache/250-square/VqbcmM/2024/1/10/34dfbd99-bca3-4b2e-bbda-d12ee6957a41.jpg",
        "stok" => 8
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedStore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt="logo" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="account.html">Account</a></li>
                    </ul>
                </nav>
                <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Give Your Workout <br> A New Style!</h1>
                    <p>Success isn't always about greatness. It;s about consistency. Consistent <br> hard work gains
                        success. Greatness will come.</p>
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/Keyboard_Green_angle_1-scaled-removebg-preview.png">
                </div>
            </div>
        </div>
    </div>

    <!-- Feadtued Categories -->

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="https://kbdfans.com/cdn/shop/files/Agar60_8362cc2f-b57e-4629-bdb3-d57e2e70df9d_720x.jpg?v=1741663519">
                </div>
                <div class="col-3">
                    <img src="https://kbdfans.com/cdn/shop/files/15_659e57f2-e2bc-4ebf-9782-b4ee551ff619_720x.jpg?v=1735537687">
                </div>
                <div class="col-3">
                    <img src="https://kbdfans.com/cdn/shop/files/d92e076f69cb1a6f81c9bab8cd8f57a2_3d86aa8a-c35b-4e2d-951f-be0e0d664df1_720x.jpg?v=1732260233">
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products -->

    <div class="small-container">
        <h2 class="title">Produk Unggulan</h2>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-4">
                    <a href="product_details.php?id=<?php echo $product['id']; ?>">
                        <img src="<?php echo $product['gambar']; ?>" alt="<?php echo $product['nama']; ?>">
                    </a>
                    <h4><?php echo $product['nama']; ?></h4>
                    <p><?php echo $product['harga']; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <!-- Testimonial -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        industry's standard dummy text.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/user-1.png">
                    <h3>Sean Parker</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        industry's standard dummy text.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/user-2.png">
                    <h3>Mike Smith</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        industry's standard dummy text.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/user-3.png">
                    <h3>Mabel Joe</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Brands -->

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-oppo.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-coca-cola.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-paypal.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-philips.png">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Samwit Adhikary</p>
        </div>
    </div>

    <!-- javascript -->

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            } else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>

</body>

</html>
