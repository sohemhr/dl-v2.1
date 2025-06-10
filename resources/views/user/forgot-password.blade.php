<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokter Legal | Forgot Password</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.ico">
    
    <link rel="stylesheet" type="text/css" href="/assets/particles/zdemo2/style.css">
    
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
</head>
<body>
    <div id="logo">
        <h1><i> &nbsp;&nbsp;DOKTER LEGAL</i></h1>
    </div>
    <section class="stark-login">
        
        <form action="/my-forgot-password/searchemail" method="post">
            @csrf
            <div id="fade-box">
                @if (session('failed'))
                    <h2>{{ session('failed') }}</h2>
                @endif
                <h2 class="fs-12px">Masukkan Email Yang Terdaftar..</h2>
                <input type="email" class="form-control input @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email">
                @error('email')<span id="email" class="error invalid-feedback">{{ $message }}</span>@enderror
                
                <h2>{{ $randone }} + {{ $randtwo }} =</h2>

                <input type="hidden" name="captcha" value="{{ $captcha }}" hidden>
                <input type="text" class="form-control input" name="captcha_verify" id="captcha_verify" placeholder="Verify">

                <br>
                <input type="hidden" name="remember_me" id="remember_me" value="checked">
                <button  type="submit">Send Mail</button>
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

</body>
</html>