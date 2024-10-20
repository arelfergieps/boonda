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

     <!-- Link Google Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo&display=swap" rel="stylesheet">

    <!-- font icons -->
    <link rel="stylesheet" href="user/vendors/themify-icons/css/themify-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Bootstrap + Steller main styles -->
    <link rel="stylesheet" href="user/css/user.css">
    

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
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
                        <a class="nav-link text-white" href="{{ url('/') }}#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="{{ url('/') }}#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/') }}#katalog">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/') }}#ulasan">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/') }}#galeri">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/') }}#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white btn-primary rounded-pill " href="https://boonda.id/index">Boonda.id</a>
                    </li>
                         
                </ul>
            </div>
        </div>
    </nav>

    </body>
    
    </html>
        <!-- End of page navibation -->

    <!-- HTML for WhatsApp Popup -->
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    @yield('user')
    <!-- Page Header -->


    <!-- Page Footer -->
    <footer class="page-footer" style="background-color: rgba(255, 106, 138, 1); padding: 40px 0; color: white;">
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

    <!-- End of page footer -->



    <!-- End of page footer -->

    <!-- core  -->
    @stack('js')

    <!-- jQuery (gunakan satu sumber saja, CDN atau lokal) -->
    <!-- Popper.js (Versi untuk Bootstrap 5) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

<!-- Bootstrap 5.1.3 JS (Tanpa jQuery) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<!-- Steller Custom JS -->
<script src="{{ asset('user/js/steller.js') }}"></script>
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

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Popper.js dan Bootstrap JS (pastikan versi yang sama digunakan) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- Steller Custom JS -->
    <script src="{{ asset('assets/js/steller.js') }}"></script> --}}

</body>

</html>