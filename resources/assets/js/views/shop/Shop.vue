<template>
	<div class="columns category-header">
        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
            <!-- Title -->
            <div class="category-title no-border is-padded">
                <h2>SHOP</h2>
                <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
            </div>

            <div class="is-categories-grid">
                <!-- Tile Grid -->
                <div class="tile is-ancestor">
                    <div class="tile is-vertical is-8">
                        <div class="tile">
                            <div class="tile is-parent is-vertical">
                                <!-- Accessories Tile -->
                                <article class="tile is-child has-background-image" data-background="assets/images/bg/accessories.jpeg" onclick="return true" style="background-image: url(&quot;assets/images/bg/accessories.jpeg&quot;);">
                                    <div class="tile-content is-small">
                                        <!-- Category name -->
                                        <h2 class="shop-category is-small">Accessories</h2>
                                        <!-- Animated divider -->
                                        <div class="divider"></div>
                                        <!-- Category subtitle -->
                                        <p>Inner Comfort</p>
                                        <!-- Category description -->
                                        <p class="is-italic">Finest products collected amongst the countrie's best artisans.</p>
                                        <!-- Products number -->
                                        <div class="products is-absolute">
                                            119 <span>Products</span>
                                        </div>
                                        <!-- View category link -->
                                        <router-link to="/products" class="action">
                                            <span>Discover</span> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                        </router-link>
                                    </div>
                                    <!-- Overlay -->
                                    <div class="tile-overlay"></div>
                                </article>
                                <!-- Kitchen Tile -->
                                <article class="tile is-child has-background-image" data-background="assets/images/bg/kitchen.jpeg" onclick="return true" style="background-image: url(&quot;assets/images/bg/kitchen.jpeg&quot;);">
                                    <div class="tile-content is-small">
                                        <h2 class="shop-category is-small">Kitchen</h2>
                                        <div class="divider"></div>
                                        <p>Inner Comfort</p>
                                        <p class="is-italic">Finest products collected amongst the countrie's best artisans.</p>
                                        <div class="products is-absolute">
                                            187 <span>Products</span>
                                        </div>
                                        <router-link to="/products" class="action">
                                            <span>Discover</span> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                        </router-link>
                                    </div>
                                    <!-- Overlay -->
                                    <div class="tile-overlay"></div>
                                </article>
                            </div>
                            <!-- House Tile -->
                            <div class="tile is-parent">
                                <article class="tile is-child has-min-height has-background-image" data-background="assets/images/bg/house.jpeg" onclick="return true" style="background-image: url(&quot;assets/images/bg/house.jpeg&quot;);">
                                    <div class="tile-content">
                                        <h2 class="shop-category">House</h2>
                                        <div class="divider"></div>
                                        <p>Inner Comfort</p>
                                        <p class="is-italic">Finest products collected amongst the countrie's best artisans.</p>
                                        <div class="products">
                                            268 <span>Products</span>
                                        </div>
                                        <router-link to="/products" class="action">
                                            <span>Discover</span> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                        </router-link>
                                    </div>
                                    <!-- Overlay -->
                                    <div class="tile-overlay"></div>
                                </article>
                            </div>
                        </div>
                        <!-- Kids Tile -->
                        <div class="tile is-parent">
                            <article class="tile is-child is-danger has-min-height has-background-image" data-background="assets/images/bg/kids.jpg" onclick="return true" style="background-image: url(&quot;assets/images/bg/kids.jpg&quot;);">
                                <div class="tile-content">
                                    <h2 class="shop-category">For kids</h2>
                                    <div class="divider"></div>
                                    <p>Their Playground</p>
                                    <p class="is-italic">Finest products collected amongst the countrie's best artisans.</p>
                                    <div class="products">
                                        376 <span>Products</span>
                                    </div>
                                    <router-link to="/products" class="action">
                                        <span>Discover</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </router-link>
                                </div>
                                <!-- Overlay -->
                                <div class="tile-overlay"></div>
                            </article>
                        </div>
                    </div>
                    <!-- Office Tile -->
                    <div class="tile is-parent">
                        <article class="tile is-child has-background-image" data-background="assets/images/bg/office.jpeg" onclick="return true" style="background-image: url(&quot;assets/images/bg/office.jpeg&quot;);">
                            <div class="tile-content">
                                <h2 class="shop-category">Office</h2>
                                <div class="divider"></div>
                                <p>Premium Office furniture</p>
                                <p class="is-italic">Finest products collected amongst the countrie's best artisans.</p>
                                <div class="products">
                                    391 <span>Products</span>
                                </div>
                                <router-link to="/products" class="action">
                                    <span>Discover</span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </router-link>
                            </div>
                            <div class="tile-overlay"></div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>