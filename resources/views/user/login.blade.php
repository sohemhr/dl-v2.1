<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokter Legal | Login</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.ico">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/be/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/assets/be/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/be/dist/css/adminlte.min.css">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
</head>
<body class="hold-transition login-page dark-mode">
<div class="login-box">
    <!-- /.login-logo -->  
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
        <a href="#" class="h1"><b>Dokter Legal</b></a>
    </div>
    <div class="card-body">
        @if (session('failed'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h6><i class="icon fas fa-check"></i> {{ session('failed') }}</h6>
        </div>
        @endif
        <p class="login-box-msg">Selamat datang kembali.. <i class="fa fa-smile" aria-hidden="true"></i>
        </p>

        <form action="/auth_admstr/login" method="post">
            @csrf
            <div class="input-group mb-3">
            <input type="email" class="form-control input @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('email')<span id="email" class="error invalid-feedback">{{ $message }}</span>@enderror
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control input @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')<span id="password" class="error invalid-feedback">{{ $message }}</span>@enderror
            </div>
            <div class="row">
            <div class="col-4">
                <h2>{{ $randone }} + {{ $randtwo }} =</h2>
            </div>
            <div class="col-8">
                <div class="input-group mb-3">
                <input type="text" name="captcha" value="{{ $captcha }}" hidden>
                <input type="text" class="form-control input" name="captcha_verify" id="captcha_verify" placeholder="Verify">
                </div>
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                <input type="checkbox" name="remember_me" id="remember_me">
                <label for="remember_me">
                    Remember Me
                </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/assets/be/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/be/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/be/dist/js/adminlte.min.js"></script>
</body>
</html>
