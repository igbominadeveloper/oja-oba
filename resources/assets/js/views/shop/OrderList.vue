<template>
	<!-- Main section -->
	            <div class="section">
	                <!-- Container -->
	                <div class="container">
	        
	                    <!-- Orders List -->
	                    <div class="columns account-header">
	                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
	                            <div class="account-title">
	                                <h2>MY ORDERS</h2>
	                                <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
	                            </div>
	        
	                            <!-- Account tabs -->
	                            <account-tabs></account-tabs>
	        
	                            <!-- Controls -->
	                            <div class="listing-controls">
	                                <div class="layout-controls">
	                                	 <router-link to="/orders">
	                                	 <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg></span></router-link>
	                                	
	                                	<router-link to="/orders-list">
	                                	<span class="is-active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg></span>
	                                	</router-link>
	                                </div>
	                                <!-- Sort -->
	                                <div class="sort-box">
	                                    <div class="sort-box-select">
	                                        <div class="chosen-container chosen-container-single chosen-container-single-nosearch chosen-container-active" title="" style="width: 100%;">
	                                        <select data-placeholder="Default order" class="chosen-single chosen-container chosen-container-single chosen-container-single-nosearch chosen-container-active">
	                                        	<optgroup class="chosen-results">
	                                            <option class="active-result">All Orders</option>	
	                                            <option class="active-result">Pending</option>
	                                            <option class="active-result">In Progress</option>
	                                            <option class="active-result">Complete</option>
	                                        	</optgroup>
	                                        </select>
	                                    	</div>
	                                		</div>
	                            			</div>
	                            		</div>
	                            <!-- /Controls -->


	        
	                            <!-- Orders  -->
	                            <div class="columns is-account-grid is-multiline">
	                                <!-- Orders panel -->
	                                <div class="column is-4">
	                                    <div class="flat-card is-auto list-card">
	                                        <div class="list-card-header">
	                                            Orders List
	                                        </div>
	                                        <!-- List -->
	                                        <ul>
	                                            <!-- List item -->
	                                            <li class="is-active" data-order="46895">
	                                                <span>ORDER 46895</span>
	                                                <span class="order-indicator is-progress"></span>
	                                            </li>
	                                            <!-- List item -->
	                                            <li data-order="46878">
	                                                <span>ORDER 46878</span>
	                                                <span class="order-indicator is-preparing"></span>
	                                            </li>
	                                            <!-- List item -->
	                                            <li data-order="42135">
	                                                <span>ORDER 42135</span>
	                                                <span class="order-indicator is-warning"></span>
	                                            </li>
	                                            <!-- List item -->
	                                            <li data-order="39456">
	                                                <span>ORDER 39456</span>
	                                                <span class="order-indicator is-issue"></span>
	                                            </li>
	                                            <!-- List item -->
	                                            <li data-order="38246">
	                                                <span>ORDER 38246</span>
	                                                <span class="order-indicator is-progress"></span>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	        
	                                <div class="column is-8">
	        
	                                    <!-- Order 46895 panel -->
	                                    <div id="46895" class="flat-card is-auto order-list-card animated preFadeInUp fadeInUp">
	                                        <div class="progress-block">
	                                            <!-- Title -->
	                                            <h3>ORDER 46895</h3>
	                                            <!-- Progress bar -->
	                                            <progress class="progress primary-progress is-small has-simple-popover" value="66" max="100" data-content="66% Complete" data-placement="top">66%</progress>
	                                        </div>
	                                        <!-- Orders team member -->
	                                        <div class="order-block">
	                                            <img src="assets/images/avatars/janet.jpg" alt="">
	                                            <div class="handled-by">
	                                                <div>Handled by</div>
	                                                <div>Janet Smith</div>
	                                            </div>
	                                        </div>
	                                        <!-- Order status -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="info"></i>
	                                            </div>
	                                            <div class="status">
	                                                <div>Status</div>
	                                                <div><span class="tag primary-tag">Shipping</span></div>
	                                            </div>
	                                        </div>
	                                        <!-- Order date -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="clock"></i>
	                                            </div>
	                                            <div class="date">
	                                                <div>Date</div>
	                                                <div class="is-date">mar 23 2018</div>
	                                            </div>
	                                        </div>
	                                        <!-- Order total -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="dollar-sign"></i>
	                                            </div>
	                                            <div class="total">
	                                                <div>Order total</div>
	                                                <div class="is-price">683,99 <span class="tag success-tag">Paid</span></div>
	                                            </div>
	                                        </div>
	                                        <!-- Order details -->
	                                        <div class="table-block">
	                                            <table>
	                                                <thead>
	                                                    <tr>
	                                                        <th scope="col">Product</th>
	                                                        <th scope="col">SKU</th>
	                                                        <th scope="col">Quantity</th>
	                                                        <th scope="col">Total</th>
	                                                    </tr>
	                                                </thead>
	                                                <tbody>
	                                                    <tr>
	                                                        <td data-label="Product">Shipping A1</td>
	                                                        <td data-label="SKU">-</td>
	                                                        <td data-label="Quantity">1</td>
	                                                        <td data-label="Total">$39,00</td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td data-label="Product">Conqueror</td>
	                                                        <td data-label="SKU">587</td>
	                                                        <td data-label="Quantity">1</td>
	                                                        <td data-label="Total">$295,00</td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td data-label="Product">Gentleman</td>
	                                                        <td data-label="SKU">029</td>
	                                                        <td data-label="Quantity">1</td>
	                                                        <td data-label="Total">$349,99</td>
	                                                    </tr>
	                                                </tbody>
	                                            </table>
	                                        </div>
	                                        <!-- View Invoice -->
	                                        <div class="button-block has-text-right">
	                                            <router-link to="/invoice" class="button feather-button is-small primary-button is-bold raised">invoice</router-link>
	                                        </div>
	                                    </div>
	                                    <!-- /Order 46895 -->
	        
	                                    <!-- Order 46878 -->
	                                    <div id="46878" class="flat-card is-auto order-list-card animated preFadeInUp fadeInUp is-hidden">
	                                        <div class="progress-block">
	                                            <!-- Title -->
	                                            <h3>ORDER 46878</h3>
	                                            <!-- Progress bar -->
	                                            <progress class="progress success-progress is-small has-simple-popover" value="33" max="100" data-content="33% Complete" data-placement="top">33%</progress>
	                                        </div>
	                                        <!-- Orders Team member -->
	                                        <div class="order-block">
	                                            <img src="assets/images/avatars/marc.jpg" alt="">
	                                            <div class="handled-by">
	                                                <div>Handled by</div>
	                                                <div>Mark Korsky</div>
	                                            </div>
	                                        </div>
	                                        <!-- Order status -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="info"></i>
	                                            </div>
	                                            <div class="status">
	                                                <div>Status</div>
	                                                <div><span class="tag success-tag">Preparing</span></div>
	                                            </div>
	                                        </div>
	                                        <!-- Order date -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="clock"></i>
	                                            </div>
	                                            <div class="date">
	                                                <div>Date</div>
	                                                <div class="is-date">mar 15 2018</div>
	                                            </div>
	                                        </div>
	                                        <!-- Order total -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="dollar-sign"></i>
	                                            </div>
	                                            <div class="total">
	                                                <div>Order total</div>
	                                                <div class="is-price">58,49 <span class="tag success-tag">Paid</span></div>
	                                            </div>
	                                        </div>
	                                        <!-- Order details -->
	                                        <div class="table-block">
	                                            <table>
	                                                <thead>
	                                                    <tr>
	                                                        <th scope="col">Product</th>
	                                                        <th scope="col">SKU</th>
	                                                        <th scope="col">Quantity</th>
	                                                        <th scope="col">Total</th>
	                                                    </tr>
	                                                </thead>
	                                                <tbody>
	                                                    <tr>
	                                                        <td data-label="Product">Shipping</td>
	                                                        <td data-label="SKU">-</td>
	                                                        <td data-label="Quantity">1</td>
	                                                        <td data-label="Total">Free</td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td data-label="Product">Styled Lamp</td>
	                                                        <td data-label="SKU">482</td>
	                                                        <td data-label="Quantity">1</td>
	                                                        <td data-label="Total">$30,00</td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td data-label="Product">Rabbit Lamp</td>
	                                                        <td data-label="SKU">391</td>
	                                                        <td data-label="Quantity">1</td>
	                                                        <td data-label="Total">$28,49</td>
	                                                    </tr>
	                                                </tbody>
	                                            </table>
	                                        </div>
	                                        <!-- View Invoice -->    
	                                        <div class="button-block has-text-right">
	                                            <router-link to="/invoice" class="button feather-button is-small primary-button is-bold raised">invoice</router-link>
	                                        </div>
	                                    </div>
	                                    <!-- /Order 46878 -->
	        
	                                    <!-- Order 42135 -->
	                                    <div id="42135" class="flat-card is-auto order-list-card animated preFadeInUp fadeInUp is-hidden">
	                                        <div class="progress-block">
	                                            <!-- Title -->
	                                            <h3>ORDER 42135</h3>
	                                            <!-- Progress bar -->
	                                            <progress class="progress warning-progress is-small has-simple-popover" value="11" max="100" data-content="11% Complete" data-placement="top">11%</progress>
	                                        </div>
	                                        <!-- Orders Team member -->
	                                        <div class="order-block">
	                                            <img src="assets/images/avatars/janet.jpg" alt="">
	                                            <div class="handled-by">
	                                                <div>Handled by</div>
	                                                <div>Janet Smith</div>
	                                            </div>
	                                        </div>
	                                        <!-- Order status -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="info"></i>
	                                            </div>
	                                            <div class="status">
	                                                <div>Status</div>
	                                                <div><span class="tag warning-tag">Pending</span></div>
	                                            </div>
	                                        </div>
	                                        <!-- Order date -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="clock"></i>
	                                            </div>
	                                            <div class="date">
	                                                <div>Date</div>
	                                                <div class="is-date">feb 26 2018</div>
	                                            </div>
	                                        </div>
	                                        <!-- Order total -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="dollar-sign"></i>
	                                            </div>
	                                            <div class="total">
	                                                <div>Order total</div>
	                                                <div class="is-price">188,00 <span class="tag warning-tag">Unpaid</span></div>
	                                            </div>
	                                        </div>
	                                        <!-- Order details -->
	                                        <div class="table-block">
	                                            <table>
	                                                <thead>
	                                                    <tr>
	                                                        <th scope="col">Product</th>
	                                                        <th scope="col">SKU</th>
	                                                        <th scope="col">Quantity</th>
	                                                        <th scope="col">Total</th>
	                                                    </tr>
	                                                </thead>
	                                                <tbody>
	                                                    <tr>
	                                                        <td data-label="Product">Shipping</td>
	                                                        <td data-label="SKU">-</td>
	                                                        <td data-label="Quantity">1</td>
	                                                        <td data-label="Total">Free</td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td data-label="Product">Book Shelf</td>
	                                                        <td data-label="SKU">278</td>
	                                                        <td data-label="Quantity">2</td>
	                                                        <td data-label="Total">$55,00</td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td data-label="Product">TV Furniture</td>
	                                                        <td data-label="SKU">695</td>
	                                                        <td data-label="Quantity">1</td>
	                                                        <td data-label="Total">$78,49</td>
	                                                    </tr>
	                                                </tbody>
	                                            </table>
	                                        </div>
	                                        <!-- View Invoice -->
	                                        <div class="button-block has-text-right">
	                                            <router-link to="/invoice" class="button feather-button is-small primary-button is-bold raised is-disabled"router-linkinvoice</a>
	                                        </div>
	                                    </div>
	                                    <!-- /Order 42135 -->
	        
	                                    <!-- Order 39456 -->
	                                    <div id="39456" class="flat-card is-auto order-list-card animated preFadeInUp fadeInUp is-hidden">
	                                        <div class="progress-block">
	                                            <!-- Title -->
	                                            <h3>ORDER 39456</h3>
	                                            <!-- Progress bar -->
	                                            <progress class="progress danger-progress is-small has-simple-popover" value="40" max="100" data-content="40% Complete" data-placement="top">40%</progress>
	                                        </div>
	                                        <!-- Orders Team member -->
	                                        <div class="order-block">
	                                            <img src="assets/images/avatars/janet.jpg" alt="">
	                                            <div class="handled-by">
	                                                <div>Handled by</div>
	                                                <div>Janet Smith</div>
	                                            </div>
	                                        </div>
	                                        <!-- Order status -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="info"></i>
	                                            </div>
	                                            <div class="status">
	                                                <div>Status</div>
	                                                <div><span class="tag danger-tag">Has issue</span></div>
	                                            </div>
	                                        </div>
	                                        <!-- Order date -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="clock"></i>
	                                            </div>
	                                            <div class="date">
	                                                <div>Date</div>
	                                                <div class="is-date">feb 26 2018</div>
	                                            </div>
	                                        </div>
	                                        <!-- Order total -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="dollar-sign"></i>
	                                            </div>
	                                            <div class="total">
	                                                <div>Order total</div>
	                                                <div class="is-price">219,22 <span class="tag success-tag">Paid</span></div>
	                                            </div>
	                                        </div>
	                                        <!-- Order details -->
	                                        <div class="table-block">
	                                            <table>
	                                                <thead>
	                                                    <tr>
	                                                        <th scope="col">Product</th>
	                                                        <th scope="col">SKU</th>
	                                                        <th scope="col">Quantity</th>
	                                                        <th scope="col">Total</th>
	                                                    </tr>
	                                                </thead>
	                                                <tbody>
	                                                    <tr>
	                                                        <td data-label="Product">Shipping</td>
	                                                        <td data-label="SKU">-</td>
	                                                        <td data-label="Quantity">1</td>
	                                                        <td data-label="Total">Free</td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td data-label="Product">Toy Box</td>
	                                                        <td data-label="SKU">784</td>
	                                                        <td data-label="Quantity">3</td>
	                                                        <td data-label="Total">$120</td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td data-label="Product">Child Desk</td>
	                                                        <td data-label="SKU">721</td>
	                                                        <td data-label="Quantity">1</td>
	                                                        <td data-label="Total">$99,22</td>
	                                                    </tr>
	                                                </tbody>
	                                            </table>
	                                        </div>
	                                        <!-- View Invoice -->
	                                        <div class="button-block has-text-right">
	                                            <router-link to="/invoice" class="button feather-button is-small primary-button is-bold raised is-disabled"router-linkinvoice</a>
	                                        </div>
	                                    </div>
	                                    <!-- /Order 39456 -->
	        
	                                    <!-- Order 38246 -->
	                                    <div id="38246" class="flat-card is-auto order-list-card animated preFadeInUp fadeInUp is-hidden">
	                                        <div class="progress-block">
	                                            <!-- Title -->
	                                            <h3>ORDER 38246</h3>
	                                            <!-- Progress bar -->
	                                            <progress class="progress primary-progress is-small has-simple-popover" value="100" max="100" data-content="100% Complete" data-placement="top">100%</progress>
	                                        </div>
	                                        <!-- Orders Team Member -->
	                                        <div class="order-block">
	                                            <img src="assets/images/avatars/marc.jpg" alt="">
	                                            <div class="handled-by">
	                                                <div>Handled by</div>
	                                                <div>Marc Korsky</div>
	                                            </div>
	                                        </div>
	                                        <!-- Order status -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="info"></i>
	                                            </div>
	                                            <div class="status">
	                                                <div>Status</div>
	                                                <div><span class="tag primary-tag">Complete</span></div>
	                                            </div>
	                                        </div>
	                                        <!-- Order date -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="clock"></i>
	                                            </div>
	                                            <div class="date">
	                                                <div>Date</div>
	                                                <div class="is-date">feb 15 2018</div>
	                                            </div>
	                                        </div>
	                                        <!-- Order total -->
	                                        <div class="order-block">
	                                            <div class="order-icon">
	                                                <i data-feather="dollar-sign"></i>
	                                            </div>
	                                            <div class="total">
	                                                <div>Order total</div>
	                                                <div class="is-price">412,00 <span class="tag success-tag">Paid</span></div>
	                                            </div>
	                                        </div>
	                                        <!-- Order details -->
	                                        <div class="table-block">
	                                            <table>
	                                                <thead>
	                                                    <tr>
	                                                        <th scope="col">Product</th>
	                                                        <th scope="col">SKU</th>
	                                                        <th scope="col">Quantity</th>
	                                                        <th scope="col">Total</th>
	                                                    </tr>
	                                                </thead>
	                                                <tbody>
	                                                    <tr>
	                                                        <td data-label="Product">Shipping A3</td>
	                                                        <td data-label="SKU">-</td>
	                                                        <td data-label="Quantity">1</td>
	                                                        <td data-label="Total">$92,00</td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td data-label="Product">Lazy Boy</td>
	                                                        <td data-label="SKU">111</td>
	                                                        <td data-label="Quantity">2</td>
	                                                        <td data-label="Total">$240,00</td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td data-label="Product">Low Table</td>
	                                                        <td data-label="SKU">097</td>
	                                                        <td data-label="Quantity">1</td>
	                                                        <td data-label="Total">$80,00</td>
	                                                    </tr>
	                                                </tbody>
	                                            </table>
	                                        </div>
	                                        <!-- View Invoice -->
	                                        <div class="button-block has-text-right">
	                                            <router-link to="/invoice" class="button feather-button is-small primary-button is-bold raised">invoice</router-link>
	                                        </div>
	                                    </div>
	                                    <!-- /Order 38246 -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- /Orders List -->
	                </div>
	                <!-- /Container -->
	            </div>
	            <!-- /Main section -->
</template>

<script>
	export default {
		components:{
			'account-tabs' : require('../auth/AccountTabs.vue')
		}
	}
</script>