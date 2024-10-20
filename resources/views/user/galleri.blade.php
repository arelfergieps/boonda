@extends('user.master')

@section ('user')
    
<section id="galeri" class="section">
    <div class="container text-center">
        <h2 class="title mt-4 pt-4 text-center">Galeri Foto</h2>
        <p class="subtitle text-center">Lihat koleksi foto dari kegiatan kami</p>
    </div>
    <div class="container text-center">
        <!-- Button Group -->
        <div class="mb-4 d-flex justify-content-between flex-wrap">
            @foreach ($years as $year)
                <button class="btn btn-primary btn-sm rounded-pill flex-fill mx-1" onclick="filterImages({{ $year->tahun }})">{{ $year->tahun }}</button>
            @endforeach        
        
            <!-- Dropdown Button -->
            <div class="dropdown flex-fill mx-1">
                <button class="btn btn-primary btn-sm rounded-pill dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pilih Tahun
                </button>
                <div class="dropdown-menu primary w-100 rounded-lg" aria-labelledby="dropdownMenuButton">
                    @foreach ($years as $year)
                        <a class="dropdown-item" href="#" onclick="filterImages({{ $year->tahun }})">{{ $year->tahun }}</a>
                    @endforeach
                </div>
            </div>
        </div>        

        <!-- Galeri Foto -->
        <div class="gallery">
            @foreach ($images as $image)
                <div class="gallery-item">
                    <img src="{{ asset('storage/' . $image->foto) }}" alt="Foto {{ $loop->iteration }}">
                </div>
            @endforeach

            <!-- Button to add images -->
            <a class="btn btn-primary add-image-btn rounded-pill" href="{{ route('login') }}">Tambah Gambar</a>
        </div>
    </div>
</section>

<script>
function filterImages(year) {
    window.location.href = "{{ route('user.galleri') }}?year=" + year;

    const galleryItems = document.querySelectorAll('.gallery-item');
    galleryItems.forEach(item => {
        item.classList.remove('show'); 
    });
    
    setTimeout(() => {
        galleryItems.forEach(item => {
            item.classList.add('show');
        });
    }, 100);
}
</script>


@push('js')
@endpush


  
    <!-- JavaScript -->
    <script>
        let isLightboxOpen = false;

        function toggleLightbox(imgElement) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightbox-image');

            if (isLightboxOpen) {
                lightbox.style.display = 'none';
                isLightboxOpen = false;
            } else {
                lightbox.style.display = 'flex';
                lightboxImage.src = imgElement.src;
                isLightboxOpen = true;
            }
        }

        function closeLightbox() {
            if (isLightboxOpen) {
                const lightbox = document.getElementById('lightbox');
                lightbox.style.display = 'none';
                isLightboxOpen = false;
            }
        }
    </script>
    @endsection
</body>
</html>

