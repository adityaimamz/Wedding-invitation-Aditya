<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Irsalina & Sidik Wedding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- simplyCountdown -->
    <link rel="stylesheet" href="{{ asset('countdown/simplyCountdown.theme.default.css') }}" />
    <script src="{{ asset('countdown/simplyCountdown.min.js') }}"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Dancing+Script&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <section id="hero"
        class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
        <main>
            <div class="sakura-falling"></div>
            <img src="{{ asset('img/right-flower.png') }}" alt="image-top-right" class="top-right-decoration">
            <img src="{{ asset('img/left-flower.png') }}" alt="image-top-left" class="top-left-decoration">
            <div class="title">
                <h4>Kepada <span>Bapak/Ibu/Saudara/i, </span></h4>
                <h1>Irsalina Faradis</h1>
                <h2>&</h2>
                <h1>Mas'ud Sidik</h1>
                <h3>Are getting married</h3>
                <p>
                    Akan melangsungkan resepsi pernikahan dalam
                </p>
            </div>
            <div class="simply-countdown"></div>
            <a href="#home" class="btn btn-lg mt-4" onClick="enableScroll()">Lihat Undangan</a>
        </main>

    </section>

    <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
        <div class="container">
            <a class="navbar-brand" href="#">Irsalina & Sidik</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dino</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="#home">Home</a>
                        <a class="nav-link" href="#info">Info</a>
                        <a class="nav-link" href="#story">Story</a>
                        <a class="nav-link" href="#gallery">Gallery</a>
                        <a class="nav-link" href="#rsvp">RSVP</a>
                        <a class="nav-link" href="#gifts">Gifts</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>Acara Pernikahan</h2>
                    <h3>Diselenggarakan pada 24 Juni 2024 di Tegal, Jawa Tengah.</h3>
                    <p>Oleh karena itu, dengan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i,
                        untuk hadir
                        pada acara pernikahan kami. </p>
                </div>
            </div>

            <div class="row couple">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-8 text-end">
                            <h3>Irsalina Faradis</h3>
                            <p>Putra dari Bpk. Susanto <br> dan <br> Ibu rantau Ekasari</p>
                        </div>
                        <div class="col-4">
                            <img src="img/asli2.jpg" alt="Irsalina Faradis" class="img-responsive rounded-circle">

                        </div>
                    </div>
                </div>

                <span class="heart"><i class="bi bi-heart-fill"></i></span>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/asli1.jpg" alt="Mas'ud Sidik" class="img-responsive rounded-circle">
                        </div>
                        <div class="col-8">
                            <h3>Mas'ud Sidik</h3>
                            <p>Putra dari Bpk. Sarnawi <br> dan <br> Ibu Raenih</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="info" class="info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Informasi Acara</h2>
                    <p class="alamat">Tempat: Di Kediaman Mempelai Wanita <br> Jl. Jatisari no 20 RT 02 RW 03 Debong Tengah Tegal</p>

            
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.2602557490264!2d109.13106979999999!3d-6.885689799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9c8515cb419%3A0xf2e86823d05ba08e!2sJl.%20Jatisari%20No.21%2C%20Debong%20Tengah%2C%20Kec.%20Tegal%20Sel.%2C%20Kota%20Tegal%2C%20Jawa%20Tengah%2052132!5e0!3m2!1sid!2sid!4v1716564700010!5m2!1sid!2sid"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <a href="https://maps.app.goo.gl/MX948GQ1YvdeqKtX6" target="_blank"
                        class="btn btn-light btn-sm my-3">Klik untuk
                        membuka peta</a>
                    <p class="description">Diharapkan untuk tidak salah alamat dan tanggal. Manakala tiba di tujuan
                        namun tidak
                        ada tanda-tanda sedang dilangsungkan pernikahan, boleh jadi Anda salah jadwal, atau salah
                        tempat.</p>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light mb-5">
                        <div class="card-header">Akad Nikah</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>08.00 - 11.00</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>Senin, 24 Juni 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh
                            prosesi.
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light">
                        <div class="card-header">Resepsi Nikah</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>11.00 - 14.00 WIB</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>Senin, 24 Juni 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh
                            prosesi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="story" class="story">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <span>Bagaimana Cinta Kami Bersemi</span>
                    <h2>Cerita Kami</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, similique non soluta nulla
                        asperiores
                        voluptatem.</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image" style="background-image: url(img/sman23.jpg);"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Pertama Bertemu</h3>
                                    <span>1 Juni 2000</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, modi autem?
                                        Commodi autem quo quia?
                                    </p>
                                </div>
                            </div>

                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" style="background-image: url(https://picsum.photos/300/300);">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Mulai Serius</h3>
                                    <span>1 Januari 2005</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim eaque
                                        obcaecati odit
                                        itaque explicabo quisquam quos at.
                                    </p>
                                </div>
                            </div>

                        </li>
                        <li>
                            <div class="timeline-image" style="background-image: url(https://picsum.photos/301/301);">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Tunangan</h3>
                                    <span>7 November 2009</span>
                                </div>
                                <div class="timeline-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, deleniti
                                    distinctio. Esse quas sit
                                    explicabo corporis magni qui expedita a.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2 class="mb-2">Konfirmasi Kehadiran</h2>
                    <p class="mb-5">Kami tidak sabar menunggu hari pernikahan kami Bersama Bapak/Ibu/Saudara/i, mohon
                        konfirmasi kehadiran melalui form RSVP dibawah ini</p>
                </div>
            </div>

            <form class="row row-cols-md-auto g-3 align-items-center justify-content-center rsvp-form" method="POST"
                action="https://script.google.com/macros/s/AKfycbyddFbEJRqwEeA6OmZAuNf0jw_B30ZUOS5qSDwlAKV_nurcW7H6osJx2ZWnIeTmPm_35g/exec"
                id="my-form">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" min="1"
                            max="5" length="1" value="1">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="status" class="form-label">Konfirmasi</label>
                        <select name="status" id="status" class="form-select">
                            <option selected>Pilih salah satu</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Tidak Hadir">Tidak Hadir</option>
                        </select>
                    </div>
                </div>
                <div class="col-12" style="margin-top: 35px;">
                    <button class="btn btn-primary btn-kirim" style="background-color: #674ea7;">Kirim</button>
                </div>
            </form>
        </div>
    </section>

    <section id="rsvp" class="rsvp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Ucapan & Doa</h2>
                    <p>Berikan Doa dan Harapan terbaik untuk kami</p>
                </div>
            </div>

            <form class="col col-cols-md-auto g-3 align-items-center justify-content-center rsvp-form" method="POST"
                action="https://script.google.com/macros/s/AKfycbyddFbEJRqwEeA6OmZAuNf0jw_B30ZUOS5qSDwlAKV_nurcW7H6osJx2ZWnIeTmPm_35g/exec"
                id="my-form">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <textarea class="form-control" name="doa" id="" cols="30" rows="10"
                            placeholder="Tuliskan ucapan dan doamu"></textarea>
                    </div>
                </div <div class="col-12" style="margin-top: 35px;">
                <button class="btn btn-primary" style="width: 100%;">Kirim</button>
        </div>
        </form>

        <div class="row justify-content-center ">
            <div class="col-md-9 mt-5 col-sm-6 comment">
                <div>
                    <div class="d-flex flex-start align-items-center">
                        <div>
                            <h6 class="fw-bold text-white mb-1">Lily Coleman</h6>
                            <p class="text-muted small mb-0" style="color:rgb(168, 163, 163) !important;">
                                7 jam
                            </p>
                        </div>
                    </div>
                    <p class=" mb-4 pb-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                    </p>
                </div>
            </div>
        </div>

        </div>
    </section>

    <section id="gifts" class="gifts">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <span>ungkapan tanda kasih</span>
                    <h2>Kirim Hadiah</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam iure perferendis provident ab
                        aliquam nemo.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="fw-bold">BCA</div>
                            123456789 - IRSALINA  FARADIS
                        </li>
                        <li class="list-group-item">
                            <div class="fw-bold">MANDIRI</div>
                            987654321 - MAS'UD SIDIK
                        </li>
                        <li class="list-group-item">
                            <div class="fw-bold">Saweria</div>
                            <img src="img/saweria.png" alt="Saweria QR" class="img-thumbnail" width="150">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <small class="block">&copy; 2024 Aditya Imam Zuhdi. All Rights Reserved.</small>
                    <small class="block">Design by <a
                            href="https://www.instagram.com/adityaimamz/">@adityaimamz</a>.</small>

                    <ul class="mt-3">
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-tiktok"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div id="audio-container">
        <audio id="song" autoplay loop>
            <source src="audio/bermuara.mp3" type="audio/mp3">
        </audio>

        <div class="audio-icon-wrapper" style="display: none;">
            <i class="bi bi-disc"></i>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

    <script>
        simplyCountdown('.simply-countdown', {
            year: 2024, // required
            month: 6, // required
            day: 24, // required
            hours: 8, // Default is 0 [0-23] integer
            words: { //words displayed into the countdown
                days: {
                    singular: 'hari',
                    plural: 'hari'
                },
                hours: {
                    singular: 'jam',
                    plural: 'jam'
                },
                minutes: {
                    singular: 'menit',
                    plural: 'menit'
                },
                seconds: {
                    singular: 'detik',
                    plural: 'detik'
                }
            },
        });
    </script>

    <script>
        const stickyTop = document.querySelector('.sticky-top');
        const offcanvas = document.querySelector('.offcanvas');

        offcanvas.addEventListener('show.bs.offcanvas', function() {
            stickyTop.style.overflow = 'visible';
        });

        offcanvas.addEventListener('hidden.bs.offcanvas', function() {
            stickyTop.style.overflow = 'hidden';
        });
    </script>

    <script>
        const rootElement = document.querySelector(":root");
        const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
        const audioIcon = document.querySelector('.audio-icon-wrapper i');
        const song = document.querySelector('#song');
        let isPlaying = false;

        function disableScroll() {
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

            window.onscroll = function() {
                window.scrollTo(scrollTop, scrollLeft);
            }

            rootElement.style.scrollBehavior = 'auto';
        }

        function enableScroll() {
            window.onscroll = function() {}
            rootElement.style.scrollBehavior = 'smooth';
            // localStorage.setItem('opened', 'true');
            playAudio();
        }

        function playAudio() {
            song.volume = 0.1;
            audioIconWrapper.style.display = 'flex';
            song.play();
            isPlaying = true;
        }

        audioIconWrapper.onclick = function() {
            if (isPlaying) {
                song.pause();
                audioIcon.classList.remove('bi-disc');
                audioIcon.classList.add('bi-pause-circle');
            } else {
                song.play();
                audioIcon.classList.add('bi-disc');
                audioIcon.classList.remove('bi-pause-circle');
            }

            isPlaying = !isPlaying;
        }

        // if (!localStorage.getItem('opened')) {
        //   disableScroll();
        // }
        disableScroll();
    </script>
    <script>
        window.addEventListener("load", function() {
            const form = document.getElementById('my-form');
            form.addEventListener("submit", function(e) {
                e.preventDefault();
                const data = new FormData(form);
                const action = e.target.action;
                fetch(action, {
                        method: 'POST',
                        body: data,
                    })
                    .then(() => {
                        alert("Konfirmasi kehadiran berhasil terkirim!");
                    })
            });
        });
    </script>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const nama = urlParams.get('n') || '';
        const pronoun = urlParams.get('p') || 'Bapak/Ibu/Saudara/i';
        const namaContainer = document.querySelector('.hero h4 span');
        namaContainer.innerText = `${pronoun} ${nama},`.replace(/ ,$/, ',');

        document.querySelector('#nama').value = nama;
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/timoschaefer/jQuery-Sakura/jquery-sakura.min.js'></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
