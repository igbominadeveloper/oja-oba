<template>
    <div>          
        <div class="shop-wrapper has-background-image">
        <!-- Search overlay -->
        <div class="search-overlay"></div>
        <!-- Search input -->
        <div class="search-input-wrapper is-desktop is-hidden">
            <div class="field">
                <div class="control">
                    <input type="text" name="search" autofocus required>
                    <span id="clear-search" role="button"><i data-feather="x"></i></span>
                    <span class="search-help">Type the name of the product you are looking for</span>
                </div>
            </div>
        </div>
        <!-- Background Caption -->
        <div class="background-caption">
            <h1>NEPHOS</h1>
        </div>

        <!-- Hero Caption -->
        <div class="hero-caption">
            <h1>NEPHOS</h1>
            <h2>MODERN SHOP TEMPLATE</h2>
            <router-link to="/shop" class="button big-button primary-button upper-button rounded raised">Start shopping</router-link>
        </div>

        <!-- Fullscreen Slick SLider -->
        <div class="slider-wrapper">
            <div class="fullscreen-slick">
                <div class="full-slide has-background-image" data-background="assets/images/bg/main-bg.jpg"></div>
                <div class="full-slide has-background-image" data-background="assets/images/bg/main-bg.jpg"></div>
                <div class="full-slide has-background-image" data-background="assets/images/bg/main-bg.jpg"></div>
                <div class="full-slide has-background-image" data-background="assets/images/bg/main-bg.jpg"></div>
            </div>
        </div>
    </div>
    </div>
</template>