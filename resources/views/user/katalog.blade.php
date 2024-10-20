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
    <link rel="stylesheet" href="user/css/steller.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-primary" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="user/imgs/logoboonda.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:history.back()" class="btn btn-primary rounded">
                            Kembali</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- WhatsApp Popup -->
    <div class="whatsapp-popup" id="whatsappPopup">
        <img src="user/imgs/whatsapp.png" alt="Chat with us on WhatsApp" id="whatsappIcon" style="cursor: pointer;">

        <!-- Hidden Popup for Numbers -->
        <div class="whatsapp-options rounded" id="whatsappOptions" style="display: none;">
            <p class="m-0 text-center">
                Haii... PapaBoonda
                <br>
                Jangan Ragu untuk Bertanya!
            </p>
            <a href="https://wa.me/6281276001730" target="_blank" class="btn-btn-whatsapp">
                <img src="user/imgs/whatsapp.png" alt="CS Pendaftaran" class="btn-icon"> CS Pendaftaran
            </a>
            <a href="https://wa.me/6281234474107" target="_blank" class="btn-btn-whatsapp">
                <img src="user/imgs/whatsapp.png" alt="CS Pendaftaran" class="btn-icon"> CS Pengaduan
            </a>
        </div>
    </div>

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

    <section class="section mt-5">
        <div class="container text-center">
            <h6 class="subtitle">My Blogs</h6>
            <h6 class="section-title mb-4">Latest News</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos.<br>
                rerum commodi corrupti, temporibus non quam.</p>

            <!-- Buttons Section -->
            <div class="mb-4 d-flex justify-content-between flex-wrap">
                <button class="btn btn-katalog btn-sm rounded-pill flex-fill mx-1">usia 0-3</button>
                <button class="btn btn-katalog btn-sm rounded-pill flex-fill mx-1">usia 4-5</button>
                <button class="btn btn-katalog btn-sm rounded-pill flex-fill mx-1">usia 6-8</button>
                <button class="btn btn-katalog btn-sm rounded-pill flex-fill mx-1">usia 9-12</button>
                <button class="btn btn-katalog btn-sm rounded-pill flex-fill mx-1">usia 13-15</button>

                <!-- Dropdown Button -->
                <div class="dropdown flex-fill mx-1">
                    <button class="btn btn-katalog btn-sm rounded-pill dropdown-toggle w-100" type="button"
                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Pilih Usia
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">0 sampai 10</a></li>
                        <li><a class="dropdown-item" href="#">11 sampai 15</a></li>
                        <li><a class="dropdown-item" href="#">16 sampai 00</a></li>
                    </ul>
                </div>
            </div>

            <div class="row text-left">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card border mb-4 p-3 " style="border-radius: 20px; ">
                        <div class="card-body">
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
                        <img src="user/imgs/blog-2.jpg" alt="Web Layouts" class="card-img-top w-100">
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
                        <img src="user/imgs/blog-2.jpg" alt="Web Layouts" class="card-img-top w-100">
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

                <!-- Card 5 -->
                <div class="col-md-3">
                    <div class="card border mb-4 p-3"style="border-radius: 20px; ">
                        <div class="card-body">
                            <h5 class="card-title">Web Layouts</h5>
                        </div>
                        <img src="assets/imgs/blog-3.jpg" alt="Web Layouts" class="card-img-top w-100">
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

                <!-- Card 6 -->
                <div class="col-md-3">
                    <div class="card border mb-4 p-3"style="border-radius: 20px; ">
                        <div class="card-body">
                            <h5 class="card-title">Web Layouts</h5>
                        </div>
                        <img src="assets/imgs/blog-1.jpg" alt="Web Layouts" class="card-img-top w-100">
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
                <!-- Card 7 -->
                <div class="col-md-3">
                    <div class="card border mb-4 p-3"style="border-radius: 20px; ">
                        <div class="card-body">
                            <h5 class="card-title">Costumer servis</h5>
                        </div>
                        <img src="assets/imgs/blog-3.jpg" alt="Web Layouts" class="card-img-top w-100">
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

                <!-- Card 8 -->
                <div class="col-md-3">
                    <div class="card border mb-4 p-3"style="border-radius: 20px; ">
                        <div class="card-body">
                            <h5 class="card-title">UI/UX</h5>
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



            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="page-footer" style="background-color: #fdd945; padding: 40px 0; color: white;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div style="display: flex; flex-direction: column; align-items: flex-start;">
                        <div style="margin-bottom: 20px;">
                            <p style="margin: 0; font-size: 18px; font-weight: 600;">BoondaChildCare</p>
                            <p style="font-size: 14px; color: #fff;">© 2023 Semua Hak Cipta Dilindungi.</p>
                        </div>
                        <!-- Social Media -->
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
                <div class="col-sm-6"></div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5.1.3 JS (No jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Steller Custom JS -->
    <script src="{{ asset('assets/js/steller.js') }}"></script>

</body>

</html>
