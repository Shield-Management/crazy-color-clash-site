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
        <div class="container">
            <img src="{{ asset('pics/icon.png') }}" class="app-icon">
            <h1>Crazy Color Clash</h1>
            <h2>Crazy colorful tapping battles</h2>

            <br />

            <a href="https://testflight.apple.com/join/5Vaqo19P">
                <object data="{{ asset('pics/app-store-logo.svg') }}" width="200" class="app-store-icon p-3"
                    style="pointer-events: none;"></object>
                <h3>Join the public beta today!</h3>
            </a>

            <div class="row">
                <div class="col">
                    <img src="{{ asset('pics/game-min.png') }}" class="game-image img-fluid">
                </div>
                <div class="col">
                    <img src="{{ asset('pics/tutorial-min.png') }}" class="game-image img-fluid">
                </div>
                <div class="col">
                    <img src="{{ asset('pics/menu-min.png') }}" class="game-image img-fluid">
                </div>
            </div>

            <p class="p-3">Developed By: <a href="https://justinpaulhammond.com">Justin Hammond</a></p>
        </div>
    </div>

    <div class="container">
        <h2>Concept</h2>
        <div class="row text-center">
            <div class="col-lg-3">
                <p class="capsule">2 PLAYERS</p>
            </div>
            <div class="col-lg-3">
                <p class="capsule">1 DEVICE</p>
            </div>
            <div class="col-lg-3">
                <p class="capsule">90 SECONDS</p>
            </div>
            <div class="col-lg-3">
                <p class="capsule">12 POWERUPS</p>
            </div>
        </div>
        <br />
        <p class="text-center">Tap your half of the screen when your background color matches the color name shown.
            Watch out, the names of colors may not always match the color of the name or your background color!
            Points
            are gained for matching color names to background colors, points lost for incorrect taps, and points
            forfeit
            for missed taps. There are various powerups that are granted for correct taps. Winner has the most
            points
            when time runs out. Use your powerups to confuse and disorient your opponent!</p>
    </div>

    <div class="bg-banner">
        <div class="container text-center">
            <h2>Beta Testing</h2>
            <p>Crazy Color Clash is currently in beta testing in preperation for its <strong>September/October 2022
                    release</strong>. We
                could use your help by having
                you
                download the app for free and giving it a try. We appreciate any and all feedback to help us polish the
                game
                before it hits the app store.</p>
            <a href="https://testflight.apple.com/join/5Vaqo19P">
                <object data="{{ asset('pics/app-store-logo.svg') }}" width="200" class="app-store-icon p-3"
                    style="pointer-events: none;"></object>
                <p>Join the public beta today!</p>
            </a>
        </div>
    </div>

    <div class="container text-center">
        <h2>Testimonials</h2>
        <p>"Awesome two player mobile game! It was perfect to play while waiting in line at Disneyland! My 7 and 8 year
            old boys love playing it as well!" - <b>Brady</b></p>
        <div class="row">
            <div class="col-sm-4">
                <img src="{{ asset('pics/disneyland-playing.jpg') }}" class="testimonial-image">
            </div>
            <div class="col-sm-4">
                <img src="{{ asset('pics/kids-playing-in-line.jpg') }}" class="testimonial-image">
            </div>
            <div class="col-sm-4">
                <img src="{{ asset('pics/kids-playing.jpg') }}" class="testimonial-image">
            </div>
        </div>
    </div>

    <div class="bg-banner">
        <div class="container text-center">
            <h2>12 Exciting Powerups</h2>
            <p>There are various powerups that are granted for correct taps. Use your powerups to confuse and disorient
                your
                opponent!</p>
            <p>During the public beta, all in-app purchases are <strong>free</strong>! Three powerups are included in
                the
                final release for
                free while additional powerup packs can be purchased for $0.99.</p>
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
                    <p>Locks your opponents screen. They must tap 5 times before they can match colors again. Powerups
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
                    <p>Changes your opponent's background to gray. They will need to guess if their colors match!</p>
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
                    <p>75% chance of stealing a point from your opponent. Be careful, the other 25% of the time you will
                        lose a point yourself!</p>
                </div>
                <div class="col">
                    <h4>Double Tap</h4>
                    <img src="{{ asset('pics/double-tap-min.png') }}" class="game-image img-fluid">
                    <p>Requires your opponent to double tap their color on a match. Failing to double tap will lose a
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

    <div class="container text-center">
        <h2>Project Development</h2>

        <p>The game started as a hobby to learn Swift and iOS development and quickly turned into a full-blown App Store
            offering. Hundreds of hours and thousands of play tests later - Crazy Color Clash was brought to the public.
            You can find devlog videos detailing the development of the project (early on).</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/DPlUEQtgA7U"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>

    <footer class="text-center">
        <div class="container">
            <a href="/privacy-policy" class="nav-link">Privacy
                Policy</a>
            <a href="/terms-and-conditions" class="nav-link">Terms and
                Conditions</a>
            <p>&#169; <a href="https://justinpaulhammond.com">Justin Hammond</a>, All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
