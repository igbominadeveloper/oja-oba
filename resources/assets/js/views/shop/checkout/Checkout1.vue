<template>
<div>	
<!-- Action Bar -->
  <div class="action-bar is-centered">
      <div class="steps-wrapper">
          <ol class="step-list">
              <li class="active"></li>
              <li></li>
              <li></li>
              <li></li>
          </ol>
      </div>
  </div>
  
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
      <!-- Main section -->
      <div class="section">
          <!-- Container -->
          <div class="container">
              <!-- Checkout step 1 -->
              <div class="columns account-header">
                  <div class="column is-10 is-offset-1 checkout-wrapper is-tablet-landscape-padded">
                      <div class="checkout-title">
                          <h2>CHECKOUT</h2>
                          <h3>ORDER-485359</h3>
                      </div>
                      <!-- Card -->
                      <div class="flat-card is-auto is-checkout-form">
                          <div class="columns is-gapless is-vcentered">
                              <!-- Avatar block -->
                              <div class="column is-6 has-text-centered grey-column is-padded">
                                  <div class="customer-wrapper">
                                      <img src="assets/images/avatars/elie.jpg" alt="">
                                      <div class="logged-as">
                                          Checkout as
                                      </div>
                                      <div class="username">
                                          Elie Daniels
                                      </div>
                                      <div class="switch">
                                          <a href="#">Switch Account ?</a>
                                      </div>
                                  </div>
                              </div>
                              <!-- Account Info form -->
                              <div class="column is-6 is-padded">
                                  <form>
                                      <div class="control">
                                          <label class="checkout-label">First Name*</label>
                                          <input type="text" class="input" placeholder="" value="Elie">
                                      </div>
                                      <div class="control">
                                          <label class="checkout-label">Last Name*</label>
                                          <input type="text" class="input" placeholder="" value="Daniels">
                                      </div>
                                      <div class="control">
                                          <label class="checkout-label">Email*</label>
                                          <input type="email" class="input" placeholder="" value="eliedaniels@gmail.com">
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                      <!-- Next/Previous Step -->
                      <div class="button-wrapper has-text-right">
                          <router-link to="/cart" class="button feather-button is-small primary-button upper-button raised">
                              <span>Cancel</span>
                          </router-link>
                          <router-link to="/checkout-2" class="button feather-button is-small primary-button upper-button raised">
                              <span>Next</span>
                          </router-link>
                      </div>
                  </div>
              </div>
              <!-- /Checkout step 1 -->
          </div>
         </div>
    </div>
	</div>
</template>