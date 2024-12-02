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
                        <li class="homeL"><a href="#home" class="active"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3.99999 10L12 3L20 10L20 20H15V16C15 15.2044 14.6839 14.4413 14.1213 13.8787C13.5587 13.3161 12.7956 13 12 13C11.2043 13 10.4413 13.3161 9.87868 13.8787C9.31607 14.4413 9 15.2043 9 16V20H4L3.99999 10Z" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg><span>Home</span></a></li>
                        <li><a href="#about"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.1992 12C12.9606 12 15.1992 9.76142 15.1992 7C15.1992 4.23858 12.9606 2 10.1992 2C7.43779 2 5.19922 4.23858 5.19922 7C5.19922 9.76142 7.43779 12 10.1992 12Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M1 22C1.57038 20.0332 2.74795 18.2971 4.36438 17.0399C5.98081 15.7827 7.95335 15.0687 10 15C14.12 15 17.63 17.91 19 22" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17.8205 4.44006C18.5822 4.83059 19.1986 5.45518 19.579 6.22205C19.9594 6.98891 20.0838 7.85753 19.9338 8.70032C19.7838 9.5431 19.3674 10.3155 18.7458 10.9041C18.1243 11.4926 17.3302 11.8662 16.4805 11.97" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17.3203 14.5701C18.6543 14.91 19.8779 15.5883 20.8729 16.5396C21.868 17.4908 22.6007 18.6827 23.0003 20" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg><span>About</span></a></li>
                        <li><a href="#gallery"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M2 14C2 10.2288 2 8.34315 3.17157 7.17157C4.34315 6 6.22876 6 10 6H14C17.7712 6 19.6569 6 20.8284 7.17157C22 8.34315 22 10.2288 22 14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14Z" stroke="#1C274C" stroke-width="1.5"></path> <path d="M4 7L3.98779 6C4.10022 5.06898 4.33494 4.42559 4.82498 3.93726C5.76553 3 7.27932 3 10.3069 3H13.5181C16.5457 3 18.0595 3 19 3.93726C19.4901 4.42559 19.7248 5.06898 19.8372 6V7" stroke="#1C274C" stroke-width="1.5"></path> <circle cx="17.5" cy="10.5" r="1.5" stroke="#1C274C" stroke-width="1.5"></circle> <path d="M2 14.5001L3.75159 12.9675C4.66286 12.1702 6.03628 12.2159 6.89249 13.0721L11.1822 17.3618C11.8694 18.0491 12.9512 18.1428 13.7464 17.5839L14.0446 17.3744C15.1888 16.5702 16.7369 16.6634 17.7765 17.599L21 20.5001" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg><span>Gallery</span></a></li>
                        <li><a href="#contact"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17.98 10.79V14.79C17.98 15.05 17.97 15.3 17.94 15.54C17.71 18.24 16.12 19.58 13.19 19.58H12.79C12.54 19.58 12.3 19.7 12.15 19.9L10.95 21.5C10.42 22.21 9.56 22.21 9.03 21.5L7.82999 19.9C7.69999 19.73 7.41 19.58 7.19 19.58H6.79001C3.60001 19.58 2 18.79 2 14.79V10.79C2 7.86001 3.35001 6.27001 6.04001 6.04001C6.28001 6.01001 6.53001 6 6.79001 6H13.19C16.38 6 17.98 7.60001 17.98 10.79Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21.98 6.79001V10.79C21.98 13.73 20.63 15.31 17.94 15.54C17.97 15.3 17.98 15.05 17.98 14.79V10.79C17.98 7.60001 16.38 6 13.19 6H6.79004C6.53004 6 6.28004 6.01001 6.04004 6.04001C6.27004 3.35001 7.86004 2 10.79 2H17.19C20.38 2 21.98 3.60001 21.98 6.79001Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M13.4955 13.25H13.5045" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9.9955 13.25H10.0045" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6.4955 13.25H6.5045" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg><span>Contact</span></a></li>
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