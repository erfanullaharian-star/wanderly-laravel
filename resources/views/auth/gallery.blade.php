
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">

    <title>Wanderly | Gallery</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="site-header">
    <nav class="navbar container" aria-label="Main navigation">

        <a class="brand" href="{{ route('home') }}">
            <span class="brand-mark">W</span>
            Wanderly
        </a>

        <button class="menu-button" type="button"
                aria-label="Open navigation menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('destinations') }}">Destinations</a>
            <a href="{{ route('about') }}">About</a>
            <a class="active" href="{{ route('gallery') }}">Gallery</a>
            <a class="nav-cta" href="{{ route('contact') }}">Plan a trip</a>
        </div>

    </nav>
</header>

<main>

    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">Travel gallery</p>

            <h1>A glimpse of the journey.</h1>

            <p>
                A collection of landscapes, city moments, and quiet places
                that inspire the journeys we plan.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="slider">

                <img
                    id="sliderImage"
                    src="{{ asset('images/hunza-valley.jpg') }}"
                    alt="Hunza Valley, Pakistan"
                >

                <button
                    class="slider-button prev"
                    type="button"
                    aria-label="Previous image"
                >
                    ← Previous
                </button>

                <button
                    class="slider-button next"
                    type="button"
                    aria-label="Next image"
                >
                    Next →
                </button>

                <div class="slider-caption" id="sliderCaption">
                    Hunza Valley, Pakistan
                </div>

            </div>

            <div class="gallery-grid">

                <img
                    src="{{ asset('images/hunza-valley.jpg') }}"
                    alt="Hunza Valley mountains"
                >

                <img
                    src="{{ asset('images/cappadocia.jpg') }}"
                    alt="Cappadocia landscape"
                >

                <img
                    src="{{ asset('images/amalfi.jpg') }}"
                    alt="Amalfi Coast"
                >

                <img
                    src="{{ asset('images/bali.jpg') }}"
                    alt="Bali landscape"
                >

                <img
                    src="{{ asset('images/kyoto.jpg') }}"
                    alt="Kyoto street"
                >

                <img
                    src="{{ asset('images/swiss-alps.jpg') }}"
                    alt="Swiss Alps"
                >

            </div>

        </div>
    </section>

</main>

<footer class="footer">

    <div class="container footer-grid">

        <div>
            <a class="brand" href="{{ route('home') }}">
                <span class="brand-mark">W</span>
                Wanderly
            </a>

            <p>Journeys that move you.</p>
        </div>

        <div>
            <h3>Explore</h3>
            <a href="{{ route('destinations') }}">Destinations</a>
            <a href="{{ route('gallery') }}">Gallery</a>
            <a href="{{ route('about') }}">About</a>
        </div>

        <div>
            <h3>Contact</h3>
            <a href="{{ route('contact') }}">Plan a trip</a>
            <a href="mailto:hello@wanderly.example">
                hello@wanderly.example
            </a>
        </div>

    </div>

    <div class="container copyright">
        © 2026 Wanderly · All rights reserved
    </div>

</footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</