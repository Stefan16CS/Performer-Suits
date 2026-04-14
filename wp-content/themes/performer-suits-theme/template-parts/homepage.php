<?php
/*
Template Name: Homepage
*/

if ( ! defined( 'ABSPATH' ) ) {
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
    <div class="homepage-benefits-content">
        <h2 class="benefits-title">Zašto Performer Suit?</h2>
        <ul class="benefits-list">
            <li class="benefit-item">
                <div class="benefit-content">
                    <img src="/wp-content/themes/performer-suits-theme/assets/images/benefit1.png" alt="Pravi atletski kroj">
                     <h3 class="benefit-title">Pravi atletski kroj</h3>
                </div>
            </li>
            <li class="benefit-item">
                <div class="benefit-content">
                  <img src="/wp-content/themes/performer-suits-theme/assets/images/benefit2.png" alt="Tkanine visokih performansi">
                    <h3 class="benefit-title">Tkanine visokih performansi</h3>
                 </div>
            </li>
            <li class="benefit-item">
                <div class="benefit-content">
                    <img src="/wp-content/themes/performer-suits-theme/assets/images/benefit3.png" alt="Ručna izrada i zanatska preciznost">
                    <h3 class="benefit-title">Ručna izrada i zanatska preciznost</h3>
                    </div>
            </li>
            <li class="benefit-item">
                <div class="benefit-content">
                    <img src="/wp-content/themes/performer-suits-theme/assets/images/benefit4.png" alt="Ekskluzivna usluga">
                    <h3 class="benefit-title">Ekskluzivna usluga</h3>
                </div>
            </li>
            <li class="benefit-item">
                <div class="benefit-content">
                    <img src="/wp-content/themes/performer-suits-theme/assets/images/benefit5.png" alt="Bezvremenski stil i elegancija">
                    <h3 class="benefit-title">Bezvremenski stil i elegancija</h3>
                </div>
            </li>
        </ul>
    </div>
</div>