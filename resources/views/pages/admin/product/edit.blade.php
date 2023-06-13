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
                    <label for="Nama Product" class="form-label ">Nama
                        Product</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                        placeholder="Masukkan Nama Product" value="{{ $product->nama }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class="mb-3">
                    <label for="Jensi Product" class="form-label @error('price') is-invalid @enderror">Jenis
                        Product</label>
                    <select name="category" class="form-select @error('category') is-invalid @enderror">
                        <option value="{{ $product->category }}">Stola</option>
                        <option value="{{ $product->category }}">Sortali</option>
                        <option value="{{ $product->category }}">Gantugan Kunci</option>
                    </select>
                    @error('category')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label @error('price') is-invalid @enderror"
                        for="product-price-input">Harga</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="product-price-addon">$</span>
                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
                            id="product-price-input" placeholder="Enter price" aria-label="Price"
                            aria-describedby="product-price-addon" value="{{ $product->price }}">
                    </div>
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class="mb-3">
                    <label class="form-label @error('stock') is-invalid @enderror"
                        for="product-stock-input">Stok</label>
                    <div class="input-group mb-3">
                        <div class="input-step">
                            <button type="button" onclick="kurang()" class="minus">–</button>
                            <input type="number" name="stock"
                                class="form-control @error('stock') is-invalid @enderror" id="product-stock-input"
                                value="{{ $product->stock }}" min="0" max="100">
                            <button type="button" onclick="tambah()" class="plus">+</button>
                        </div>
                    </div>
                    @error('stock')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                        name="image" placeholder="Masukkan Gambar" value="{{ $product->image }}">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="Deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="description" style="height:140px;" class="form-control @error('description') is-invalid @enderror"
                        placeholder="Masukkan Deskripsi ">{{ $product->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


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
            var value = parseInt($('.stock').val());
            $('.stock').val(value + 1);
        }

        function kurang() {
            var value = parseInt($('.stock').val());
            if (value > 1) {
                $('.stock').val(value - 1);
            }
        }
    </script>



    </x-app-layouts>
