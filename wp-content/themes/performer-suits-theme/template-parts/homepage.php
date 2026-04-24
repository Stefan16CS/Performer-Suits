<?php
/*
Template Name: Homepage
*/

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/*$acfFields = get_fields();
if ($acfFields) {
    foreach ($acfFields as $name => $value) {
        $$name = $value;
    }
}*/

get_header();
?>

<!--CSS-->
<link rel="stylesheet" href="/wp-content/themes/performer-suits-theme/assets/css/homepage.css">

<!--Hero section-->
<div class="homepage-main-container page-width-full">
    <div class="homepage-content">
        <h1 class="homepage-title">Sopstvena proizvodnja i precizna merenja</h1>
        <p class="homepage-description">Kombinujemo iskustvo, tehniku i fleksibilnost kako bismo osigurali maksimalnu preciznost i zadovoljstvo klijenata.</p>
        <button class="homepage-button">Kontaktiraj nas</button>
    </div>
</div>

<!--Benefits section-->
<div class="homepage-benefits-container page-width-full">
    <div class="homepage-benefits-content page-width-boxed-1">
        <img src="/wp-content/themes/performer-suits-theme/assets/images/benefits-background.webp" alt="Benefits Background" class="benefits-background">
        <h2 class="homepage-benefits-title">Zašto Performer Suit?</h2>
        <ul class="homepage-benefits-list">
            <li class="homepage-benefit-item">
                <div class="benefit-content">
                    <img src="/wp-content/themes/performer-suits-theme/assets/images/benefit1.png" alt="Pravi atletski kroj">
                    <h3 class="benefit-title">Pravi atletski kroj</h3>
                </div>
            </li>
            <li class="homepage-benefit-item">
                <div class="benefit-content">
                    <img src="/wp-content/themes/performer-suits-theme/assets/images/benefit2.png" alt="Tkanine visokih performansi">
                    <h3 class="benefit-title">Tkanine visokih performansi</h3>
                </div>
            </li>
            <li class="homepage-benefit-item">
                <div class="benefit-content">
                    <img src="/wp-content/themes/performer-suits-theme/assets/images/benefit3.png" alt="Ručna izrada i zanatska preciznost">
                    <h3 class="benefit-title">Ručna izrada i zanatska preciznost</h3>
                </div>
            </li>
            <li class="homepage-benefit-item">
                <div class="benefit-content">
                    <img src="/wp-content/themes/performer-suits-theme/assets/images/benefit4.png" alt="Ekskluzivna usluga">
                    <h3 class="benefit-title">Ekskluzivna usluga</h3>
                </div>
            </li>
            <li class="homepage-benefit-item">
                <div class="benefit-content">
                    <img src="/wp-content/themes/performer-suits-theme/assets/images/benefit5.png" alt="Bezvremenski stil i elegancija">
                    <h3 class="benefit-title">Bezvremenski stil i elegancija</h3>
                </div>
            </li>
        </ul>
    </div>
</div>

<!--About section-->
<div class="homepage-about-container page-width-full">
    <div class="homepage-about-content">
        <span class="homepage-about-subtitle">O nama</span>
        <h2 class="homepage-about-title">Istorija sopstvene proizvodnje</h2>
        <p class="homepage-about-description">Performer Suits Vam nudi modu po meri fer ceni, šiveno u sopstvenoj manufakturi u Evropi, u Srbiji. Nije bitno kom tipu telesne figure pripadate, mi ćemo napraviti Vaš savršen stil.</p>
        <button class="homepage-about-button">
            Saznaj više
            <span class="btn-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>
        </button>
    </div>
</div>


<!-- Testimonials section -->
<section class="homepage-testimonials-container page-width-full" aria-label="Testimonials">
    <div class="homepage-testimonials-content page-width-boxed-1">

        <div class="homepage-testimonials-nav" role="tablist" aria-label="Testimonials navigation">
            <button
                class="homepage-testimonials-nav-item"
                id="testimonial-tab-1"
                type="button"
                role="tab"
                aria-selected="true"
                aria-controls="testimonial-panel-1">
                Tim Budesheim
            </button>

            <button
                class="homepage-testimonials-nav-item"
                id="testimonial-tab-2"
                type="button"
                role="tab"
                aria-selected="false"
                aria-controls="testimonial-panel-2">
                Fabian Mayr
            </button>

            <button
                class="homepage-testimonials-nav-item"
                id="testimonial-tab-3"
                type="button"
                role="tab"
                aria-selected="false"
                aria-controls="testimonial-panel-3">
                Matthias Botthof
            </button>

            <button
                class="homepage-testimonials-nav-item is-active"
                id="testimonial-tab-4"
                type="button"
                role="tab"
                aria-selected="false"
                aria-controls="testimonial-panel-4">
                David Hoffmann
            </button>

            <button
                class="homepage-testimonials-nav-item"
                id="testimonial-tab-5"
                type="button"
                role="tab"
                aria-selected="false"
                aria-controls="testimonial-panel-5">
                Markus Rühl
            </button>

            <button
                class="homepage-testimonials-nav-item"
                id="testimonial-tab-6"
                type="button"
                role="tab"
                aria-selected="false"
                aria-controls="testimonial-panel-6">
                Andreas “Big Daddy” Kraniotakes
            </button>
        </div>

        <div class="homepage-testimonials-viewport">
            <div class="homepage-testimonials-track">

                <article
                    class="homepage-testimonial-item  is-active"
                    id="testimonial-panel-1"
                    role="tabpanel"
                    aria-labelledby="testimonial-tab-1"
                    aria-hidden="false">
                    <blockquote class="homepage-testimonial-quote">
                        <p>“Ovde deo utiska od klijenta, jedna rečenica”</p>
                    </blockquote>

                    <div class="homepage-testimonial-actions">
                        <a href="#" class="homepage-testimonial-link">Pročitaj ceo utisak
                            <span class="btn-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M7 17L17 7M17 7H9M17 7V15"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span></a>
                    </div>
                </article>

                <article
                    class="homepage-testimonial-item"
                    id="testimonial-panel-2"
                    role="tabpanel"
                    aria-labelledby="testimonial-tab-2"
                    aria-hidden="true">
                    <blockquote class="homepage-testimonial-quote">
                        <p>“Drugi testimonial tekst...”</p>
                    </blockquote>

                    <div class="homepage-testimonial-actions">
                        <a href="#" class="homepage-testimonial-link">Pročitaj ceo utisak
                            <span class="btn-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M7 17L17 7M17 7H9M17 7V15"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span></a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>