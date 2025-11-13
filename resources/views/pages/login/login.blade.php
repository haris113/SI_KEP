<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ $title }}</title>

    <!-- Custom fonts -->
    <link href="/Admin_Template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="/Admin_Template/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4e73df, #224abe);
        }

        .login-container {
            margin-top: 5%;
        }

        .card {
            border-radius: 20px;
            overflow: hidden;
        }

        .bg-login-left {
            background: #f8f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 30px;
        }

        .bg-login-left img {
            width: 160px;
            margin-bottom: 20px;
        }

        .bg-login-left h4 {
            color: #4e73df;
            font-weight: 700;
        }

        .btn-primary {
            background-color: #4e73df;
            border: none;
        }

        .btn-primary:hover {
            background-color: #2e59d9;
        }

        .form-control-user {
            border-radius: 10px;
            padding: 12px 20px;
        }

        @media (max-width: 768px) {
            .bg-login-left {
                display: none;
            }

            .col-lg-6 {
                width: 100%;
            }
        }

        /* Tambahan efek hover & transisi */
        .card:hover {
            transform: scale(1.01);
            transition: 0.3s ease;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>

    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card shadow-lg border-0">
                    <div class="row no-gutters">
                        <!-- BAGIAN LOGO -->
                        <div class="col-lg-6 bg-login-left">
                             <h4>Selamat Datang!</h4>
                             <br>
                            <img src="/Admin_Template/img/logoSi_KEP.png" alt="Logo"> <!-- Ganti path logo -->
                            <p class="text-muted text-center">Sistem Informasi Kelembaggan Ekonomi Petani (KEP)</p>
                        </div>

                        <!-- FORM LOGIN -->
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center mb-4">
                                    <h1 class="h4 text-gray-900 font-weight-bold">{{ $judul }}</h1>
                                </div>

                                <!-- Alert Pesan -->
                                @if (session('success'))
                                    <div class="alert alert-success text-center">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger text-center">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if ($errors->has('login'))
                                    <div class="alert alert-danger text-center">
                                        {{ $errors->first('login') }}
                                    </div>
                                @endif

                                <!-- Form Login -->
                                <form class="user" method="POST" action="{{ route('proses_login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="username"
                                            class="form-control form-control-user"
                                            placeholder="Masukkan Username"
                                            value="{{ old('username') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password"
                                            class="form-control form-control-user"
                                            placeholder="Masukkan Password" required>
                                    </div>

                                    <button type="submit"
                                        class="btn btn-primary btn-user btn-block shadow-sm">
                                        <i class="fas fa-sign-in-alt mr-2"></i> Login
                                    </button>
                                </form>

                                <hr>
                                <div class="text-center small">
                                    <a href="#" class="text-primary">Lupa Password?</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- card -->
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="/Admin_Template/vendor/jquery/jquery.min.js"></script>
    <script src="/Admin_Template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/Admin_Template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/Admin_Template/js/sb-admin-2.min.js"></script>

</body>
</html>
