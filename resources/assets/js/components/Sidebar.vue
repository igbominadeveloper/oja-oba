<template>
	<div class="main-sidebar">
	    <div class="sidebar-brand">
	    	<router-link to="/">
	    		<img src="/nephos/images/logo/nephos.svg" alt="">
	    	</router-link>
	    </div>
	    <div class="sidebar-inner">
	        <ul class="icon-menu">
	            <!-- Shop sidebar trigger -->
	            <li>
	                <a href="javascript:void(0);" id="open-shop"><i data-feather="home"></i></a>
	            </li>            <!-- Cart sidebar trigger -->
	            <li>
	                <a href="javascript:void(0);" id="open-cart"><i data-feather="shopping-cart"></i></a>
	            </li>            <!-- Search trigger -->
	            <li>
	                <a href="javascript:void(0);" id="open-search"><i data-feather="search"></i></a>
	                <a href="javascript:void(0);" id="close-search" class="is-hidden is-inactive"><i data-feather="x"></i></a>
	            </li>            <!-- Mobile mode trigger -->
	            <li class="is-hidden-desktop is-hidden-tablet">
	                <a href="javascript:void(0);" id="mobile-mode"><i data-feather="smartphone"></i></a>
	            </li>        
            </ul>

	        <!-- User account -->
	        <ul class="bottom-menu is-hidden-mobile">
            <router-link to="/auth" tag="li">
                <i data-feather="user"></i>
            </router-link>        
	        </ul>
	    </div>
	</div>
</template>