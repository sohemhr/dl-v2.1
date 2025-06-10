<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokter Legal | Login</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.ico">
    
    <link rel="stylesheet" type="text/css" href="/assets/particles/zdemo2/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <style>
        /* Pastikan ikon berada di posisi yang tepat */
        .input-group-text {
            /* background-color: #fff; */
            border-left: 0;
        }
        
        /* Menyesuaikan input agar terlihat menyatu dengan ikon */
        .form-control.input {
            border-right: 0;
        }
    </style>
</head>
<body>
    <div id="logo">
        <h1><i> &nbsp;&nbsp;DOKTER LEGAL</i></h1>
    </div>
    <section class="stark-login">
        
        <form action="/auth_admstr/login" method="post">
            @csrf
            <div id="fade-box">
                @if (session('failed'))
                    <h2>{{ session('failed') }}</h2>
                @endif
                <input type="email" class="form-control input @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email">
                @error('email')<span id="email" class="error invalid-feedback">{{ $message }}</span>@enderror
                <div class="input-group">
                    <input type="password" class="form-control input @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                    <span class="input-group-text" style="cursor: pointer; font-size: 16px" onclick="togglePassword()">
                        <i id="eyeIcon" class="bi bi-eye"></i>
                    </span>
                    @error('password')
                        <span id="password-error" class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <h2>{{ $randone }} + {{ $randtwo }} =</h2>

                <input type="hidden" name="captcha" value="{{ $captcha }}" hidden>
                <input type="text" class="form-control input" name="captcha_verify" id="captcha_verify" placeholder="Verify">

                <br>
                <input type="hidden" name="remember_me" id="remember_me" value="checked">
                <button  type="submit">Log In</button>
                <p class="fs-14">Lupa Password..? <a href="/my-forgot-password">Click Here..</a></p>
            </div>
        </form>
        <div class="hexagons">
            <img src="http://i34.photobucket.com/albums/d133/RavenLionheart/NX-Desktop-BG.png" height="768px" width="1366px" />
        </div>
    </section>

    <div id="circle1">
        <div id="inner-cirlce1">
        <h2> </h2>
        </div>
    </div>

    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src='https://codepen.io/assets/libs/fullpage/jquery.js'></script>
    <script src="/assets/particles/zdemo1/demo2.min.js"></script>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');
            }
        }
        </script>
</body>
</html>