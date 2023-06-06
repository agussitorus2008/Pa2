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
                        <div class="text-end">
                            <div class="list-inline hstack gap-2 mb-0">
                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-placement="top" title="" data-bs-original-title="Edit">
                                    <a href="{{ route('admin.sejarah.edit', $sejarah->id) }}"
                                        class="text-primary d-inline-block edit-item-btn">
                                        <i class="ri-pencil-fill fs-16"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-placement="top" title="" data-bs-original-title="Remove">
                                    <a href="javascript:;"
                                        onclick="handle_confirm('Apakah Anda Yakin?', 'Yakin', 'Tidak', 'DELETE', '{{ route('admin.sejarah.destroy', $sejarah->id) }}');"
                                        class="text-danger d-inline-block remove-item-btn">
                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                    </a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{ $AllSejarah->links('theme.app.pagination') }}
