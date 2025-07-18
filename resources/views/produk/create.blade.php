<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Route::is('produk.edit') ? 'Form Edit Produk' : 'Form Tambah Produk' }}</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <h1>{{ Route::is('produk.edit') ? 'Edit Produk' : 'Tambah Produk Baru' }}</h1>
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form
                            action="{{ Route::is('produk.edit') ? route('produk.update', ['id' => $ProdukDetail->id]) : route('produk.store') }}"
                            method="POST" enctype="multipart/form-data" placeholder="Masukkan Nama Product">
                            @csrf
                            @if (Route::is('produk.edit'))
                                @method('PUT')
                            @endif
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama Produk</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ isset($ProdukDetail) ? old('name',$ProdukDetail->name) : old('name') }}"
                                    placeholder="Masukkan Nama Produk">
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Kategori</label>
                                <input type="text" class="form-control @error('category') is-invalid @enderror"
                                    name="category"
                                    value="{{ isset($ProdukDetail) ? old('category',$ProdukDetail->category) : old('category') }}"
                                    placeholder="Masukkan Kategori Produk">

                                @error('category')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Deskripsi</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5"
                                    placeholder="Masukkan Deskripsi Product">{{ isset($ProdukDetail) ? old('description',$ProdukDetail->description) : old('description') }}</textarea>

                                @error('description')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Harga</label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                            name="price" value="{{ isset($ProdukDetail) ? old('price',$ProdukDetail->price) : old('price') }}"
                                            placeholder="Masukkan Harga Product">

                                        @error('price')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Stok</label>
                                        <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                            name="stock" value="{{ isset($ProdukDetail) ? old('stock',$ProdukDetail->stock) : old('stock') }}"
                                            placeholder="Masukkan Stock Product">

                                        @error('stock')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>

</html>
