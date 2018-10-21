<template>
	<div>		
	<!-- Main wrapper -->
   <div class="shop-wrapper">
   
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
       <!-- Left product panel -->
       <div class="product-panel">
           <!-- Left Header -->
           <div class="panel-header">
               <div class="likes">
                   <span>263</span>
                   <i data-feather="heart"></i>
               </div>
           </div>
   
           <!-- Product image -->
           <div id="product-view" class="product-image translateLeft">
               <img src="assets/images/products/red-seat.png" data-action="zoom" alt="">
           </div>
   
           <!-- Product details -->
           <div id="meta-view" class="translateLeft is-hidden">
               <!-- Product description -->
               <div class="detailed-description">
                   <div class="meta-block">
                       <h3>Product name</h3>
                       <p>Red Seat</p>
                   </div>
                   <div class="meta-block">
                       <h3>Product SKU</h3>
                       <p>W589</p>
                   </div>
                   <!-- Product colors -->
                   <div class="meta-block">
                       <h3>Colors</h3>
                       <div class="colored-dots">
                           <div class="dot-wrapper">
                               <div class="dot is-blue"></div>
                           </div>
                           <div class="dot-wrapper">
                               <div class="dot is-red"></div>
                           </div>
                           <div class="dot-wrapper">
                               <div class="dot is-dark"></div>
                           </div>
                           <div class="dot-wrapper">
                               <div class="dot is-cream"></div>
                           </div>
                       </div>
                   </div>
                   <!-- Product long description -->
                   <div class="meta-block">
                       <h3 class="spaced">Description</h3>
                       <p class="spaced">Lorem ipsum dolor sit amet, tale solet volutpat an his, mutat aliquando sed te. Dico affert sensibus sed eu, quo nibh minimum voluptua ut. Te cibo vituperata usu, diam timeam sensibus qui ut. Quo mazim scripta labores cu, sit no quaeque electram. Per at volumus eleifend suscipiantur. Ad mea viderer suscipiantur.</p>
                       <p class="spaced">Solum movet salutatus ne has, nec probo suavitate urbanitas in. Volumus vulputate eos an, vix iusto ornatus mediocritatem ex. Ad pri mutat paulo inermis, at usu persius copiosae. Timeam democritum eloquentiam vim an.</p>
                   </div>
                   <!-- Product Availability -->
                   <div class="meta-block">
                       <h3>Availability</h3>
                       <p>Available</p>
                   </div>
                   <!-- Product Dimensions -->
                   <div class="meta-block">
                       <h3>Dimensions</h3>
                       <p>4” x 4” x 8"</p>
                   </div>
                   <!-- Product Weight -->
                   <div class="meta-block">
                       <h3>Weight</h3>
                       <p>6.77 Lbs</p>
                   </div>
                   <!-- Product Shipping methods -->
                   <div class="meta-block">
                       <h3>Shipping Methods</h3>
                       <p>Delivery, UPS, Express</p>
                   </div>
               </div>
           </div>
   
           <!-- Product Ratings -->
           <div id="ratings-view" class="translateLeft is-hidden">
               <div class="product-ratings">
                   <div class="main-rating">
   
                       <!-- Average Rating -->
                       <h3>Product Rating</h3>
                       <div class="stars">
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star-half"></i>
                       </div>
                       <span>Rated <small>4,5/5</small> out of <small>29</small> reviews</span>
                       <span class="add-review modal-trigger" data-modal="review-modal"><i data-feather="plus"></i> Add review</span>
                   </div>
   
                   <!-- Customer reviews -->
                   <div class="customer-ratings">
                       <!-- Product review -->
                       <div class="media">
                           <div class="media-left">
                               <figure class="image is-32x32">
                                   <img src="assets/images/avatars.elie.jpg" alt="">
                               </figure>
                           </div>
                           <div class="media-content">
                               <p>
                                   <span>Elie Daniels</span>
                                   <small>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star-half"></i>
                                   </small>
                                   <br>
                                   <span class="rating-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</span>
                               </p>
                           </div>
                       </div>
                       <!-- Product review -->
                       <div class="media">
                           <div class="media-left">
                               <figure class="image is-32x32">
                                   <img src="assets/images/avatars/john.jpg" alt="">
                               </figure>
                           </div>
                           <div class="media-content">
                               <p>
                                   <span>John Smith</span>
                                   <small>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                   </small>
                                   <br>
                                   <span class="rating-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas nullam.</span>
                               </p>
                           </div>
                       </div>
                       <!-- Product review -->
                       <div class="media">
                           <div class="media-left">
                               <figure class="image is-32x32">
                                   <img src="assets/images/avatars/jane.jpg" alt="">
                               </figure>
                           </div>
                           <div class="media-content">
                               <p>
                                   <span>Marjory Cambell</span>
                                   <small>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star-half"></i>
                                   </small>
                                   <br>
                                   <span class="rating-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</span>
                               </p>
                           </div>
                       </div>
   
                   </div>
               </div>
           </div>
           <!-- /Product Ratings -->
   
           <!-- Product panel actions -->
           <div class="product-actions">
               <!-- Zoom Action -->
               <div class="zoom-buttons">
                   <i data-feather="plus-circle"></i>
                   <i data-feather="minus-circle"></i>
               </div>
               <!-- Navigation icons -->
               <div class="right-actions">
                   <!-- Product image panel -->
                   <span id="show-product" class="product-action is-active"><i data-feather="image"></i></span>
                   <!-- Product meta panel -->
                   <span id="show-meta" class="product-action"><i data-feather="menu"></i></span>
                   <!-- Product ratings panel -->
                   <span id="show-ratings" class="product-action"><i data-feather="message-circle"></i></span>
               </div>
           </div>
       </div>
   
       <!-- Right product panel -->
       <div class="product-info-panel">
           <div class="inner-panel">
               <div class="panel-header">
                   <!-- Title -->
                   <div class="category-title">
                       <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                           <g>
                               <g>
                                   <path d="M458.667,202.667h-64c-5.891,0-10.667,4.776-10.667,10.667v53.333c0,5.891,4.776,10.667,10.667,10.667h64
                                            c5.891,0,10.667-4.776,10.667-10.667v-53.333C469.333,207.442,464.558,202.667,458.667,202.667z M448,256h-42.667v-32H448V256z"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <path d="M405.333,106.667c-9.604-1.077-18.042-6.864-22.507-15.435l-19.093,9.536c8.062,15.807,23.888,26.167,41.6,27.232
                                            c0.634-0.062,1.273-0.062,1.907,0c5.365,0.526,9.287,5.302,8.76,10.667v74.667h21.333v-74.667c0.018-0.606,0.018-1.213,0-1.819
                                            C436.831,119.677,422.504,106.164,405.333,106.667z"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <path d="M458.667,128c-0.808-0.024-1.617-0.024-2.425,0c-22.895,0.67-40.911,19.772-40.242,42.667h21.333
                                            c-0.056-0.866-0.056-1.735,0-2.602c0.718-11.064,10.27-19.45,21.333-18.732H480V128H458.667z"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <path d="M394.667,138.667h-21.333V160h21.333c11.029,0,19.712,18.315,21.888,24.725l20.235-6.763
                                            C435.445,173.941,422.88,138.667,394.667,138.667z"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <path d="M501.333,256H10.667C4.776,256,0,260.776,0,266.667v42.667C0,315.224,4.776,320,10.667,320h490.667
                                            c5.891,0,10.667-4.776,10.667-10.667v-42.667C512,260.776,507.224,256,501.333,256z M490.667,298.667H21.333v-21.333h469.333
                                            V298.667z"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <path d="M469.333,341.333v96c0,5.891-4.776,10.667-10.667,10.667H53.333c-5.891,0-10.667-4.776-10.667-10.667v-96H21.333v96
                                            c0,17.673,14.327,32,32,32h405.333c17.673,0,32-14.327,32-32v-96H469.333z"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <path d="M96,448H53.333c-5.891,0-10.667,4.776-10.667,10.667v42.667c0,5.891,4.776,10.667,10.667,10.667H96
                                            c5.891,0,10.667-4.776,10.667-10.667v-42.667C106.667,452.776,101.891,448,96,448z M85.333,490.667H64v-21.333h21.333V490.667z"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <path d="M458.667,448H416c-5.891,0-10.667,4.776-10.667,10.667v42.667c0,5.891,4.776,10.667,10.667,10.667h42.667
                                            c5.891,0,10.667-4.776,10.667-10.667v-42.667C469.333,452.776,464.558,448,458.667,448z M448,490.667h-21.333v-21.333H448V490.667
                                            z"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <rect x="245.333" y="341.333" width="21.333" height="85.333"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <rect x="298.667" y="373.333" width="42.667" height="21.333"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <rect x="170.667" y="373.333" width="42.667" height="21.333"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <path d="M426.667,0H85.333C73.551,0,64,9.551,64,21.333v192c0,11.782,9.551,21.333,21.333,21.333h277.333v-21.333H85.333v-192
                                            h341.333v64H448v-64C448,9.551,438.449,0,426.667,0z"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <rect x="213.333" y="224" width="21.333" height="42.667"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <rect x="277.333" y="224" width="21.333" height="42.667"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <rect x="106.667" y="170.667" width="256" height="21.333"/>
                               </g>
                           </g>
                       </svg>                    <h2>Office</h2>
                   </div>
               </div>
               <!-- Panel body -->
               <div class="panel-body">
                   <!-- Product Meta -->
                   <h3 class="product-name">Red Seat <span>SKU-W589</span></h3>
                   <p class="product-description">This seat is nicely and will fit perfectly in your living room. Lorem ipsum sit dolor amet. Consecteture adipscing elit. Ut fermentum interdum malesuada. Sed ornare posuere lobortis. Lasis Ut fermentum interdum malesuada sed ornare</p>
   
                   <!-- Product controls -->
                   <div class="product-controls">
                       <!-- Price -->
                       <div class="product-price">
                           <div class="heading">Price</div>
                           <div class="value">$65,00</div>
                       </div>
                       <!-- Quantity -->
                       <div class="product-quantity">
                           <div class="heading">Quantity</div>
                           <div class="control">
                               <input class="input is-rounded" type="number" value="1">
                           </div>
                       </div>
                       <!-- Add to Cart -->
                       <div class="add-to-cart">
                           <div class="heading is-vhidden">Add to cart</div>
                           <button class="button big-button cart-button primary-button upper-button rounded is-bold raised">Add to cart</button>
                       </div>
                   </div>
               </div>
               <!-- Panel footer -->
               <div class="panel-footer">
                   <div class="footer-inner">
                       <div class="recommended">Recommended</div>
                       <!-- Recommended items -->
                       <div class="columns has-text-centered">
                           
                           <div class="column"></div>
                           
                           <!-- Item -->
                           <div class="column is-3">
                               <div class="featured-product">
                                   <div class="image">
                                       <img src="assets/images/products/dark-seat.jpg" alt="">
                                   </div>
                                   <div class="product-info has-text-centered">
                                       <a href="#"><h3 class="product-name">Dark seat</h3></a>
                                       <p class="product-description">Lorem ipsum sit dolor amet</p>
                                   </div>
                               </div>
                           </div>
                           <!-- Item -->
                           <div class="column is-3">
                               <div class="featured-product">
                                   <div class="image">
                                       <img src="assets/images/products/blue-seat.png" alt="">
                                   </div>
                                   <div class="product-info has-text-centered">
                                       <a href="#"><h3 class="product-name">Blue seat</h3></a>
                                       <p class="product-description">Lorem ipsum sit dolor amet</p>
                                   </div>
                               </div>
                           </div>
                           <!-- Item -->
                           <div class="column is-3">
                               <div class="featured-product">
                                   <div class="image">
                                       <img src="assets/images/products/cosy-red-seat.png" alt="">
                                   </div>
                                   <div class="product-info has-text-centered">
                                       <a href="#"><h3 class="product-name">Red seat</h3></a>
                                       <p class="product-description">Lorem ipsum sit dolor amet</p>
                                   </div>
                               </div>
                           </div>
                           
                           <div class="column"></div>
                       </div>
                   </div>
               </div>
               <!-- /Panel footer -->
           </div>
       </div>
       <!-- /Right product panel -->
   </div>
   <!-- /Main wrapper -->
   
   <!-- Modal -->
   <div id="review-modal" class="modal review-modal">
       <div class="modal-background"></div>
       <div class="modal-content">
           <div class="box">
               <div class="box-header">
                   <img src="assets/images/avatars/elie.jpg" alt="">
                   <span>Rate this product</span>
                   <div class="modal-delete"><i data-feather="x"></i></div>
               </div>
               <div class="box-body">
   
                   <fieldset class="rating">
                       <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                       <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Great - 4.5 stars"></label>
                       <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Very good - 4 stars"></label>
                       <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Pretty good - 3.5 stars"></label>
                       <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Good - 3 stars"></label>
                       <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Average - 2.5 stars"></label>
                       <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Mediocre - 2 stars"></label>
                       <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Weak - 1.5 stars"></label>
                       <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Bad - 1 star"></label>
                       <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Terrible - 0.5 stars"></label>
                   </fieldset>
   
                   <div class="control">
                       <textarea class="textarea is-button" placeholder="write something..."></textarea>
                       <div class="textarea-button">
                           <button class="button primary-button raised">Post review</button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!--button class="modal-close is-large" aria-label="close"></button-->
   </div>
   <!-- /Modal -->
   </div>
</template>