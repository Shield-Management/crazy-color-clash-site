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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W34NSQXHFR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-W34NSQXHFR');
    </script>
</head>

<body>
    <div class="bg-banner text-center">
        <h1>Crazy Color Clash</h1>
        <h3>Crazy colorful tapping battles</h3>
        <img src="{{ asset('pics/game-min.png') }}" class="game-image">
        <img src="{{ asset('pics/tutorial-min.png') }}" class="game-image">
        <img src="{{ asset('pics/menu-min.png') }}" class="game-image">
    </div>

    <div class="container">
        <h2>Coming to the iOS App Store Soon!</h2>
        <object data="{{ asset('pics/app-store-logo.svg') }}" width="200" class="app-store-icon"></object>
    </div>

    <div class="container">
        <h2>Concept</h2>
        <p class="text-center">Tap your half of the screen when your background color matches the color name shown.
            Watch out, the names of colors may not always match the color of the name or your background color!
            Points
            are gained for matching color names to background colors, points lost for incorrect taps, and points
            forfeit
            for missed taps. There are various powerups that are granted for correct taps. Winner has the most
            points
            when time runs out. Use your powerups to confuse and disorient your opponent!</p>
    </div>

    <div class="container text-center">
        <h2>12 Exciting Powerups</h2>
        <img src="{{ asset('pics/surprise-min.jpg') }}" class="game-image">
        <img src="{{ asset('pics/lockout-min.jpg') }}" class="game-image">
        <img src="{{ asset('pics/blackout-min.jpg') }}" class="game-image">
    </div>

    <footer class="text-center">
        <div class="container">
            <a href="/privacy-policy" class="nav-link">Privacy
                Policy</a>
            <a href="/terms-and-conditions" class="nav-link">Terms and
                Conditions</a>
            <p>&#169; Justin Hammond, All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
