<x-app-layout title="sejarah">

    <div class="content_list">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Sejarah</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="row">
                <div id="list_result"></div>
            </div>
        </div>

    </div>
    @section('custom_js')
        <script>
            load_list(1);
        </script>
    @endsection
</x-app-layout>
