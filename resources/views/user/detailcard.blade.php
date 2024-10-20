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
                        <a class="nav-link " href="{{ url('/') }}#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Pay">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#recomendasi">Rekomendasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:history.back()" class="btn btn-primary rounded">Kembali</a>
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
        <img src="assets/imgs/whatsapp.png" alt="Chat with us on WhatsApp" id="whatsappIcon" style="cursor: pointer;">

        <!-- Hidden Popup for Numbers -->
        <div class="whatsapp-options rounded" id="whatsappOptions" style="display: none;" class="header">
            <p class="m-0 text-center"">
                Haii... PapaBoonda
                <br>
                Jangan Ragu untuk Bertanya!
            </p>
            <a href="https://wa.me/6281276001730" target="_blank"class="btn-btn-whatsapp">
                <img src="assets/imgs/whatsapp.png" alt="CS Pendaftaran" class="btn-icon"> CS Pendaftaran
            </a>
            <a href="https://wa.me/6281234474107" target="_blank"class="btn-btn-whatsapp">
                <img src="assets/imgs/whatsapp.png" alt="CS Pendaftaran" class="btn-icon"> CS Pengaduan
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

    <section id="Pay" class="container mt-5 pt-5">

        <div class="text-left mb-3">
            <a href="javascript:history.back()" class="btn rounded">
                <i class="bi bi-box-arrow-left"></i>
            </a>
        </div>

        <div class=" card card-checkout border mb-4">
            <div class="row p-3">
                <div class="col"> <img style="width: 100% !important" src="assets/imgs/blog-1.jpg"
                        alt="Design for Everyone" class="card-img"></div>

                <div class="col-6 card-body">
                    <h5 class="card-title">Lomba Mewarnai</h5>
                    <div class="item-details">
                        <p><strong>Lokasi:</strong>jl sudimoro</p>
                        <p><strong>Status:</strong>Offline</p>
                        <p>
                            <strong>Kolaborator:</strong>
                            <a href="{{ url('/kolaborator') }}" class="text-primary" style="text-decoration: none;">Sani
                                Hilmi</a>
                        </p>
                        <p class="price-tag">Rp120.000</Rp120>
                        </p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">


                        <a class="btn btn-primary btn-sm rounded-pill"
                            href="https://play.google.com/store/apps/details?id=com.gti.boonda">Pemesanan</a>
                    </div>
                    <div class="description mt-3">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit,
                            minima? Voluptas nemo harum impedit nisi.</p>

                    </div>
                </div>
            </div>
            <div class="container-detailcard">
                <div class="title">Lorem Ipsum</div>
                <div class="grid-container">
                    <div class="item">
                        <div class="item-text">
                            <p>Lorem ipsum</p>
                            <div class="item-price">
                                <p>Rp. 100.000</p>
                                <p class="old-price">Rp. 150.000</p>
                            </div>
                            <p>Lorem ipsum</p>
                        </div>
                        <button class="btn-card btn-primary">Pesan</button>
                    </div>

                    <div class="item">
                        <div class="item-text">
                            <p>Lorem ipsum</p>
                            <div class="item-price">
                                <p>Rp. 100.000</p>
                                <p class="old-price">Rp. 150.000</p>
                            </div>
                            <p>Lorem ipsum</p>
                        </div>
                        <button class="btn-card btn-primary">Pesan</button>
                    </div>

                    <div class="item">
                        <div class="item-text">
                            <p>Lorem ipsum</p>
                            <div class="item-price">
                                <p>Rp. 100.000</p>
                                <p class="old-price">Rp. 150.000</p>
                            </div>
                            <p>Lorem ipsum</p>
                        </div>
                        <button class="btn-card btn-primary">Pesan</button>
                    </div>

                    <div class="item">
                        <div class="item-text">
                            <p>Lorem ipsum</p>
                            <div class="item-price">
                                <p>Rp. 100.000</p>
                                <p class="old-price">Rp. 150.000</p>
                            </div>
                            <p>Lorem ipsum</p>
                        </div>
                        <button class="btn-card btn-primary">Pesan</button>
                    </div>

                    <div class="item">
                        <div class="item-text">
                            <p>Lorem ipsum</p>
                            <div class="item-price">
                                <p>Rp. 100.000</p>
                                <p class="old-price">Rp. 150.000</p>
                            </div>
                            <p>Lorem ipsum</p>
                        </div>
                        <button class="btn-card btn-primary">Pesan</button>
                    </div>

                    <div class="item">
                        <div class="item-text">
                            <p>Lorem ipsum</p>
                            <div class="item-price">
                                <p>Rp. 100.000</p>
                                <p class="old-price">Rp. 150.000</p>
                            </div>
                            <p>Lorem ipsum</p>
                        </div>
                        <button class="btn-card btn-primary">Pesan</button>
                    </div>
                </div>
            </div>
    </section>

    <!-- Include Bootstrap JS and dependencies -->


    <section id="recomendasi" class="container mt-5 pt-5">
        <div class="container text-center">

            <h6 class="section-title mb-4 mt-5">Recomendasi Event</h6>



            <div class="row text-left">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card border mb-4 p-3 " style="border-radius: 20px; ">
                        <div class="card-body ">
                            <h5 class="card-title">Design for Everyone</h5>
                        </div>
                        <img src="assets/imgs/blog-1.jpg" alt="Design for Everyone" class="card-img-top w-100">
                        <div class="card-body">
                            <div class="mb-2">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>

                            <a class="btn btn-primary btn-sm rounded-pill flex-fill mx-1"
                                href="{{ url('detailcard') }}">Ikuti
                                Kelas </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card border mb-4 p-3" style="border-radius: 20px; ">
                        <div class="card-body">
                            <h5 class="card-title">Web Layouts</h5>
                        </div>
                        <img src="assets/imgs/blog-2.jpg" alt="Web Layouts" class="card-img-top w-100">
                        <div class="card-body">
                            <div class=" mb-2">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>


                            <a class="btn btn-primary btn-sm rounded-pill flex-fill mx-1"
                                href="{{ url('detailcard') }}">Ikuti
                                Kelas </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card border mb-4 p-3"style="border-radius: 20px; ">
                        <div class="card-body">
                            <h5 class="card-title ">Bootstrap </h5>
                        </div>
                        <img src="assets/imgs/blog-3.jpg" alt="Bootstrap Framework" class="card-img-top w-100">
                        <div class="card-body">
                            <div class=" mb-2">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 446</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>


                            <a class="btn btn-primary btn-sm rounded-pill flex-fill mx-1"
                                href="{{ url('detailcard') }}">Ikuti
                                Kelas </a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card border mb-4 p-3"style="border-radius: 20px; ">
                        <div class="card-body">
                            <h5 class="card-title">Web Layouts</h5>
                        </div>
                        <img src="assets/imgs/blog-2.jpg" alt="Web Layouts" class="card-img-top w-100">
                        <div class="card-body">
                            <div class=" mb-2">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>


                            <a class="btn btn-primary btn-sm rounded-pill flex-fill mx-1"
                                href="{{ url('detailcard') }}">Ikuti
                                Kelas </a>
                        </div>
                    </div>
                </div>
                <div class="col text-center mb-5 mt-4">
                    <a href="/katalog">Selengkapnya</a>
                </div>
            </div>
    </section>
    <footer class="page-footer" style="background-color: #fdd945; padding: 40px 0; color: white;">
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
                            <a class="social-item" href="https://www.instagram.com/boonda_id/"
                                style="margin-right: 20px;">
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
