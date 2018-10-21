<template>
	<div>
	<!-- Action Bar -->
	       <div class="action-bar is-centered">
	           <div class="steps-wrapper">
	               <ol class="step-list">
	                   <li class="active"></li>
	                   <li class="active"></li>
	                   <li class="active"></li>
	                   <li class="active"></li>
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
	       
	                   <!-- Checkout step 5 -->
	                   <div class="columns account-header">
	                       <div class="column is-8 is-offset-2 checkout-wrapper has-text-centered is-invoice-landscape-padded">
	                           <!-- Title -->
	                           <div class="checkout-title is-centered">
	                               <h2>CHECKOUT COMPLETE</h2>
	                               <img class="brand-filigrane is-centered" src="assets/images/logo/nephos-greyscale.svg" alt="">
	                           </div>
	                           <!-- Card -->
	                           <div class="flat-card is-auto thanks-card">
	                               <img src="assets/images/icons/order.svg" alt="">
	                               <div class="card-heading">Order Placed !</div>
	                               <p>You are done ordering your products. We are very happy to count you amongst our customers. Use our tracking tools to manage your order</p>
	                               <div class="button-wrap">
	                                   <router-link to="/orders" class="button feather-button secondary-button is-bold raised rounded">Track Order</router-link>
	                               </div>
	                           </div>
	                       </div>
	                   </div>
	               </div>
	               <!-- /Container -->
	           </div>
	           <!-- /Main section -->
	       </div>
	       <!-- /Main wrapper -->
	</div>
</template>