@extends('layouts._sidebar')

@section('content')
        <!-- Kontainer utama -->
    <div class="container py-5">
        
        <h1 class="text-center fw-bold text-dark mb-5">Produk Kami</h1>

        <!-- Grid untuk kartu produk -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">

            <!-- === KARTU PRODUK 1 === -->
            <div class="col">
                <div class="card h-100 shadow-sm rounded-4 product-card">
                    <!-- Bagian Gambar Produk -->
                    <div class="img-container">
                        <img 
                            src="https://placehold.co/600x400/3498db/ffffff?text=Produk+1" 
                            class="card-img-top" 
                            alt="Gambar Produk Keren"
                            onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/ffffff?text=Gagal+Muat';"
                        >
                    </div>
                    <!-- Label Diskon (Opsional) -->
                    <span class="position-absolute top-0 start-0 bg-danger text-white small fw-semibold px-3 py-1 m-3 rounded-pill">DISKON 30%</span>

                    <!-- Bagian Konten/Deskripsi -->
                    <div class="card-body p-4">
                        <p class="text-muted small mb-2">Elektronik</p>
                        <h5 class="card-title fw-bold text-dark mb-3 text-truncate">Headphone Bluetooth Canggih</h5>
                        
                        <!-- Harga Produk -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fs-4 fw-bold text-primary mb-0">Rp750.000</p>
                            <p class="text-muted text-decoration-line-through mb-0">Rp1.000.000</p>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <button class="btn btn-primary w-100 fw-semibold d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart-plus-fill me-2"></i>
                            <span>Tambah Keranjang</span>
                        </button>
                    </div>
                </div>
            </div>
    </div>
@endsection