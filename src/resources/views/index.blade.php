<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crazy Color Clash</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('pics/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/0dd4ecd465.js" crossorigin="anonymous"></script>
    <meta name="keywords" content="crazy,color,clash,ios,apple,game,app,phone,player">
    <meta name="description" content="Crazy Color Clash by Justin Hammond - Crazy colorful tapping battles.">
    {{-- <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140798052-1"></script> --}}
    {{-- <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-140798052-1');
    </script> --}}
</head>

<body>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ asset('pics/app-icon.png') }}" class="app-icon"> Crazy
                Color Clash
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop"
                    aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarTop">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="/privacy-policy" class="nav-link">Privacy
                                Policy</a></li>
                        <li class="nav-item"><a href="/terms-and-conditions" class="nav-link">Terms and
                                Conditions</a></li>
                    </ul>
                </div>
        </div>
    </nav>

    <div class="bg-banner text-center">
        <h1>Crazy Color Clash</h1>
        <h3>Crazy colorful tapping battles</h3>
        <img src="{{ asset('pics/app-screen-1.png') }}" class="banner-image">
    </div>

    <div id="about" class="container">
        <h2>Coming to the iOS App Store Soon!</h2>
        <p class="text-center">Tap your half of the screen when your background color matches the color name shown.
            Watch out, the names of colors may not always match the color of the name or your background color! Points
            are gained for matching color names to background colors, points lost for incorrect taps, and points forfeit
            for missed taps. There are various powerups that are granted for correct taps. Winner has the most points
            when time runs out. Use your powerups to confuse and disorient your opponent!</p>
    </div>

    <footer class="text-center">
        <div class="container">
            <p>&#169; Justin Hammond, All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
