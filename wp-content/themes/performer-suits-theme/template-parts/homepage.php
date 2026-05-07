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
                            </span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>


<!-- Products section -->

<section class="homepage-products-container page-width-full">
    <div class="homepage-products-heading">
        <h2 class="homepage-products-title">Naša ponuda proizvoda</h2>
    </div>
    <div class="homepage-products-content page-width-boxed-1">
        <div class="homepage-products-grid">
            <div class="homepage-product-item">
                <img src="/wp-content/themes/performer-suits-theme/assets/images/odela.png" alt="Product 1" class="product-image">
                <div class="homepage-product-label">
                    <h3 class="product-title">Odela</h3>
                    <p class="product-description">Lorem ipsum dolor sit amet consectetur. Non mauris purus augue euismod nibh justo enim lutpat amet.</p>
                    <button class="homepage-products-button">
                        Saznaj više
                        <span class="btn-icon">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M5 12H19M19 12L13 6M19 12L13 18"
                                    stroke="#000000"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
            <div class="homepage-product-item">
                <img src="/wp-content/themes/performer-suits-theme/assets/images/prsluci.png" alt="Product 2" class="product-image">
                <div class="homepage-product-label">
                    <h3 class="product-title">Prsluci</h3>
                    <p class="product-description">Lorem ipsum dolor sit amet consectetur. Non mauris purus augue euismod nibh justo enim lutpat amet.</p>
                    <button class="homepage-products-button">
                        Saznaj više
                        <span class="btn-icon">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M5 12H19M19 12L13 6M19 12L13 18"
                                    stroke="#000000"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
            <div class="homepage-product-item has-badge">
                <img src="/wp-content/themes/performer-suits-theme/assets/images/kaputi.png" alt="Product 3" class="product-image">
                <div class="homepage-product-label">
                    <h3 class="product-title">Kaputi</h3>
                    <p class="product-description">Lorem ipsum dolor sit amet consectetur. Non mauris purus augue euismod nibh justo enim lutpat amet.</p>
                    <button class="homepage-products-button">
                        Saznaj više
                        <span class="btn-icon">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M5 12H19M19 12L13 6M19 12L13 18"
                                    stroke="#000000"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Process section -->

<section class="homepage-process-container page-width-full">
    <div class="homepage-process-content page-width-boxed-1">
        <div class="homepage-process-heading">
            <h2 class="homepage-process-title">Tvoje odelo. Tvoja pravila.</h2>
            <p class="homepage-process-description">Personalizuj svaki aspekt svog odela - od kraja do završnih detalja, stvori odelo koje te ističe. Neka tvoje odelo bude odraz tvoje ličnosti.</p>
        </div>
        <div class="homepage-process-cards">
            <article class="homepage-process-card-first">
                <img src="/wp-content/themes/performer-suits-theme/assets/images/process1.png" alt="Process Step 1" class="process-image-1">
                <div class="homepage-process-title-container-1">
                    <h3 class="process-title-1">Biramo <span class="process-highlight"><img src="/wp-content/themes/performer-suits-theme/assets/images/homepage-process-orange.svg" alt="" class="highlight-background-1"><span class="process-highlight-text">kroj,</span></span> tkaninu i detalje po vašem ukusu.</h3>
                </div>
            </article>
            <article class="homepage-process-card-second">
                <img src="/wp-content/themes/performer-suits-theme/assets/images/process2.png" alt="Process Step 2" class="process-image-2">
                <div class="homepage-process-title-container-2">
                    <h3 class="process-title-2">Precizno uzimamo<span class="process-highlight"><img src="/wp-content/themes/performer-suits-theme/assets/images/homepage-process-green.svg" alt="" class="highlight-background-2"><span class="process-highlight-text">Vaše mere</span></span> kako bismo osigurali savršen kroj.</h3>
                </div>
            </article>
            <article class="homepage-process-card-third">
                <img src="/wp-content/themes/performer-suits-theme/assets/images/process3.png" alt="Process Step 3" class="process-image-3">
                <div class="homepage-process-title-container-3">
                    <h3 class="process-title-3"><span class="process-highlight"><span class="process-highlight-text"><img src="/wp-content/themes/performer-suits-theme/assets/images/homepage-process-orange-2.svg" alt="" class="highlight-background-3">Krojimo</span></span> i šijemo po meri sa pažnjom svaki detalj.</h3>
                </div>
            </article>
            <article class="homepage-process-card-fourth">
                <img src="/wp-content/themes/performer-suits-theme/assets/images/process4.png" alt="Process Step 4" class="process-image-4">
                <div class="homepage-process-title-container-4">
                    <h3 class="process-title-4">Finalna proba i dorade dok sve ne bude <span class="process-highlight"><img src="/wp-content/themes/performer-suits-theme/assets/images/homepage-process-green-2.svg" alt="" class="highlight-background-4"><span class="process-highlight-text">savršeno</span></span>.</h3>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- CTA section -->

<section>
    <div class="homepage-cta-container page-width-full">
        <div class="homepage-cta-header">
            <h2 class="homepage-cta-title">Kada želiš više od odela</h2>
            <p class="homepage-cta-description">Kreiramo odela po meri koja pričaju tvoju priču - elegantna, udobna i potpuno personalizovana, za svaki važan trenutak u životu.</p>
        </div>
        <div class="homepage-cta-actions">
            <a href="#" class="homepage-cta-link">Zakaži merenje kod nas
                <span class="homepage-cta-button-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M7 17L17 7M17 7H9M17 7V15"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- Workshop section -->

<section>
    <div class="homepage-workshop-container page-width-full">
        <div class="homepage-workshop-content-top">
            <img class="homepage-workshop-image-top" src="/wp-content/themes/performer-suits-theme/assets/images/workshop.png" alt="Workshop Image">
            <div class="homepage-workshop-header-top">
                <h2 class="homepage-workshop-title">Zaviri u našu radionicu</h2>
                <p class="homepage-workshop-description-top">Tu svakodnevno kombinujemo tradiciju i savremene tehnike kako bismo kreirali odela koja ne samo da savršeno pristaju, već i pričaju priču o stilu i eleganciji.</p>

                <div class="homepage-workshop-actions">
                    <a href="#" class="homepage-workshop-link">Vidi galeriju
                        <span class="homepage-workshop-button-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="homepage-workshop-content-bottom">
            <img class="homepage-workshop-image-bottom" src="/wp-content/themes/performer-suits-theme/assets/images/workshop2.png" alt="Workshop Image">
            <div class="homepage-workshop-header-bottom">
                <h2 class="homepage-workshop-title">Kvalitet i posvećenosti</h2>
                <p class="homepage-workshop-description-bottom">Kvalitet je u temelju svega što radimo. Svaki komad je rezultat naše posvećenosti i pažnje prema detaljima, jer verujemo da savršeno odelo mora biti ne samo lepo, već i dugotrajno.</p>
            </div>
        </div>
    </div>
</section>