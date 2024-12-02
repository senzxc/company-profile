<?php
    require 'functions.php';

    $sql = "SELECT * FROM gallery";
    $all_img = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ford</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <section class="slides slide1" id="home">
            <nav>
                <div class="wrapper-nav">
                    <h2>Ford</h2>
                    <ul>
                        <li><a href="#home" class="active"><span>Home</span></a></li>
                        <li><a href="#about"><span>About</span></a></li>
                        <li><a href="#gallery"><span>Gallery</span></a></li>
                        <li><a href="#contact"><span>Contact</span></a></li>
                    </ul>
                </div>
                <div class="wrapper-nav2">
                    <a href="login.php">Login</a>
                </div>
            </nav>

            <article>
                <h1>Solusi Digital untuk Masa Depan Anda</h1>
                <p>Menghadirkan solusi digital marketing yang dirancang untuk meningkatkan pertumbuhan bisnis Anda. Dengan pendekatan kreatif dan berbasis data, kami membantu merek Anda tampil menonjol di tengah persaingan.</p>

                <div class="btn">
                    <button>Cek lebih lanjut &nbsp; &#129106;</button>
                </div>
            </article>
        </section>

        <section class="slides slide2" id="about">
            <article>
                <h1 class="title">Sekilas Ford</h1>
                <h3 class="title2">1990</h3>
                <p>› Ford didirikan di Jakarta dengan nama Ford International Inc. ‹</p>
                <p>› Diawali sebagai perusahaan perdagangan umum. ‹</p>
                <p>&nbsp;</p>
                <h3 class="title2">2000</h3>
                <p>›Transformasi ke bidang Digital Marketing. ‹</p>
                <p>› Mengubah nama menjadi PT Ford Digital Agency. ‹</p>
                <p>› Terdaftar di Bursa Efek Indonesia dengan kode saham ASII. ‹</p>

                <div class="box-wrapper">
                    <div class="box">
                        <h1 data-target="55">0</h1>
                        <h2>Tahun bersama Ford</h2>
                    </div>
                    <div class="box">
                        <h1 data-target="9540">0</h1>
                        <h2>Klien kami</h2>
                    </div>
                    <div class="box">
                        <h1 data-target="3303">0</h1>
                        <h2>Total Revenue</h2>
                    </div>
                </div>


                <p class="parag-end">Kami berkomitmen menciptakan kegiatan bisnis yang berkelanjutan yang dapat berkontribusi dalam memperkuat ekonomi Indonesia serta mendukung masyarakat yang sejahtera dan inklusif.</p>
            </article>
        </section>

        <section class="slides slide3" id="gallery">
            <article>
                <h1>Galeri Ford</h1>

                <div class="img-wrapper">

                <?php
                    while ($row = mysqli_fetch_assoc($all_img)) {     
                ?>

                    <div class="img-box">
                        <div class="img-header">
                            <img class="img1" src="assets/uploads/<?= $row["img"]; ?>" alt="gallery-1.png">

                            <div class="img-date">
                                <p><?= $row["date"]; ?></p>
                            </div>
                        </div>
                        
                        <div class="parag-footer">
                            <p><?= $row["description"]; ?></p>
                        </div>
                    </div>

                    <?php
                        }
                    ?>
                </div>
            </article>
        </section>

        <section class="slides slide4" id="contact">
            <footer>
                <div class="img-footer">
                    <img src="assets/gallery-6.png" alt="gallery-5.png">
                </div>

                <div class="text-footer">
                    <h1>Terhubung dengan Kami</h1>
                    <p>Jadilah bagian dari kami yang bersemangat dan saling terhubung dalam visi masa depan yang berkelanjutan.</p>

                    <div class="social-icon">
                        <svg class="icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="white"></circle><path d="M20.5728 16.2857C18.2063 16.2857 16.2871 18.2048 16.2871 20.5714V27.4286C16.2871 29.7951 18.2063 31.7143 20.5728 31.7143H27.43C29.7965 31.7143 31.7157 29.7951 31.7157 27.4286V20.5714C31.7157 18.2048 29.7965 16.2857 27.43 16.2857H20.5728ZM29.1443 18C29.6174 18 30.0014 18.384 30.0014 18.8571C30.0014 19.3303 29.6174 19.7143 29.1443 19.7143C28.6711 19.7143 28.2871 19.3303 28.2871 18.8571C28.2871 18.384 28.6711 18 29.1443 18ZM24.0014 19.7143C26.368 19.7143 28.2871 21.6334 28.2871 24C28.2871 26.3666 26.368 28.2857 24.0014 28.2857C21.6348 28.2857 19.7157 26.3666 19.7157 24C19.7157 21.6334 21.6348 19.7143 24.0014 19.7143ZM24.0014 21.4286C23.3194 21.4286 22.6654 21.6995 22.1831 22.1817C21.7009 22.664 21.43 23.318 21.43 24C21.43 24.682 21.7009 25.336 22.1831 25.8183C22.6654 26.3005 23.3194 26.5714 24.0014 26.5714C24.6834 26.5714 25.3374 26.3005 25.8197 25.8183C26.3019 25.336 26.5728 24.682 26.5728 24C26.5728 23.318 26.3019 22.664 25.8197 22.1817C25.3374 21.6995 24.6834 21.4286 24.0014 21.4286Z" fill="#333"></path></svg>
                        <svg class="icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="white"></circle><path d="M29.6364 15.9284H32.4728L26.2777 23.0074L33.5656 32.6416H27.8606L23.389 26.8L18.2787 32.6416H15.4382L22.0632 25.0684L15.0767 15.9284H20.9263L24.9639 21.2678L29.6364 15.9284ZM28.64 30.9461H30.2109L20.0705 17.5355H18.3831L28.64 30.9461Z" fill="#333"></path></svg>
                        <svg class="icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="white"></circle><path d="M28.7363 21.4286H25.7148V19.7143C25.7148 18.8297 25.7868 18.2726 27.0546 18.2726H28.6557V15.5469C27.8766 15.4663 27.0931 15.4269 26.3088 15.4286C23.9834 15.4286 22.2863 16.8489 22.2863 19.4563V21.4286H19.7148V24.8571L22.2863 24.8563V32.5714H25.7148V24.8546L28.3428 24.8537L28.7363 21.4286Z" fill="#333"></path></svg>
                        <svg class="icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="white"></circle><path d="M35.4937 18.498C35.3571 18.0147 35.0897 17.5741 34.7181 17.2203C34.3466 16.8664 33.884 16.6117 33.3766 16.4816C31.5082 16 24 16 24 16C24 16 16.4918 16 14.6234 16.4816C14.116 16.6117 13.6534 16.8664 13.2819 17.2203C12.9103 17.5741 12.6429 18.0147 12.5063 18.498C12.1574 20.3129 11.9881 22.155 12.0006 24C11.9881 25.845 12.1574 27.6871 12.5063 29.502C12.6429 29.9853 12.9103 30.4259 13.2819 30.7797C13.6534 31.1336 14.116 31.3883 14.6234 31.5184C16.4918 32 24 32 24 32C24 32 31.5082 32 33.3766 31.5184C33.884 31.3883 34.3466 31.1336 34.7181 30.7797C35.0897 30.4259 35.3571 29.9853 35.4937 29.502C35.8426 27.6871 36.0119 25.845 35.9994 24C36.0119 22.155 35.8426 20.3129 35.4937 18.498ZM21.6001 27.4286V20.5714L27.8312 24L21.6001 27.4286Z" fill="#333"></path></svg>
                        <svg class="icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="white"></circle><path d="M19.8856 30.8571H16.457V20.5714H19.8856V30.8571ZM18.172 19.2C17.2237 19.2 16.457 18.4313 16.457 17.485C16.457 16.5387 17.225 15.7714 18.172 15.7714C19.1169 15.7714 19.8856 16.5401 19.8856 17.485C19.8856 18.4313 19.1169 19.2 18.172 19.2ZM32.2285 30.8571H28.9322V25.8514C28.9322 24.6576 28.9096 23.1223 27.2186 23.1223C25.5023 23.1223 25.2383 24.4224 25.2383 25.765V30.8571H21.9427V20.5639H25.1066V21.9703H25.1512C25.5914 21.1611 26.6673 20.3081 28.2719 20.3081C31.6113 20.3081 32.2285 22.44 32.2285 25.2117V30.8571Z" fill="#333"></path></svg>

                        <a class="social-btn" href="contact.php">
                            <span>Kontak Kami</span> 
                            <svg class="right-arrow" width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.06145 15.061L10.1215 8L3.06145 0.938995L0.939453 3.061L5.87945 8L0.939453 12.939L3.06145 15.061Z" fill="#333"></path></svg>
                        </a>
                    </div>
                    <p>&copy; Ford Digital Agency 2024 All Rights Reserved.</p>
                </div>
            </footer>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>