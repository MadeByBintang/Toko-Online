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
        "deskripsi" => "Keyboard Mechanical Minimalis yang Berfokus Pada Performa Oleh Logitech.",
        "gambar" => "https://down-id.img.susercontent.com/file/id-11134207-7r98w-lmydcgskg5cv41",
        "stok" => 5
    ],

    [
        "id" => 5,
        "nama" => "Langtu GK65",
        "harga" => "Rp459.000",
        "deskripsi" => "Keyboard Mechanical Affordable dengan Linear Gold Switch.",
        "gambar" => "https://ae01.alicdn.com/kf/S6cf28eb1cba84a1da76cbc49269009e51.jpg",
        "stok" => 6
    ],

    [
        "id" => 6,
        "nama" => "Ajazz AK820 Pro",
        "harga" => "Rp820.000",
        "deskripsi" => "Keyboard Mechanical 75% dengan Ajazz Gift Switch.",
        "gambar" => "https://ajazzstore.com/cdn/shop/files/203A9818.jpg?v=1734504850",
        "stok" => 15
    ],

    [
        "id" => 7,
        "nama" => "Ajazz AK980",
        "harga" => "Rp1.029.000",
        "deskripsi" => "Keyboard Mechanical 98% dengan Knob Metal dan Cyan Cloud Switch.",
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
    <title>Product | RedStore</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><h2>REDSTORE</h2></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!-- Single Products -->
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $product = null;

        foreach ($products as $item) {
            if ($item['id'] == $id) {
                $product = $item;
                break;
            }
        }

        if ($product) {
    ?>
            <div class="small-container single-product">
                <div class="row">
                    <div class="col-2">
                        <img src="<?php echo $product['gambar']; ?>" width="100%" id="ProductImg">
                    </div>
                    <div class="col-2">
                        <p>Home / Produk</p>
                        <h1><?php echo $product['nama']; ?></h1>
                        <h4><?php echo $product['harga']; ?></h4>
                        <p>Stok: <?php echo $product['stok']; ?></p>
                        <input type="number" value="1" min="1" max="<?php echo $product['stok']; ?>">
                        <a href="#" class="btn">Tambah ke Keranjang</a>
                        <h3>Deskripsi Produk <i class="fa fa-indent"></i></h3>
                        <p><?php echo $product['deskripsi']; ?></p>
                    </div>
                </div>
            </div>
    <?php
        } else {
            echo "<p>Produk tidak ditemukan.</p>";
        }
    } else {
        echo "<p>ID produk tidak diberikan.</p>";
    }
    ?>
    <!-- title -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
        </div>
    </div>
    <!-- Products -->
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98w-lmydcgskg5cv41">
                <h4>Logitech MX Mechanical Mini</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp2.369.000</p>
            </div>
            <div class="col-4">
                <img src="https://ae01.alicdn.com/kf/S6cf28eb1cba84a1da76cbc49269009e51.jpg">
                <h4>Langtu GK65</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp459.000</p>
            </div>
            <div class="col-4">
                <img src="https://ajazzstore.com/cdn/shop/files/203A9818.jpg?v=1734504850">
                <h4>Ajazz AK820 Pro</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp820.000</p>
            </div>
            <div class="col-4">
                <img src="https://ajazzstore.com/cdn/shop/files/IMG_8316.png?v=1725936447">
                <h4>Ajazz AK980</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp1.029.000</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Mata Kuliah</h3>
                    <p>Pemrograman Web II</p>
                </div>
                <div class="footer-col-2">
                    <h3>REDSTORE</h3>
                    <p>Place to Find Your Keyboard.
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Adrian Bintang Saputera</h3>
                    <ul>
                        <li>2310817110006</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Muhammad Azrianzan</h3>
                    <ul>
                        <li>2310817210003</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2025 - Adrian Bintang Saputera, Muhammad Azrianzan</p>
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
