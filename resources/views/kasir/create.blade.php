<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masukan Keranjang</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <h1>{{ Route::is('kasir.show') ? 'Form Tambah Ke Keranjang' : '' }}</h1>
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form
                            action="{{ route('AddToCart') }}"
                            method="POST" enctype="multipart/form-data" placeholder="Masukkan Nama Product">
                            @csrf
                            @method('POST')
                            <div class="form-group mb-3">
                                <input type="hidden" class="form-control" name="id" value="{{ $ProdukDetail->id}}">
                                <label class="font-weight-bold">{{ old('name',$ProdukDetail->name) }}</label>
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">{{ old('name',$ProdukDetail->category) }}</label>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">{{ old('name',$ProdukDetail->price) }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Quantity</label>
                                        <input type="number"
                                            class="form-control @error('Quantity') is-invalid @enderror" name="quantity"
                                            value="{{ old('quantity') }}"
                                            placeholder="Masukkan Jumlah Product Yang Ingin Di Beli">

                                        @error('quantity')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">Masukan Keranjang</button>
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
