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
<body class="overflow-x-hidden">
<div id="app" class="bg-white">
    @include('partials.header')
    <div class="container mx-auto">
        <main-app/>
    </div>
    @yield('content')
</div>

@include('partials.footer')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

