<x-auth-layouts title="Login">
    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">REGISTRASI AKUN</h5>
                                <p class="text-muted">Daftarkan akun mu disini !</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form class="needs-validation" method="post" action="{{ route('register.custom') }}">
                                    @csrf
                                    {{-- @if ($errors->any())
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                    <p>{{ $error }}</p>
                                                @endforeach
                                            </div>
                                        @endif --}}

                                    {{-- <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username"
                                            class="form-control @error('username') is-invalid @enderror" id="username"
                                            placeholder="Masukkan Username Anda" value="{{ old('username') }}">
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="username"
                                            class="form-control @error('username') is-invalid @enderror" id="username"
                                            placeholder="Enter username">

                                        @error('username')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="nama"
                                            class="form-control @error('nama') is-invalid @enderror" id="nama"
                                            placeholder="Enter nama">
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" name="email"
                                            class="form-control @error('nama') is-invalid @enderror" id="useremail"
                                            placeholder="Enter email address">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="userpassword" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="userpassword" placeholder="Enter password">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Daftar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Sudah memiliki akun ? <a href="{{ route('login') }}"
                                class="fw-bold text-primary text-decoration-underline"> Login </a> </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->
    </div>
</x-auth-layouts>
