<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Links</title>
    {{-- css --}}
    <link rel="stylesheet" href="/assets/fe/css/plugins.css">
    <link rel="stylesheet" href="/assets/fe/css/style.css">
    <link rel="stylesheet" href="/assets/fe/css/colors/aqua.css">
    <link rel="preload" href="/assets/fe/css/fonts/thicccboi.css" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="/assets/fe/css/blocks.css"> 
</head>
<body>
    <h3>Get Links To Copy</h3>
    <p>
        @foreach ($getArtikel as $itemLinks)
        https://www.dokterlegal.co.id/artikel/{{ $itemLinks->artikel_slug }}<br>
        @endforeach
    </p>

    <div class="row mt-12">
        <nav class="d-flex justify-content-center" aria-label="pagination">
            {!! $getArtikel->links('web.pagination') !!}
        </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="/assets/fe/js/plugins.js"></script>
    <script src="/assets/fe/js/theme.js"></script>
</body>
</html>