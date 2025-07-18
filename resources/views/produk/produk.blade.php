@extends('layouts._sidebar')

@section('content')
    <div class="container">
        <a href="{{ route('produk.add') }}">
            <button class="btn btn-primary fw-semibold d-flex align-items-center justify-content-center">
                <i class="bi bi-plus-circle-fill me-2"></i>
                Tambah Produk
            </button>
        </a>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="container py-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">

            @foreach ($ProdukDetail as $item)
                <div class="col">
                    <div class="card h-100 shadow-sm rounded-4 product-card">

                        <a href="#"> 
                            <div class="img-container">
                                <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top"
                                    alt="{{ $item->name }}"
                                    onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/ffffff?text=Gambar+Rusak';">
                            </div>
                        </a>

                        {{-- LABEL DISKON (Dibuat Kondisional) --}}
                        {{-- Tampilkan ini hanya jika produk punya diskon --}}
                        {{-- @if ($item->discount > 0)
                        <span class="position-absolute top-0 start-0 bg-danger text-white small fw-semibold px-3 py-1 m-3 rounded-pill">
                            DISKON {{ $item->discount }}%
                        </span>
                        @endif --}}

                        <div class="card-body p-4 d-flex flex-column">
                            <p class="text-muted small mb-2">{{ $item->category }}</p>
                            <h5 class="card-title fw-bold text-dark mb-3 text-truncate">
                                <a href="#" class="text-decoration-none text-dark">{{ $item->name }}</a>
                            </h5>

                            <div class="mt-auto">
                                <p class="fs-4 fw-bold text-primary mb-0">
                                    Rp {{ number_format($item->price, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>

                        <div class="card-footer p-3 pt-0 bg-transparent border-top-0">
                            <div class="d-flex gap-2">
                                <a href="{{ route('produk.edit', ['id' => $item->id]) }}" class="btn btn-outline-secondary w-100 fw-semibold">
                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                </a>
                                <form action="{{ route('produk.destroy', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger w-100 fw-semibold">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
