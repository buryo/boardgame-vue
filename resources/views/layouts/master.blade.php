<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Board Game</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
    <meta name="csrf-token" content="{{ @csrf_token() }}">
</head>
<body>
<div id="app" class="bg-white">
    <navbar></navbar>
    @yield('content')
</div>

<div class="footer min-h-650">
    <div class="footer-items container mx-auto min-h-650 pt-200 mb-8 md:mb-0 md:pt-0 flex  flex-wrap md:flex items-center">
        <div class="w-full md:flex-1 text-center">
            <img src="{{asset('media/img/footer-logo.png')}}" alt="">
            <p class="text-sm">Creative Web Design and Development</p>
        </div>
        <div class="flex footer-2 w-full sm:w-1/2 md:flex-1">
            <ul class="list-reset font-light">
                <li class="font-bold">Site Pages</li>
                <li>About Us</li>
                <li>Terms & Conditions</li>
                <li>Contact Us</li>
                <li>Sitemap</li>
            </ul>
        </div>
        <div class="flex footer-3 w-full sm:w-1/2 md:flex-1">
            <ul class="list-reset font-light">
                <li class="font-bold pb-4">Usefull links</li>
                <li>Github</li>
                <li>FAQ</li>
                <li>Meet Our Team</li>
                <li>Career With Us</li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom w-full h-24 bg-home">
        <div class="container mx-auto text-footer-text flex items-center h-full">
            <p>© 2018 BURAK | GITHUB</p>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
