<?php
$products = [
    [
        "id" => 0,
        "nama" => "Noir Timeless1800 96% Wireless",
        "harga" => "Rp1.223.000",
        "deskripsi" => "Keyboard Mechanical Premium dengan Switch Linear KTT KU Orange dan Support Hingga 3 Tipe Koneksi.",
        "gambar" => "https://www.noirgear.com/cdn/shop/files/timeless_1800Artboard_2_5923a441-04f7-4cb6-9209-50fb5991dcb3.jpg?v=1740037943&width=360",
        "stok" => 10
    ],

    [
        "id" => 1,
        "nama" => "VOYAGER68 v2 Lite 65%",
        "harga" => "Rp495.000",
        "deskripsi" => "Keyboard Mechanical 67-key yang Affordable dengan Isotone Red Switch.",
        "gambar" => "https://pressplayid.com/cdn/shop/files/Voyager68_V2_Lite.jpg?v=1730964657&width=600",
        "stok" => 9
    ],

    [
        "id" => 2,
        "nama" => "Nano68 Pro",
        "harga" => "Rp1.389.000",
        "deskripsi" => "Keyboard Mechanical Premium dengan Switch Magnetic yang Responsif dan Latensi Rendah.",
        "gambar" => "https://madlionskeyboard.com/wp-content/uploads/2024/11/nano68-pro-ttc-600x600.jpg",
        "stok" => 15
    ],

    [
        "id" => 3,
        "nama" => "Razer Huntsman V3 Pro Mini",
        "harga" => "Rp2.949.000",
        "deskripsi" => "Keyboard Gaming Mechanical dengan Layout 60% dari Brand Ternama Razer.",
        "gambar" => "https://assets2.razerzone.com/images/pnx.assets/a6e64e32c2201c68aeb3303e1c67c087/quick-actuation-adjustment-mode-500x500.webp",
        "stok" => 8
    ],

    [
        "id" => 4,
        "nama" => "Logitech MX Mechanical Mini",
        "harga" => "Rp2.369.000",
        "deskripsi" => "Keyboard Mechanical Minimalis yang Berfokus Pada Performa Oleh Logitech. ",
        "gambar" => "https://down-id.img.susercontent.com/file/id-11134207-7r98w-lmydcgskg5cv41",
        "stok" => 5
    ],

    [
        "id" => 5,
        "nama" => "Langtu GK65",
        "harga" => "Rp.459.000",
        "deskripsi" => "Keyboard Mechanical Affordable dengan Linear Gold Switch.",
        "gambar" => "https://ae01.alicdn.com/kf/S6cf28eb1cba84a1da76cbc49269009e51.jpg",
        "stok" => 6
    ],

    [
        "id" => 6,
        "nama" => "Ajazz AK820 Pro",
        "harga" => "Rp 820.000",
        "deskripsi" => "Keyboard Mechanical 75% dengan Ajazz Gift Switch.",
        "gambar" => "https://ajazzstore.com/cdn/shop/files/203A9818.jpg?v=1734504850",
        "stok" => 15
    ],

    [
        "id" => 7,
        "nama" => "Ajazz AK980",
        "harga" => "Rp1.029.000",
        "deskripsi" => "Keyboard Mechanical 98% dengan Knob Metal dan Cyan Cloud Switch .",
        "gambar" => "https://ajazzstore.com/cdn/shop/files/IMG_8316.png?v=1725936447",
        "stok" => 7
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedStore | Place to Find Your Keyboard</title>
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
