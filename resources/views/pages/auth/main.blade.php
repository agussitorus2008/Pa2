<x-auth-layouts title="Login">
    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">

            <!-- end row -->
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">LOGIN</h5>
                            </div>
                            <div class="p-2 mt-4">
                                <form class="needs-validation" method="post" action="{{ route('login.custom') }}">
                                    @csrf

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <p>{{ $error }}</p>
                                            @endforeach
                                        </div>
                                    @endif

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username"
                                            class="form-control @error('username') is-invalid @enderror" id="username"
                                            placeholder="Masukkan Username Anda">
                                        @error('username')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    <div class="mb-3">
                                        {{-- <div class="float-end">
                                            <a href="auth-pass-reset-basic.html" class="text-muted">Forgot password?</a>
                                        </div> --}}
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" name="password" class="form-control pe-5"
                                                placeholder="Enter password" id="password-input">
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                                                type="button" id="password-addon"><i
                                                    class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                        @error('password')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="auth-remember-check">
                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <div class="mt-4 text-center">
                        <p class="mb-0">Belum memiliki akun ? <a href="{{ route('register-user') }}"
                                class="fw-bold text-primary text-decoration-underline"> Daftar </a> </p>
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->
    <!-- end auth-page-wrapper -->
</x-auth-layouts>
