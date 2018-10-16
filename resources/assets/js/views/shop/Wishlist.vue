<template>
	<div class="section">
                <!-- Container -->
                <div class="container">
        
                    <!-- Wishlists Layout -->
                    <div class="columns account-header">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- title -->
                            <div class="account-title">
                                <h2>WISHLIST</h2>
                                <!-- Icon filigrane -->
                                <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
                            </div>
        
                           <account-tabs></account-tabs>
        
                            <!-- Row -->
                            <div class="columns is-account-grid is-multiline">
                                <!-- Wishlists -->
                                <div class="column is-4">
                                    <!-- List of Wishlists -->
                                    <div class="flat-card is-auto menu-card">
                                        <div class="card-title">
                                            <h3>Add Wishlist</h3>
        
                                            <div class="edit-account">
                                                <a href="javascript:void(0);" class="modal-trigger has-simple-popover" data-modal="new-wishlist" data-content="Add a New Wishlist" data-placement="top" data-target="webuiPopover4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus feather-icons"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
                                            </div>
                                        </div>
                                        <ul class="wishlists">
                                            <li class="is-active"><a>Main List</a></li>
                                            <li><a>Couches</a></li>
                                            <li><a>Tables</a></li>
                                            <li><a>Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>
        
                                <div class="column is-8">
                                    <div class="flat-card wishlist-card is-auto">
                                        <!-- List of Wishlist Items -->
                                        <ul class="wishlist">
        
                                            <!-- Wishlist Item -->
                                            <li class="wishlist-item" onclick="return true">
                                                <div class="item-wrapper">
                                                    <!-- Product Image -->
                                                    <img src="assets/images/products/office6.png" alt="">
                                                    <!-- Product meta -->
                                                    <span class="product-info">
                                                        <span>The Conqueror</span>
                                                        <span>Office</span>
                                                    </span>
                                                    <div class="action">
                                                        <!-- Dropdown button -->
                                                        <div class="dropdown is-right">
                                                            <span class="dropdown-trigger">
                                                                <span class="dropdown-button">
                                                                    <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down feather-icons"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                                                </span>
                                                            </span>
                                                            <!-- Dropdown menu-->
                                                            <div class="dropdown-menu" role="menu">
                                                                <div class="dropdown-content">
                                                                    <!-- Dropdown item -->
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list feather-icons"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg> <span>Move to List</span>
                                                                    </a>
                                                                    <!-- Dropdown item -->
                                                                    <a class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye feather-icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span>View Product</span>
                                                                    </a>
                                                                    <!-- Dropdown item -->
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart feather-icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> <span>Add to Cart</span>
                                                                    </a>
                                                                    <hr class="dropdown-divider">
                                                                    <!-- Dropdown item -->
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x feather-icons"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> <span>Remove</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
        
                                            <!-- Wishlist Item -->
                                            <li class="wishlist-item" onclick="return true">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/products/office7.gif" alt="">
                                                    <span class="product-info">
                                                        <span>The Gentleman</span>
                                                        <span>Office</span>
                                                    </span>
                                                    <div class="action">
                                                        <div class="dropdown is-right">
                                                            <span class="dropdown-trigger">
                                                                <span class="dropdown-button">
                                                                    <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down feather-icons"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                                                </span>
                                                            </span>
                                                            <div class="dropdown-menu" role="menu">
                                                                <div class="dropdown-content">
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list feather-icons"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg> <span>Move to List</span>
                                                                    </a>
                                                                    <a class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye feather-icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span>View Product</span>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart feather-icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> <span>Add to Cart</span>
                                                                    </a>
                                                                    <hr class="dropdown-divider">
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x feather-icons"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> <span>Remove</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
        
                                            <!-- Wishlist Item -->
                                            <li class="wishlist-item" onclick="return true">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/products/access1.jpg" alt="">
                                                    <span class="product-info">
                                                        <span>Styled Lamp</span>
                                                        <span>Accessories</span>
                                                    </span>
                                                    <div class="action">
                                                        <div class="dropdown is-right">
                                                            <span class="dropdown-trigger">
                                                                <span class="dropdown-button">
                                                                    <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down feather-icons"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                                                </span>
                                                            </span>
                                                            <div class="dropdown-menu" role="menu">
                                                                <div class="dropdown-content">
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list feather-icons"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg> <span>Move to List</span>
                                                                    </a>
                                                                    <a class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye feather-icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span>View Product</span>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart feather-icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> <span>Add to Cart</span>
                                                                    </a>
                                                                    <hr class="dropdown-divider">
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x feather-icons"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> <span>Remove</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
        
                                            <!-- Wishlist Item -->
                                            <li class="wishlist-item" onclick="return true">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/products/kids5.jpg" alt="">
                                                    <span class="product-info">
                                                        <span>Treasure Chest</span>
                                                        <span>For Kids</span>
                                                    </span>
                                                    <div class="action">
                                                        <div class="dropdown is-right">
                                                            <span class="dropdown-trigger">
                                                                <span class="dropdown-button">
                                                                    <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down feather-icons"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                                                </span>
                                                            </span>
                                                            <div class="dropdown-menu" role="menu">
                                                                <div class="dropdown-content">
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list feather-icons"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg> <span>Move to List</span>
                                                                    </a>
                                                                    <a class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye feather-icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span>View Product</span>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart feather-icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> <span>Add to Cart</span>
                                                                    </a>
                                                                    <hr class="dropdown-divider">
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x feather-icons"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> <span>Remove</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
        
                                            <!-- Wishlist Item -->
                                            <li class="wishlist-item" onclick="return true">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/products/modern-bed.jpg" alt="">
                                                    <span class="product-info">
                                                        <span>Modern Bed</span>
                                                        <span>House</span>
                                                    </span>
                                                    <div class="action">
                                                        <div class="dropdown is-right">
                                                            <span class="dropdown-trigger">
                                                                <span class="dropdown-button">
                                                                    <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down feather-icons"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                                                </span>
                                                            </span>
                                                            <div class="dropdown-menu" role="menu">
                                                                <div class="dropdown-content">
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list feather-icons"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg> <span>Move to List</span>
                                                                    </a>
                                                                    <a class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye feather-icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span>View Product</span>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart feather-icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> <span>Add to Cart</span>
                                                                    </a>
                                                                    <hr class="dropdown-divider">
                                                                    <a href="#" class="dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x feather-icons"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> <span>Remove</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
        
                                    <!-- List Pagination -->
                                    <div class="wishlist-pagination">
                                        <ul>
                                            <li class="is-active"><span>1</span></li>
                                            <li><span>2</span></li>
                                            <li><span>3</span></li>
                                            <li><span>4</span></li>
                                        </ul>
                                    </div>
                                    <!-- /List Pagination -->
                                </div>
                            </div>
                            <!-- /Row -->
                        </div>
                    </div>
                </div>
                <!-- /Container -->
            </div>
</template>

<script>
	export default {
		components:{
			'account-tabs':require('../auth/AccountTabs.vue')
		}
	}
</script>