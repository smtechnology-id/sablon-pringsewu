@extends('layouts.landing')

@section('content')
        <!-- Inner Banner -->
        <div class="inner-banner inner-bg5">
            <div class="container">
                <div class="inner-title">
                    <h3>Checkout</h3>
                    <ul>
                        <li>
                            <a href="{{ route('index') }}">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

         <!-- Checkout Area -->
		<section class="checkout-area pt-100 pb-70">
			<div class="container">
			
				<form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-12">
							<div class="billing-details">
								<h3 class="title">Billing Details</h3>

								<div class="row justify-content-center">
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label>Country <span class="required">*</span></label>
										
											<div class="select-box">
												<select class="form-control">
													<option value="5">United Arab Emirates</option>
													<option value="1">China</option>
													<option value="2">United Kingdom</option>
													<option value="0">Germany</option>
													<option value="3">France</option>
													<option value="4">Japan</option>
												</select>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>First Name <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Last Name <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label>Company Name</label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-12 col-md-6">
										<div class="form-group">
											<label>Address <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-12 col-md-6">
										<div class="form-group">
											<label>Town / City <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>State / County <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Postcode / Zip <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Email Address <span class="required">*</span></label>
											<input type="email" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Phone <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="create-an-account">
											<label class="form-check-label" for="create-an-account">Create an account?</label>
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="ship-different-address">
											<label class="form-check-label" for="ship-different-address">Ship to a different address?</label>
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<textarea name="notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-message"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-12">
							<div class="order-details">
								<div class="order-table table-responsive">
									<h3>Your Order</h3>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th scope="col">Product Name</th>
												<th scope="col">Total</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td class="product-name">
													<a href="#">T-shirt Design</a>
												</td>

												<td class="product-total">
													<span class="subtotal-amount">$35.00</span>
												</td>
											</tr>

											<tr>
												<td class="product-name">
													<a href="#">Cover Van</a>
												</td>

												<td class="product-total">
													<span class="subtotal-amount">$30.00</span>
												</td>
											</tr>

											<tr>
												<td class="product-name">
													<a href="#">Design Mug</a>
												</td>

												<td class="product-total">
													<span class="subtotal-amount">$75.00</span>
												</td>
											</tr>

											<tr>
												<td class="product-name">
													<a href="#">Book Cover</a>
												</td>

												<td class="product-total">
													<span class="subtotal-amount">$25.00</span>
												</td>
											</tr>

											<tr>
												<td class="order-subtotal">
													<span>Cart Subtotal</span>
												</td>

												<td class="order-subtotal-price">
													<span class="order-subtotal-amount">$165.00</span>
												</td>
											</tr>

											<tr>
												<td class="order-shipping">
													<span>Shipping</span>
												</td>

												<td class="shipping-price">
													<span>$5.00</span>
												</td>
											</tr>

											<tr>
												<td class="total-price">
													<span>Order Total</span>
												</td>

												<td class="product-subtotal">
													<span class="subtotal-amount">$170.00</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="payment-box">
									<div class="payment-method">
										<p>
											<input type="radio" id="direct-bank-transfer" name="radio-group" checked>
											<label for="direct-bank-transfer">Direct Bank Transfer</label>
                                            Make your payment directly into our bank account. Please use your Order
                                            ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
										</p>
										<p>
											<input type="radio" id="paypal" name="radio-group">
											<label for="paypal">PayPal</label>
										</p>
										<p>
											<input type="radio" id="cash-on-delivery" name="radio-group">
											<label for="cash-on-delivery">Cash On Delivery</label>
										</p>
									</div>
	
									<a href="#" class="default-btn three">
										Place to Order
									</a>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- Checkout Area End -->

@endsection