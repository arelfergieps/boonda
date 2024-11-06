<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>BoondaChildCare</title>

    <!-- Link to Favicon -->
    <link rel="icon" href="user/imgs/logotabb.png" type="image/x-icon">

    <!-- font icons -->
    <link rel="stylesheet" href="user/vendors/themify-icons/css/themify-icons.css">
    
    <!-- Bootstrap + Steller main styles -->
    <link rel="stylesheet" href="user/css/user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- font  -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo&display=swap" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="pay">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-primary" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="user/imgs/logoboonda.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/') }}#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#Pay">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#rekomendasi">Rekomendasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="javascript:history.back()"
                            class="btn btn-primary rounded">Kembali</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white btn-primary rounded-pill d-flex align-items-center"
                        href="https://boonda.id/index">
                        <img src="user/imgs/boonda.png" alt="Boonda.id Logo" class="logo-img">
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    // Hapus kelas 'active' dari semua elemen
                    navLinks.forEach(function(nav) {
                        nav.classList.remove('active');
                    });

                    // Tambahkan kelas 'active' ke elemen yang diklik
                    this.classList.add('active');
                });
            });
        });
    </script>
    <div class="whatsapp-popup" id="whatsappPopup">
        <img src="user/imgs/whatsapp.png" alt="Chat with us on WhatsApp" id="whatsappIcon" style="cursor: pointer;">

        <!-- Hidden Popup for Numbers -->
        <div class="whatsapp-options rounded" id="whatsappOptions" style="display: none;" class="header">
            <p class="m-0 text-center"">
                Haii... PapaBoonda
                <br>
                Jangan Ragu untuk Bertanya!
            </p>
            <a href="https://wa.me/6281276001730" target="_blank"class="btn-btn-whatsapp">
                <img src="user/imgs/whatsapp.png" alt="CS Pendaftaran" class="btn-icon"> CS Pendaftaran
            </a>
            <a href="https://wa.me/6281234474107" target="_blank"class="btn-btn-whatsapp">
                <img src="user/imgs/whatsapp.png" alt="CS Pendaftaran" class="btn-icon"> CS Pengaduan
            </a>
        </div>
    </div>

    <!-- CSS for styling -->



    <!-- JavaScript to toggle the popup -->
    <script>
        document.getElementById("whatsappIcon").addEventListener("click", function() {
            var options = document.getElementById("whatsappOptions");
            if (options.style.display === "none" || options.style.display === "") {
                options.style.display = "block";
            } else {
                options.style.display = "none";
            }
        });

        // Close the popup when clicking outside
        window.onclick = function(event) {
            var options = document.getElementById("whatsappOptions");
            if (event.target !== document.getElementById("whatsappIcon") && options.style.display === "block") {
                options.style.display = "none";
            }
        };
    </script>



    {{-- batas nav --}}
    <section id="pay">
        <div class="container mt-5 pt-5">
            <div class="text-left mb-2">
                <a href="javascript:history.back()" class="btn rounded">
                    <i class="bi bi-box-arrow-left"></i>
                </a>
            </div>
            <div class="row">
                <!-- Image Column -->
                <div class="col-6">
                    <div class="position-relative">
                        <img style="width: 100%; border-radius: 10px;" src="user/imgs/blog-2.jpg"
                            alt="Storytelling Event" class="card-img">
                        <span class="badge-online">Online</span>
                    </div>
                </div>


                <!-- Content Column -->
                <div class="col-6 card-body "style="padding-left: 80px;">
                    <div class="event-details">
                        <h3 class="text-left custom-awaldetail">Jadi Pendongeng? Berani Dong!</h3>

                        <ul class="list-unstyled">
                            <li><i
                                    class="bi bi-calendar mr-1 "style="color: rgba(255, 106, 138, 1);font-size: 16px;"></i>
                                12 Agustus 2024</li>
                            <li><i class="bi bi-clock mr-1"style="color: rgba(255, 106, 138, 1);font-size: 16px;"></i>
                                09:00 - selesai </li>
                            <li><i class="bi bi-people mr-1"style="color: rgba(255, 106, 138, 1);font-size: 16px;"></i>
                                Kuota 100 anak (sisa 32 slot)</li>
                        </ul>
                        <div class="text-left"style="font-size: 10px; font-weight: bold;">Ayo ajak si kecil bergabung
                            dalam acara "Berani Mendongeng" yang penuh
                            keceriaan dan kreativitas!
                            Dalam event ini, anak-anak diajak untuk mengasah kemampuan bercerita mereka, meningkatkan
                            kepercayaan diri, dan memupuk imajinasi melalui kegiatan mendongeng. Mereka bisa bercerita
                            dengan
                            boneka tangan dan menikmati dukungan dari mentor-mentor yang ramah.
                        </div>

                        <h5 class="card-title custom-detail text-left ">Fasilitas</h5>
                        <ul class="list-unstyled facilities-list">
                            <li><i class="bi bi-circle-fill icon-small mr-1"></i>Modul materi</li>
                            <li><i class="bi bi-circle-fill icon-small mr-1"></i>Dance and fun game</li>
                            <li><i class="bi bi-circle-fill icon-small mr-1"></i>Free boneka tangan</li>
                            <li><i class="bi bi-circle-fill icon-small mr-1"></i>Goodie bag and snack</li>
                            <li><i class="bi bi-circle-fill icon-small mr-1"></i>Sesi foto</li>
                            <li><i class="bi bi-circle-fill icon-small mr-1"></i>Sertifikat</li>
                        </ul>

                        <h5 class="card-title custom-detail text-left">Kolaborator</h5>
                        <div class="d-flex align-items-center collaborator-section">
                            <img src="user/imgs/blog-2.jpg" alt="Kak Ale and Friend"
                                style="width: 50px; height: 50px; margin-right: 10px;">
                            <div class="text-left" style="margin: 0;">
                                <div style="font-size: 14px; color: #555;">Kak Ale and Friend</div>
                                <a href="{{ url('/kolaborator') }}" class="text-primary mr-2"
                                    style="text-decoration: none; display: block; font-size: 12px;">Lihat Profile</a>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="maps" class="section mt-5">
        <div class="container text-left">
            <h5 class="card-title custom-detail ">Lokasi</h5>
            <ul class="list-unstyled">
                <li><i class="bi bi-geo-alt mr-1"style="color: rgba(255, 106, 138, 1);"></i>cafe 11 : 12
                    (sebelasduabelas kopi) Jl. soekarno hatta kpp 212, malang</li>
            </ul>
            <div class="map-responsive">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345098657!2d144.95373521567532!3d-37.816279979751924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f0e8f69%3A0x5045675218ceed0!2sMelbourne%20Victoria!5e0!3m2!1sen!2sau!4v1618354554540!5m2!1sen!2sau"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        </div>
        <div class="container-detailcard">
            <div class="title">Lorem Ipsum</div>
            <div class="grid">
                <div class="itemdetail">
                    <div class="item-text">
                        <p>Lorem ipsum</p>
                        <div class="item-price">
                            <p>Rp. 100.000</p>
                            <p class="old-price">Rp. 150.000</p>
                        </div>

                    </div>
                    <button class="btn-card btn-primary rounded-pill">Pesan</button>
                </div>

                <div class="itemdetail">
                    <div class="item-text">
                        <p>Lorem ipsum</p>
                        <div class="item-price">
                            <p>Rp. 100.000</p>
                            <p class="old-price">Rp. 150.000</p>
                        </div>

                    </div>
                    <button class="btn-card btn-primary rounded-pill">Pesan</button>
                </div>

                <div class="itemdetail">
                    <div class="item-text">
                        <p>Lorem ipsum</p>
                        <div class="item-price">
                            <p>Rp. 100.000</p>
                            <p class="old-price">Rp. 150.000</p>
                        </div>

                    </div>
                    <button class="btn-card btn-primary rounded-pill">Pesan</button>
                </div>

                <div class="itemdetail">
                    <div class="item-text">
                        <p>Lorem ipsum</p>
                        <div class="item-price">
                            <p>Rp. 100.000</p>
                            <p class="old-price">Rp. 150.000</p>
                        </div>

                    </div>
                    <button class="btn-card btn-primary rounded-pill">Pesan</button>
                </div>

                <div class="itemdetail">
                    <div class="item-text">
                        <p>Lorem ipsum</p>
                        <div class="item-price">
                            <p>Rp. 100.000</p>
                            <p class="old-price">Rp. 150.000</p>
                        </div>

                    </div>
                    <button class="btn-card btn-primary rounded-pill">Pesan</button>
                    
                </div>

                <div class="itemdetail">
                    <div class="item-text">
                        <p>Lorem ipsum</p>
                        <div class="item-price">
                            <p>Rp. 100.000</p>
                            <p class="old-price">Rp. 150.000</p>
                        </div>
                    </div>
                    <button class="btn-card btn-primary rounded-pill">Pesan</button>
                </div>
            </div>
        </div>




        
            <div class="container text-center">

                <h6 class="custom-detail text-left ">Event Lainnya</h6>

                <!-- Buttons and Dropdown Section -->

                <div class="row text-left">
                    <!-- Card 1 -->
                    <div class="col-md-3 p-3">
                        <div class="card border mb-4" style="border-radius: 20px;">
                            <a href="{{ url('detailcard') }}" style="text-decoration: none; color: inherit;">
                                <img src="user/imgs/blog-2.jpg" alt="Design for Everyone"
                                    class="card-img-top w-100" style="border-radius: 20px;">
                                <div class="mb-2 p-2">
                                    <div class="status small text-muted">sedang berlangsung</div>
                                    <div class="title">Jadi Pendongeng? Berani Dong!</div>
                                    <div class="info">
                                        <i class="bi-geo-alt"></i> Mojangangu Malang
                                        <br>
                                        <i class="bi-calendar"></i> 12 Agustus 2024
                                    </div>
                                    <div class="flex-fill mx-1">Rp.100000</div>
                                </div>
                            </a>
                        </div>
                    </div>



                    <!-- Card 2 -->
                    <div class="col-md-3 p-3">
                        <div class="card border mb-4" style="border-radius: 20px;">
                            <a href="{{ url('detailcard') }}" style="text-decoration: none; color: inherit;">
                                <img src="user/imgs/blog-2.jpg" alt="Design for Everyone"
                                    class="card-img-top w-100" style="border-radius: 20px;">
                                <div class="mb-2 p-2">
                                    <div class="status small text-muted">sedang berlangsung</div>
                                    <div class="title">Jadi Pendongeng? Berani Dong!</div>
                                    <div class="info">
                                        <i class="bi-geo-alt"></i> Mojangangu Malang
                                        <br>
                                        <i class="bi-calendar"></i> 12 Agustus 2024
                                    </div>
                                    <div class="flex-fill mx-1">Rp.100000</div>
                                </div>
                            </a>
                        </div>
                    </div>



                    <!-- Card 3 -->
                    <div class="col-md-3 p-3">
                        <div class="card border mb-4" style="border-radius: 20px;">
                            <a href="{{ url('detailcard') }}" style="text-decoration: none; color: inherit;">
                                <img src="user/imgs/blog-2.jpg" alt="Design for Everyone"
                                    class="card-img-top w-100" style="border-radius: 20px;">
                                <div class="mb-2 p-2">
                                    <div class="status small text-muted">sedang berlangsung</div>
                                    <div class="title">Jadi Pendongeng? Berani Dong!</div>
                                    <div class="info">
                                        <i class="bi-geo-alt"></i> Mojangangu Malang
                                        <br>
                                        <i class="bi-calendar"></i> 12 Agustus 2024
                                    </div>
                                    <div class="flex-fill mx-1">Rp.100000</div>
                                </div>
                            </a>
                        </div>
                    </div>



                    <!-- Card 4-->
                    <div class="col-md-3 p-3">
                        <div class="card border mb-4" style="border-radius: 20px;">
                            <a href="{{ url('detailcard') }}" style="text-decoration: none; color: inherit;">
                                <img src="user/imgs/blog-2.jpg" alt="Design for Everyone"
                                    class="card-img-top w-100" style="border-radius: 20px;">
                                <div class="mb-2 p-2">
                                    <div class="status small text-muted">sedang berlangsung</div>
                                    <div class="title">Jadi Pendongeng? Berani Dong!</div>
                                    <div class="info">
                                        <i class="bi-geo-alt"></i> Mojangangu Malang
                                        <br>
                                        <i class="bi-calendar"></i> 12 Agustus 2024
                                    </div>
                                    <div class="flex-fill mx-1">Rp.100000</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col text-center mt-4 ">
                        <a href="/katalog"class="btn btn-primary rounded-pill">Selengkapnya ...</a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="page-footer" style="background-color: rgba(255, 106, 138, 1); padding: 40px 0; color: white; font-family: 'Poppins', sans-serif;">
    <div class="container">
        <div class="row">
            <!-- Teks dan Sosial Media -->
            <div class="col-sm-6">
                <div style="display: flex; flex-direction: column; align-items: flex-start;">
                    <!-- Teks -->
                    <div style="margin-bottom: 20px;">
                        <p style="margin: 0; font-size: 18px; font-weight: 600;">BoondaChildCare</p>
                        <p style="font-size: 14px; color: #fff;">© 2023 Semua Hak Cipta Dilindungi.</p>
                    </div>
                    <!-- Sosial Media -->
                    <div class="socials">
                        <a class="social-item" href="https://boonda.id/index" style="margin-right: 20px;">
                            <i class="ti-google" style="font-size: 20px; color: #db4437;"></i>
                        </a>
                        <a class="social-item" href="https://www.instagram.com/boonda_id/" style="margin-right: 20px;">
                            <i class="ti-instagram" style="font-size: 20px; color: #333;"></i>
                        </a>
                        <a class="social-item" href="https://x.com/boondaid/" style="margin-right: 20px;">
                            <i class="ti-twitter" style="font-size: 20px; color: #1da1f2;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Kosongkan kolom ini jika hanya ada satu kolom -->
            <div class="col-sm-6"></div>
        </div>
    </div>
</footer>

</body>

</html>
