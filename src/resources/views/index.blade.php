<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('pics/favicon.ico') }}">
    <meta name="keywords" content="crazy,color,clash,ios,apple,game,app,phone,player">
    <meta name="description" content="Crazy Color Clash by Justin Hammond - Crazy colorful tapping battles.">
    <meta name="apple-itunes-app" content="app-id=1641436535">{{-- iOS download banner --}}
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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="bg-banner text-center">
        <div class="container">
            <img src="{{ asset('pics/icon.png') }}" class="app-icon">
            <h1>{{ config('app.name') }}</h1>
            <h2>Crazy colorful tapping battles</h2>

            <br />

            <a href="https://apps.apple.com/us/app/crazy-color-clash/id1641436535?itscg=30200&itsct=apps_box_badge&mttnsubad=1641436535"
                style="display: inline-block;">
                <img src="https://toolbox.marketingtools.apple.com/api/v2/badges/download-on-the-app-store/black/en-us?releaseDate=1663718400"
                    alt="Download on the App Store"
                    style="width: 245px; height: 82px; vertical-align: middle; object-fit: contain;" />
            </a>

            <div class="row">
                <div class="col">
                    <img src="{{ asset('pics/surprise-min.png') }}" class="game-image img-fluid">
                </div>
                <div class="col">
                    <img src="{{ asset('pics/tutorial-min.png') }}" class="game-image img-fluid">
                </div>
                <div class="col">
                    <img src="{{ asset('pics/score-min.png') }}" class="game-image img-fluid">
                </div>
            </div>

            <p class="p-3">Developed By: <a href="https://justinpaulhammond.com">Justin Hammond</a></p>
        </div>
    </div>

    <div class="container">
        <h2>Concept</h2>
        <p class="text-center"><a
                href="https://apps.apple.com/us/app/crazy-color-clash/id1641436535?itsct=apps_box_link&itscg=30200">Crazy
                Color Clash</a> - the game with 2 players, 1 device, 12 powerups, and 90 seconds. Play
            in one of 3 incredibly colorful game modes, clash with a friend or fly solo in practice mode. Use powerups
            to confuse and disorient your opponent and come out the victor once the time runs out.</p>

        <div class="row text-center">
            <div class="col-lg-3 bg-blue p-3">
                <p class="capsule text-green">2 PLAYERS</p>
            </div>
            <div class="col-lg-3 bg-purple p-3">
                <p class="capsule text-pink">1 DEVICE</p>
            </div>
            <div class="col-lg-3 bg-pink p-3">
                <p class="capsule text-purple">12 POWERUPS</p>
            </div>
            <div class="col-lg-3 bg-green p-3">
                <p class="capsule text-blue">90 SECONDS</p>
            </div>
        </div>

        <h2 class="mt-5">How to Play</h2>

        <p class="text-center">Tap your half of the screen when your background color matches the color name shown.
            Watch out, the names of
            colors may not always match the color of the name or your background color! Points are gained for matching
            color names to background colors, points lost for incorrect taps, and points forfeit for missed taps. There
            are 12 powerups that are granted throughout the game for correct taps. Mix and match to find the best
            combination against your opponent or skip powerups completely and stick to colors alone. Winner has the most
            points when time runs out. Do you have what it takes to win, or will you tap out?</p>

        <div class="row mt-5">
            <div class="col-md-6 text-start">
                <h3>Features</h3>
                <ul>
                    <li>2 players on 1 device</li>
                    <li>10 crazy colors to match</li>
                    <li>12 unique powerups to choose from or have randomized</li>
                    <li>90 second addictive gameplay</li>
                    <li>3 challenging game modes (2 player clash with colors and powerups, 2 player clash with colors
                        only,
                        single player practice)</li>
                    <li>Score tracking so you know how many taps you got right, wrong, and missed</li>
                </ul>

                <a href="https://apps.apple.com/us/app/crazy-color-clash/id1641436535?itsct=apps_box_badge&amp;itscg=30200"
                    style="display: inline-block; overflow: hidden; border-radius: 13px; width: 250px; height: 83px;">
                    <img src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/en-us?size=250x83&amp;releaseDate=1663718400&h=35a801062337f87a46a0f0c6b1f38ae1"
                        alt="Download on the App Store" style="border-radius: 13px; width: 250px; height: 83px;">
                </a>
            </div>
            <div class="col-md-6">
                <div class="pa-video-container">
                    <iframe width="476" height="847" src="https://www.youtube.com/embed/3rXwlH88iWU"
                        title="Crazy Color Clash Teaser - iOS Game" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-banner">
        <div class="container text-center">
            <h2>12 Exciting Powerups</h2>
            <p>There are various powerups that are granted for correct taps. Use your powerups to confuse and
                disorient
                your
                opponent!</p>
            <p>Three powerups are included in the game for free (Surprise, Lockout, and Blackout) while additional
                powerup packs can be purchased
                for $0.99 or the entire set for $1.99.</p>
        </div>
    </div>

    <div class="bg-pink">
        <div class="container text-center">
            <div class="row">
                <h3>Basic Powerups</h3>
                <p>Free - Included in Game</p>
                <div class="col">
                    <h4>Surprise</h4>
                    <img src="{{ asset('pics/surprise-min.png') }}" class="game-image img-fluid">
                    <p>Shoots a colorful confetti cannon on your opponent's screen to distract them.</p>
                </div>
                <div class="col">
                    <h4>Lockout</h4>
                    <img src="{{ asset('pics/lockout-min.png') }}" class="game-image img-fluid">
                    <p>Locks your opponents screen. They must tap 5 times before they can match colors again.
                        Powerups
                        cannot be used during Lockout!</p>
                </div>
                <div class="col">
                    <h4>Blackout</h4>
                    <img src="{{ asset('pics/blackout-min.png') }}" class="game-image img-fluid">
                    <p>Changes your opponent's background color to black making it impossible to match colors. Taps
                        during a
                        Blackout lose points!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-purple">
        <div class="container text-center">
            <div class="row">
                <h3>Powerup Pack 1</h3>
                <p>$0.99 - Unlocks 3 powerups</p>
                <div class="col">
                    <h4>Boring</h4>
                    <img src="{{ asset('pics/boring-min.png') }}" class="game-image img-fluid">
                    <p>Removes the changing color name's font color, making it easier to match taps.</p>
                </div>
                <div class="col">
                    <h4>Bombs</h4>
                    <img src="{{ asset('pics/bombs-min.png') }}" class="game-image img-fluid">
                    <p>Replaces your opponent's powerups with bombs. Tapping a bomb will lose a point!</p>
                </div>
                <div class="col">
                    <h4>Clash</h4>
                    <img src="{{ asset('pics/clash-min.png') }}" class="game-image img-fluid">
                    <p>Starts a duel with your opponent. Tapping shifts the count in your favor. First to 10 taps
                        receives 5
                        points.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue">
        <div class="container text-center">
            <div class="row">
                <h3>Powerup Pack 2</h3>
                <p>$0.99 - Unlocks 3 powerups</p>
                <div class="col">
                    <h4>Reverse</h4>
                    <img src="{{ asset('pics/reverse-min.png') }}" class="game-image img-fluid">
                    <p>Reverses your opponent's color name direction.</p>
                </div>
                <div class="col">
                    <h4>Monochrome</h4>
                    <img src="{{ asset('pics/monochrome-min.png') }}" class="game-image img-fluid">
                    <p>Changes your opponent's background to gray. They will need to guess if their colors match!
                    </p>
                </div>
                <div class="col">
                    <h4>Nuke</h4>
                    <img src="{{ asset('pics/nuke-min.png') }}" class="game-image img-fluid">
                    <p>Blows away half of all of your opponents powerups.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-green">
        <div class="container text-center">
            <div class="row">
                <h3>Powerup Pack 3</h3>
                <p>$0.99 - Unlocks 3 powerups</p>
                <div class="col">
                    <h4>Thief</h4>
                    <img src="{{ asset('pics/thief-min.png') }}" class="game-image img-fluid">
                    <p>75% chance of stealing a point from your opponent. Be careful, the other 25% of the time you
                        will
                        lose a point yourself!</p>
                </div>
                <div class="col">
                    <h4>Double Tap</h4>
                    <img src="{{ asset('pics/double-tap-min.png') }}" class="game-image img-fluid">
                    <p>Requires your opponent to double tap their color on a match. Failing to double tap will lose
                        a
                        point!
                    </p>
                </div>
                <div class="col">
                    <h4>Shield</h4>
                    <img src="{{ asset('pics/shield-min.png') }}" class="game-image img-fluid">
                    <p>Protects you against powerups.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-banner">
        <div class="container text-center">
            <h2>Testimonials</h2>
            <p>"Awesome two player mobile game! It was perfect to play while waiting in line at Disneyland! My 7 and
                8
                year
                old boys love playing it as well!" - <b>Brady</b></p>
            <div class="row">
                <div class="col">
                    <img src="{{ asset('pics/disneyland-playing.jpg') }}" class="testimonial-image">
                </div>
                <div class="col">
                    <img src="{{ asset('pics/kids-playing-in-line.jpg') }}" class="testimonial-image">
                </div>
                <div class="col">
                    <img src="{{ asset('pics/kids-playing.jpg') }}" class="testimonial-image">
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <h2>Project Development</h2>

        <p>The game started as a hobby to learn Swift and iOS development and quickly turned into a full-blown App
            Store
            offering. Hundreds of hours and thousands of play tests later - Crazy Color Clash was brought to the
            public.
            You can find devlog videos detailing the development of the project while it was in its infancy or read my
            <a
                href="https://blog.justinpaulhammond.com/justin-hammond/i-built-an-i-os-game-crazy-color-clash-heres-what-i-learned">blog
                post</a> detailing the entire process.
        </p>
        <div class="row">
            <div class="col-md-4">
                <div class="pa-video-container">
                    <iframe src="https://www.youtube.com/embed/DPlUEQtgA7U" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-4">
                <div class="pa-video-container">
                    <iframe src="https://www.youtube.com/embed/drPVDWmM3Sk" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-4">
                <div class="pa-video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wB1RMOhW01U"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <div class="container">
            <a href="/privacy-policy" class="nav-link">Privacy
                Policy</a>
            <a href="/terms-and-conditions" class="nav-link">Terms and
                Conditions</a>
            <a href="https://twitter.com/Justintime_50" class="nav-link">Contact</a>
            <p>&#169; <a href="https://justinpaulhammond.com">Justin Hammond</a>, All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
