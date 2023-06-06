@foreach ($AllSejarah as $sejarah)
    <div class="col-12">
        <!-- Simple card -->
        <div class="card">
            <div class="row g-0">
                <h3 class="card-title text-center py-2">{{ $sejarah->judul }}</h3>
                <div class="col-md-3">
                    <img src="{{ asset('images/sejarah/image/' . $sejarah->image) }}" width="100%" height="234"
                        data-bs-toggle="modal" data-bs-target="#myModals{{ $sejarah->id }}" />
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <div style="text-align: justify;">
                            <p class="card-text">{{ $sejarah->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{ $AllSejarah->links('theme.app.pagination') }}
