<template>
	<div>
		<div class="section">
	    <!-- Container -->
	    <div class="container">
	        <!-- Account Layout -->
	        <div class="columns account-header">
	            <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
	                <!-- Title -->
	                <div class="account-title">
	                    <h2>ACCOUNT</h2>
	                    <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
	                </div>

	               <account-tabs></account-tabs>

	                <!-- Account layout -->
	                <div class="columns is-account-grid is-multiline">

	                    <div class="column is-5">
	                        <!-- User card -->
	                        <div class="flat-card profile-card is-auto">
	                            <div class="card-body">
	                                <div class="profile-image">
	                                    <img src="assets/images/avatars/elie.jpg" alt="">
	                                </div>
	                                <div class="username has-text-centered">
	                                    <span>Elie Daniels</span>
	                                    <small>Member since Sep 23 2017</small>
	                                </div>
	                            </div>
	                            <div class="profile-footer has-text-centered">
	                                <span class="achievement-title">Next Achievement</span>
	                                <div class="count">
	                                    24/150
	                                </div>
	                            </div>
	                        </div>
	                        <!-- Gold Customer card -->
	                        <div class="flat-card profile-info-card is-auto is-dark is-achievement">
	                            <div class="card-body">
	                                <img src="assets/images/logo/nephos-gold.svg" alt="">
	                                <div class="achievement-name">
	                                    <span class="is-gold">Nephos Gold Customer</span>
	                                    <span>As a Gold Customer, you have a permanent 10% discount on all your purchases.</span>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- Referal card -->
	                        <div class="flat-card profile-info-card is-auto is-dark is-achievement">
	                            <div class="card-body">
	                                <img src="assets/images/logo/nephos-referral.svg" alt="">
	                                <div class="achievement-name">
	                                    <span class="is-green">Nephos Referer</span>
	                                    <span>You have referred <b>30+</b> customers. You get a 2.5% discount on all your purchases.</span>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                    <!-- Details -->
	                    <div class="column is-7">
	                        <div class="flat-card profile-info-card is-auto">
	                            <!-- Title -->
	                            <div class="card-title">
	                                <h3>Account details</h3>

	                                <div class="edit-account has-simple-popover popover-hidden-mobile" data-content="Edit Account" data-placement="top">

	                                    <router-link to="/account/edit">
	                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings feather-icons"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
	                                    </router-link>
	                                </div>
	                            </div>
	                            <!-- Contact Info -->
	                            <div class="card-body">
	                                <div class="columns">
	                                    <div class="column is-6">
	                                        <div class="info-block">
	                                            <span class="label-text">First Name</span>
	                                            <span class="label-value">Elie</span>
	                                        </div>

	                                        <div class="info-block">
	                                            <span class="label-text">Email</span>
	                                            <span class="label-value">eliedaniels@gmail.com</span>
	                                        </div>
	                                    </div>

	                                    <div class="column is-6">
	                                        <div class="info-block">
	                                            <span class="label-text">Last Name</span>
	                                            <span class="label-value">Daniels</span>
	                                        </div>

	                                        <div class="info-block">
	                                            <span class="label-text">Phone</span>
	                                            <span class="label-value">+1 555 623 568</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- Background Nephos Icon -->
	                            <img class="card-bg" src="assets/images/logo/nephos-greyscale.svg" alt="">
	                        </div>

	                        <!-- Address Info -->
	                        <div class="flat-card profile-info-card is-auto">
	                            <!-- Title -->
	                            <div class="card-title">
	                                <h3>Billing address</h3>
	                                <!-- Cog Button -->
	                                <div class="edit-account is-vhidden">
	                                    <a href="account-edit.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings feather-icons"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
	                                </div>

	                            </div>
	                            <!-- Billing Address -->
	                            <div class="card-body">
	                                <div class="columns">
	                                    <div class="column is-6">
	                                        <div class="info-block">
	                                            <span class="label-text">Number</span>
	                                            <span class="label-value">23, Block C2</span>
	                                        </div>

	                                        <div class="info-block">
	                                            <span class="label-text">City</span>
	                                            <span class="label-value">Los Angeles</span>
	                                        </div>

	                                        <div class="info-block">
	                                            <span class="label-text">State</span>
	                                            <span class="label-value">CA</span>
	                                        </div>
	                                    </div>

	                                    <div class="column is-6">
	                                        <div class="info-block">
	                                            <span class="label-text">Street</span>
	                                            <span class="label-value">Church Street</span>
	                                        </div>

	                                        <div class="info-block">
	                                            <span class="label-text">Postal Code</span>
	                                            <span class="label-value">100065</span>
	                                        </div>

	                                        <div class="info-block">
	                                            <span class="label-text">Country</span>
	                                            <span class="label-value">United States</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- /Address Form -->
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- /Container -->
	</div>
	</div>
</template>
<script>
	export default {
    components:{
        'account-tabs': require('../auth/AccountTabs.vue')
    }
}
</script>