<x-app-layout title="Input">


    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Sejarah</h4>
                </div>
            </div>
        </div>
    </div>




    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            {{-- <form> --}}
            <div class="card">
                <div class="card-body">
                    @if ($data->id)
                        <form action="{{ route('admin.sejarah.update', $data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PATCH')
                        @else
                            <form action="{{ route('admin.sejarah.store') }}" method="post"
                                enctype="multipart/form-data">
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="judul">Judul :</label>
                        <input type="text" name="judul" value="{{ $data->judul }}"
                            class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Judul"
                            style="width:30%">
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <h5 class="fs-14 mb-3">Gambar:</h5>
                        {{-- <p class="text-muted">Tambahkan Gambar Utama Produk.</p> --}}
                        <input class="form-control @error('image') is-invalid @enderror" name="image" id="image"
                            type="file" accept="image/png, image/gif, image/jpeg" style="width:30%">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



                    <div class="mb-3">
                        <label>Description :</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="10">{{ $data->deskripsi }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- end card -->
            <div class="text-center mb-3">
                <a type="button" class="btn btn-danger" href="{{ url('admin/sejarah') }}"><i class="fas fa-times"></i>
                    Batal</a>
                <button type="submit" class="btn btn-success w-sm">Submit</button>
            </div>
            {{-- </form> --}}
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    {{-- </div>
        <!-- container-fluid -->
    </div> --}}
</x-app-layout>
