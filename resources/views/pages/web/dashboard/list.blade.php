<x-app-layout title="sejarah">
    {{-- <div class="page-content">
      <div class="container-fluid"> --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Sejarah</h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <!-- Simple card -->
                    <div class="card">
                        <div class="row g-0">
                            <h3 class="card-title text-center py-2">Stola Batak</h3>
                            <div class="col-md-3">
                                <img src="{{ asset('images/profile/image/Soubat.png') }}" width="100%" height="234"
                                    data-bs-toggle="modal" data-bs-target="#myModals{{ $sejarah->id }}" />
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <div style="text-align: justify;">
                                        <p class="card-text">
                                            Stola adalah salah satu jenis souvenir tradisional dari suku Batak, yang
                                            merupakan kelompok
                                            etnis
                                            yang
                                            mendiami wilayah Tapanuli Utara, Tapanuli Tengah, Tapanuli Selatan, Samosir,
                                            Humbang Hasundutan,
                                            Karo,
                                            Dairi, dan sekitarnya di Provinsi Sumatera Utara, Indonesia. Stola biasanya
                                            terbuat dari kain
                                            ulos,
                                            yang
                                            merupakan kain tradisional Batak yang dibuat dengan menggunakan tenun
                                            tangan.
                                            Sejarah stola sebagai souvenir Batak dapat ditelusuri ke dalam warisan
                                            budaya Batak yang kaya.
                                            Ulos
                                            sendiri memiliki makna dan simbol yang mendalam dalam budaya Batak. Kain
                                            ulos dianggap sebagai
                                            simbol
                                            kemakmuran, kehormatan, dan keberkahan. Tradisi membuat ulos telah ada di
                                            kalangan suku Batak
                                            selama
                                            berabad-abad dan diwariskan dari generasi ke generasi.
                                            Stola digunakan pada berbagai acara dan upacara adat Batak, seperti
                                            perkawinan, pemakaman, pesta
                                            adat,
                                            dan festival budaya. Di masa lalu, stola sering kali digunakan sebagai
                                            bagian dari pakaian adat
                                            yang
                                            dikenakan oleh tokoh-tokoh adat atau orang penting dalam komunitas Batak.
                                            Seiring dengan perkembangan pariwisata dan permintaan akan souvenir khas
                                            daerah, stola Batak
                                            mulai
                                            diproduksi dan dijual sebagai suvenir. Stola sering kali dihiasi dengan
                                            motif-motif tradisional
                                            Batak,
                                            seperti motif binatang, tumbuhan, atau pola geometris yang khas. Setiap
                                            motif memiliki arti dan
                                            makna
                                            yang dalam dalam budaya Batak.
                                            Stola souvenir Batak menjadi populer di kalangan wisatawan dan pengunjung
                                            yang tertarik dengan
                                            budaya
                                            dan kerajinan lokal. Souvenir ini menjadi cara yang baik untuk mengenang
                                            kunjungan mereka ke
                                            daerah
                                            Batak atau sebagai hadiah bagi teman dan keluarga. Dengan demikian, sejarah
                                            stola souvenir Batak
                                            dapat
                                            ditelusuri ke dalam warisan budaya suku Batak yang kaya, dan stola ini
                                            menjadi simbol dari
                                            keindahan
                                            dan
                                            kekayaan tradisi Batak yang berkelanjutan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- </div>
      </div> --}}
</x-app-layout>
