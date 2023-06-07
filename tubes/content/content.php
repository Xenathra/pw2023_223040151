<?php 
   //koneksi DMBS
        require '../functions.php';
        $id = $_GET['id'];

        $content_cons = query('SELECT * FROM console_content');
        $content_cons = query("SELECT * FROM console_content 
                            WHERE id_console_content = '$id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="content.css">
    <script src="https://kit.fontawesome.com/8531b50185.js" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    
    
</head>

<body>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- navbar-start -->
    <?php require('partials/nav-cont.php'); ?>
    <!-- navbar-end -->

    <!-- content-start -->
    <div class="content-wrapper">        
        <main>
        <!-- detail item -->
        
        <br id="isi1"><br><br><br>
        <?php foreach ( $content_cons as $c_cons) :?>
            <ul>
        <div class="containers">                
                <!-- judul -->
                <li><?= $c_cons['judul'] ;?></li>
                <!-- subjudul -->
                <p style="font-weight: bold;"><?= $c_cons['sub_judul'] ;?></p>
                <!-- isi -->
                <p><?= $c_cons['isi'] ;?></p>
                
        </div>
        <!-- note untuk content -->
        <!-- kasih tutup ul --></ul>
        <!-- kasih margin bottom di containers -->
        <br id="isi2"><br><hr><br><br>
        <?php endforeach ; ?>
        
        
        <br id="isi4"><br><hr><br><br>     
                <!-- content-4 -->
        <div class="containers">
                    <li>Jenis-Jenis Nintendo Switch</li>
                        
                        <!-- penjelasan isi-1-start -->
                            <p>Sebuah console yang dimana berbeda dari console-console yang lain, jadi nintendo switch ini bisa dimainkan di TV dengan menggunakan dock yang istilahnya memonitoring ke TV, lalu console ini memiliki ukuran yang compact.</p>
                            <p>Nintendo Switch juga adalah konsol video game hybrid yang dikembangkan oleh Nintendo dan dirilis di seluruh dunia di sebagian besar wilayah pada tanggal 3 Maret 2017. Konsol itu sendiri adalah tablet yang dapat dipasang ke konsol rumah atau digunakan sebagai perangkat portabel, menjadikannya konsol hybrid yang sangat menghibur.</p>
        <br>
                    <!-- penjelasan isi-1-end -->
                        <p style="font-weight: bold;">Nintendo Switch V2 (new)</p>
                        <!-- penjelasan isi-2-start -->
                            <p>Penjelasan nya hampir sama tetapi ada perbedaan sedikit, dimana Nintendo Switch V2 ini memiliki prosesor yang lebih kuat tetapi itu mempengaruhi baterai life nya,  Nintendo mengklaim bahwa baterai nya bisa bertahan hingga 4 - 9 jam tergantung game yang kita mainkan.</p>
        <br>                    
                        <!-- penjelasan isi-2-end -->
                        <p style="font-weight: bold;">Nintendo Switch Oled (new)</p>
                        <!-- penjelasan isi-3-start -->
                        <p>Penjelasan nya hampir sama juga seperti 2 tipe nintendo switch diatas, tetapi beda nya dia memiliki layar yang lebih besar dimana itu berukuran 7 inch dan mengganti tipe layar nya, yang dimana di Nintendo Switch V1 dan V2 memakai layar LCD tapi di versi terbaru nya konsol Nintendo Switch ini menggunakan tipe layar OLED.</p>
        <br>                
                        <!-- penjelasan isi-3-end -->
                        <p style="font-weight: bold;">Nintendo Switch Lite</p>
                        <!-- penjelasan isi-4-start -->
                        <p>Kalau Penjelasan console ini sangat sederhana karna yang membedakan Nintedwo Switch Lite ini dengan yang lain itu hanya ukuran dan ada beberapa hal lain yaitu, pertama yang sudah jelas adalah ukuran nya yang dimana lebih cocok untuk di bawa kemana mana karna enteng dan kecil, kedua layar nya lebih kecil dibanding yang lainnya yang berukuran 5,5 inch, lalu joycon nya tidak bisa dilepas jadi dia seperti psVita atau psp.</p>
                        <!-- penjelasan isi-4-end -->
        </div>
        <br id="isi5"><br><hr><br><br> 
        <div class="containers">   
                <!-- content-5 -->
                <li>Spesifikasi</li>
                <p><span>Sceeen</span> - Multi-touch screen, 6.2 inch LCD, 1280x720 resolution</p>
                <p><span>CPU / GPU</span> - Nvidia customized Tegra processor</p>
                <p><span>32GB of Internal Memory</span> - Some of this memory will be reserved for use by the system, but storage can be expanded with microSDXC cards.</p>
                <p><span>Communication Featuers</span> - Wireless LAN (IEEE 802.11 a/b/g/n/ac copmliant) / Bluetooth 4.1 (TV Mode Only) Wired LAN Connection possible through Wired LAN Adapters.</p>
                <p><span>Video Output</span> - Max resolution of 1920x1080, 60 fps via HDMI for TV Mode. Note that in tabletop or handheld mode, max resolution matches the screen resolution of 1280x720</p> 
                <p><span>Audio Output</span> - Supports linerar PCM 5.1ch via HDMI in TV Mode.</p>
                <p><span>Speakers</span> - Stereo</p>
                <p><span>USB Terminals</span> - USB Type-C Terminal, used for charging or connecting to the Nintendo Switch dock.</p>
                <p><span>Headphone mic. jack</span> - Stereo Outpust</p>
                <p><span>MicroSD Card Slot</span> - Compatible with MicroSD, MicroSDHC and MicroSDXC memory cards (update required to use SDXC cards).</p>
                <p><span>Sensors</span> -  Accelerometer / Gyroscope / Brightness Sensor</p>
                <p><span>Operating Environment</span> - Temperature 5 - 35C / Humidity 20 - 80%</p>
                <p><span>Internal Battery</span> - Lithium ion battery / battery capacity 4310mAh (cannot be removed).</p>
                <p><span>Battery Lasts More Than Six Hours</span> - Some more intensive titles will reduce the battery life. For example, The Legend of Zelda: Breath of the Wild when played mobile may only last for around 3 hours. This only applies while the Nintendo Switch is removed from its dock.</p>
                <p><span>Battery Charging Time</span> - 3 Hours (approx - when the console is in sleep mode)</p> 
        </div>
        <br id="isi6"><br><hr><br><br>     
        <div class="containers">
                <!-- content-6 -->
                <li>Best Nintendo Game</li>
                <!-- game-1 -->
                <h3>1. The Legend of Zelda: Breath of the Wild</h3>
                <img src="https://assets-prd.ignimgs.com/2022/06/14/zelda-breath-of-the-wild-1655249167687.jpg" alt="foto game-1" width="300">
                <!-- penjelasan game-1 -->
                <p> The Legend of Zelda: Breath of the Wild. Let’s face it, the Zelda series was long overdue for a major change, and The Legend of Zelda: Breath of the Wild offers an unparalleled sense of freedom and scale in the palm of your hand. Now widely considered one of the best games of all time, Breath of the Wild tells an epic story, as you glide, cook, and battle your way across a beautifully ruined version of Hyrule. It helped reinvigorate The Legend of Zelda in a way that fans had only dreamt of, easily propelling it to the number one spot on our list and in our hearts.</p><br>
                <!-- game-2 -->
                <h3>2. Super Smash Bros. Ultimate</h3>
                <img src="https://assets1.ignimgs.com/2018/06/13/super-smash-btros-ultimate---button-0001-1528851298611.jpg" alt="foto game-2" width="300">
                <!-- penjelasan game-2 -->
                <p>Super Smash Bros. Ultimate is exactly what its name implies: it’s the ultimate incarnation of Nintendo’s now 20-year-old brawler series. It’s a celebration of Smash Bros. as a whole, filled with more fighters and levels than ever before, and packed to the gills with over 1000 more characters from all across gaming. “Everyone is here!” may have started out as just another tagline, but it’s one that Nintendo has impressively backed up, and it’s made Ultimate the definitive Smash Bros. game for a long time to come. Add a 20+ hour single-player mode with full-on boss fights and huge world maps and it’s easy to get lost in Ultimate. Super Smash Bros. Ultimate had a lot to live up to with that name, but it has undoubtedly done just that.</p><br>
                <!-- game-3 -->
                <h3>3. Super Mario Odyssey </h3>
                <img src="https://assets1.ignimgs.com/2017/09/01/super-mario-odyssey-button-fin-1504225715322.jpg" alt="foto game-3" width="300">
                <!-- Penjelasan game-3 -->
                <p>A masterclass in 3D platforming, Super Mario Odyssey seamlessly blends the best elements from nearly every Mario game with an entire portfolio of new gameplay mechanics to create something both nostalgic and courageous. New players will adore stomping through the vivid and vast new worlds, while seasoned veterans will stick around after the credits to unlock the hundreds of challenges that await their skill and dexterity. To put it succinctly, Super Mario Odyssey is pure, sublime joy and one of the best Super Mario games ever made</p>
        </div>
        
            </ul>
            <br><hr>
        </main>
    </div>
    <!-- content-end -->
</body>
<!-- footer-start -->
<?php require('../home/partials/home-footer.php'); ?>
<!-- footer-end -->
</html>