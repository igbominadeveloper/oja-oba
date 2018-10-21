<template>
<div class="section">
    <!-- Container -->
    <div class="container">

        <!-- Cart page -->
        <div class="columns account-header">
            <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                <div class="account-title">
                    <h2>MY CART</h2>
                    <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
                </div>

                <!-- Account tabs -->
                <account-tabs></account-tabs>

                <!-- Total and checkout -->
                <div class="cart-summary">
                    <span class="cart-total">
                        1521,94 <small>5 <span>items in cart</span></small>
                    </span>
                    <router-link to="/checkout-1" class="button feather-button is-bold primary-button raised">
                        CHECKOUT
                    </router-link>
                </div>

                <!-- Cart Layout -->
                <div class="columns is-account-grid is-multiline">
                    <!-- Product list -->
                    <div class="column is-12">
                        <!-- Product -->
                        <div class="flat-card is-auto cart-card">
                            <ul class="cart-content">
                                <li>
                                    <img src="assets/images/products/office6.png" alt="">
                                    <span class="product-info">
                                        <span>The Conqchceckourueror</span>
                                        <span>Office</span>
                                    </span>
                                    <span class="product-price">
                                        <span>Price</span>
                                        <span>385,00</span>
                                    </span>

                                    <span class="product-quantity">
                                        <span>Qty</span>
                                        <span class="control">
                                            <input class="input" type="number" value="1">
                                        </span>
                                    </span>

                                    <span class="action">
                                        <span class="action-link is-like has-simple-popover" data-content="Add to Wishlist" data-placement="top">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart feather-icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>
                                        </span>
                                        <span class="action-link is-remove has-simple-popover" data-content="Remove from Cart" data-placement="top">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x feather-icons"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <!-- Product -->
                        <div class="flat-card is-auto cart-card">
                            <ul class="cart-content">
                                <li>
                                    <img src="assets/images/products/office7.gif" alt="">
                                    <span class="product-info">
                                        <span>The Gentleman</span>
                                        <span>Office</span>
                                    </span>
                                    <span class="product-price">
                                        <span>Price</span>
                                        <span>329,00</span>
                                    </span>

                                    <span class="product-quantity">
                                        <span>Qty</span>
                                        <span class="control">
                                            <input class="input" type="number" value="1">
                                        </span>
                                    </span>

                                    <span class="action">
                                        <span class="action-link is-like has-simple-popover" data-content="Add to Wishlist" data-placement="top">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart feather-icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>
                                        </span>
                                        <span class="action-link is-remove has-simple-popover" data-content="Remove from Cart" data-placement="top">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x feather-icons"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <!-- Product -->
                        <div class="flat-card is-auto cart-card">
                            <ul class="cart-content">
                                <li>
                                    <img src="assets/images/products/kids7.jpg" alt="">
                                    <span class="product-info">
                                        <span>Child Desk</span>
                                        <span>Kids</span>
                                    </span>
                                    <span class="product-price">
                                        <span>Price</span>
                                        <span>278,00</span>
                                    </span>

                                    <span class="product-quantity">
                                        <span>Qty</span>
                                        <span class="control">
                                            <input class="input" type="number" value="1">
                                        </span>
                                    </span>

                                    <span class="action">
                                        <span class="action-link is-like has-simple-popover" data-content="Add to Wishlist" data-placement="top">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart feather-icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>
                                        </span>
                                        <span class="action-link is-remove has-simple-popover" data-content="Remove from Cart" data-placement="top">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x feather-icons"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <!-- Product -->
                        <div class="flat-card is-auto cart-card">
                            <ul class="cart-content">
                                <li>
                                    <img src="assets/images/products/access4.jpg" alt="">
                                    <span class="product-info">
                                        <span>Design Shelf</span>
                                        <span>House</span>
                                    </span>
                                    <span class="product-price">
                                        <span>Price</span>
                                        <span>529,00</span>
                                    </span>

                                    <span class="product-quantity">
                                        <span>Qty</span>
                                        <span class="control">
                                            <input class="input" type="number" value="1">
                                        </span>
                                    </span>

                                    <span class="action">
                                        <span class="action-link is-like has-simple-popover" data-content="Add to Wishlist" data-placement="top">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart feather-icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>
                                        </span>
                                        <span class="action-link is-remove has-simple-popover" data-content="Remove from Cart" data-placement="top">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x feather-icons"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <!-- /Product -->
                    </div>
                </div>
                <!-- /Cart Layout -->
            </div>
        </div>
        <!-- /Cart page -->

        <!-- Recently Viewed -->
        <div class="columns category-header low-padding">
            <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                <!-- Title -->
                <div class="category-title">
                    <h2 class="is-small">RECENTLY VIEWED</h2>
                </div>

                <!-- Product grid -->
                <div class="columns no-controls is-product-grid is-multiline">
                    <!-- Product -->
                    <div class="column is-9">
                        <div class="flat-card is-long">
                            <div class="left-image is-md">
                                <img src="assets/images/products/red-seat.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <a href="#"><h3 class="product-name featured">Red Alcove</h3></a>
                                <p class="product-description">Lorem ipsum sit dolor amet</p>
                                <p class="product-price">
                                    90,00
                                </p>
                            </div>

                            <div class="actions">
                                <div class="add"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></div>
                                <div class="like"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></div>
                            </div>
                        </div>
                    </div>
                    <!-- Product -->
                    <div class="column is-3">
                        <div class="flat-card">
                            <div class="image">
                                <img src="assets/images/products/cosy-red-seat.png" alt="">
                            </div>
                            <div class="product-info has-text-centered">
                                <a href="#"><h3 class="product-name">Red Seat</h3></a>
                                <p class="product-description">Lorem ipsum sit dolor amet</p>
                                <p class="product-price">
                                    75,00
                                </p>
                            </div>

                            <div class="actions">
                                <div class="add"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></div>
                                <div class="like"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></div>
                            </div>
                        </div>
                    </div>
                    <!-- Product -->
                    <div class="column is-3">
                        <div class="flat-card">
                            <div class="image">
                                <img src="assets/images/products/office4.jpg" alt="">
                            </div>
                            <div class="product-info has-text-centered">
                                <a href="#"><h3 class="product-name">Executive</h3></a>
                                <p class="product-description">Lorem ipsum sit dolor amet</p>
                                <p class="product-price">
                                    125,00
                                </p>
                            </div>

                            <div class="actions">
                                <div class="add"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></div>
                                <div class="like"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></div>
                            </div>
                        </div>
                    </div>
                    <!-- Product -->
                    <div class="column is-3">
                        <div class="flat-card">
                            <div class="image">
                                <img src="assets/images/products/office5.jpg" alt="">
                            </div>
                            <div class="product-info has-text-centered">
                                <a href="#"><h3 class="product-name">Cosy chair</h3></a>
                                <p class="product-description">Lorem ipsum sit dolor amet</p>
                                <p class="product-price">
                                    88,00
                                </p>
                            </div>

                            <div class="actions">
                                <div class="add"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></div>
                                <div class="like"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></div>
                            </div>
                        </div>
                    </div>
                    <!-- Product -->
                    <div class="column">
                        <div class="flat-card is-long">
                            <div class="left-image is-md">
                                <img src="assets/images/products/office3.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <a href="#"><h3 class="product-name featured-md">Ambassador</h3></a>
                                <p class="product-description">Lorem ipsum sit dolor amet</p>
                                <p class="product-price">
                                    480,00
                                </p>
                            </div>

                            <div class="actions">
                                <div class="add"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></div>
                                <div class="like"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></div>
                            </div>
                        </div>
                    </div> 
                    <!-- Product -->
                    <div class="column is-6">
                        <div class="flat-card is-long">
                            <div class="left-image is-md">
                                <img src="assets/images/products/office6.png" alt="">
                            </div>
                            <div class="product-info">
                                <a href="#"><h3 class="product-name featured-md">Conqueror</h3></a>
                                <p class="product-description">Lorem ipsum sit dolor amet</p>
                                <p class="product-price">
                                    590,00
                                </p>
                            </div>

                            <div class="actions">
                                <div class="add"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></div>
                                <div class="like"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></div>
                            </div>
                        </div>
                    </div>
                    <!-- Product -->
                    <div class="column is-6">
                        <div class="flat-card is-long">
                            <div class="left-image is-md">
                                <img src="assets/images/products/office7.gif" alt="">
                            </div>
                            <div class="product-info">
                                <a href="#"><h3 class="product-name featured-md">Gentleman</h3></a>
                                <p class="product-description">Lorem ipsum sit dolor amet</p>
                                <p class="product-price">
                                    375,00
                                </p>
                            </div>

                            <div class="actions">
                                <div class="add"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></div>
                                <div class="like"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></div>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- /Product grid -->

                <div class="show-more"><a href="#">Show more products</a></div>

            </div>
        </div> 
        <!-- /Recently Viewed -->
    </div>
    <!-- /Container -->
</div>
</template>

<script>
    export default {
        components:{   
            'account-tabs' : require('../auth/AccountTabs.vue')
        }
    }
</script>