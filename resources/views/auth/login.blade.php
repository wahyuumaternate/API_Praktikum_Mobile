<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LOGIN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('front/img/logo-unkhair.png') }}" rel="icon">
    <link href="{{ asset('front/img/logo-unkhair.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">


</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="/" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('front/img/logo-unkhair.png') }}" alt="">
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your email & password to login</p>
                                    </div>

                                    <form class="row g-3 needs-validation" method="POST"
                                        action="{{ route('login') }}">
                                        @csrf

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="youremail" required autocomplete="off"
                                                    value="{{ old('email') }}">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <div class="invalid-feedback">
                                                    @error('email')
                                                        {{ $message }}
                                                    @else
                                                        Please enter your email.
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <div class="input-group has-validation">
                                                <input type="password" name="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="yourPassword" required autocomplete="off">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="bi bi-lock"></i></span>
                                                <div class="invalid-feedback">
                                                    @error('password')
                                                        {{ $message }}
                                                    @else
                                                        Please enter your password!
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>

                                    </form>


                                </div>
                            </div>

                            <div class="credits">
                                &copy; Copyright <strong><span>Prodi Informatika Unkhair</span></strong>
                                {{ date('Y') }}
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('admin/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('admin/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('admin/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('admin/js/main.js') }}"></script>

</body>

</html>
