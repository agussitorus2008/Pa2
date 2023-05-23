<x-app-layout title="Home">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Product</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>

    <form class="needs-validation" method="post" action="{{ route('admin.update', $product->id) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="mb-3">
                    <label for="Nama Product" class="form-label">Nama Product</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Product"
                        value="{{ $product->nama }}">
                </div>
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror


                <div class="mb-3">
                    <label for="Jensi Product" class="form-label">Jenis Product</label>
                    <select name="category" class="form-select">
                        <option value="{{ $product->category }}">Stola</option>
                        <option value="{{ $product->category }}">Sortali</option>
                        <option value="{{ $product->category }}">Gantugan Kunci</option>
                    </select>
                </div>
                @error('category')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label class="form-label" for="product-price-input">Harga</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="product-price-addon">$</span>
                        <input type="number" name="price" class="form-control" id="product-price-input"
                            placeholder="Enter price" aria-label="Price" aria-describedby="product-price-addon"
                            value="{{ $product->price }}">
                    </div>
                </div>

                @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label class="form-label" for="product-discount-input">Stock</label>
                    <div class="input-group mb-3">

                        <div class="input-step">
                            <button type="button" onclick="kurang()" class="minus">–</button>
                            <input type="number" name="quantity" class="product-quantity" value="1" min="0"
                                max="100">
                            <button type="button" onclick="tambah()" class="plus">+</button>
                        </div>
                    </div>
                </div>
                @error('stock')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" name="image" class="form-control" placeholder="Masukkan Gambar"
                        value="{{ $product->image }}">
                </div>
                @error('image')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror


                <div class="mb-3">
                    <label for="Deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="description" style="height:140px;" class="form-control" placeholder="Masukkan Deskripsi ">{{ $product->description }}</textarea>
                </div>

                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="card-footer">
                <div class="hstack gap-2 justify-content">
                    <a type="button" class="btn btn-light" href="{{ route('admin.main') }}"><i
                            class="fas fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-primary" id="add-btn">Submit</button>
                </div>
            </div>
    </form>

    <script>
        function tambah() {
            var value = parseInt($('.product-quantity').val());
            $('.product-quantity').val(value + 1);
        }

        function kurang() {
            var value = parseInt($('.product-quantity').val());
            if (value > 1) {
                $('.product-quantity').val(value - 1);
            }
        }
    </script>



    </x-app-layouts>
