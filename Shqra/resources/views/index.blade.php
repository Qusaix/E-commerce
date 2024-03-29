@extends('layouts.ecommers')

@section('content')
		<!-- Banner -->

		<div class="banner">
			<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
			<div class="container fill_height">
				<div class="row fill_height">
					@if($ads)
					<div class="banner_product_image" style="width-max:50%;"><img src="{{asset("uploads/".$ads->image)}}" alt="{{$ads->description}}"></div>
					<div class="col-lg-5 offset-lg-4 fill_height">
						<div class="banner_content" style="background:#fff; padding:5%; border-radius:7px;">
							<h1 class="banner_text">{{$ads->title}}</h1>
							<div class="banner_price"><span>${{$ads->old_price}}</span>${{$ads->product->price}}</div>
							<div class="banner_product_name">{{$ads->description}}</div>
							<div class="button banner_button"><a href="{{route('products',$ads->product->id)}}">Shop Now</a></div>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	
		<!-- Characteristics -->
	
		<div class="characteristics">
			<div class="container">
				<div class="row">
	
					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">
						
						<div class="char_item d-flex flex-row align-items-center justify-content-start">
							<div class="char_icon"><img src="images/char_1.png" alt=""></div>
							<div class="char_content">
								<div class="char_title">Free Delivery</div>
								<div class="char_subtitle">from $50</div>
							</div>
						</div>
					</div>
	
					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">
						
						<div class="char_item d-flex flex-row align-items-center justify-content-start">
							<div class="char_icon"><img src="images/char_2.png" alt=""></div>
							<div class="char_content">
								<div class="char_title">Sell Your Used Item</div>
								<div class="char_subtitle">You Can seal Your Used Items </div>
							</div>
						</div>
					</div>
	
					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">
						
						<div class="char_item d-flex flex-row align-items-center justify-content-start">
							<div class="char_icon"><img src="images/char_3.png" alt=""></div>
							<div class="char_content">
								<div class="char_title">Refine</div>
								<div class="char_subtitle">After 30 days</div>
							</div>
						</div>
					</div>
	
					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">
						
						<div class="char_item d-flex flex-row align-items-center justify-content-start">
							<div class="char_icon"><img src="images/char_4.png" alt=""></div>
							<div class="char_content">
								<div class="char_title">Sales</div>
								<div class="char_subtitle">Beast Sales Ever</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Deals of the week -->
	
		<div class="deals_featured">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
						
						<!-- Deals -->
	
						<div class="deals">
							<div class="deals_title">Deals of the Week</div>
							<div class="deals_slider_container">
								
								<!-- Deals Slider -->
								<div class="owl-carousel owl-theme deals_slider"> 
								@foreach ($countdowns as $date)
											<!-- Deals Item -->
									<div class="owl-item deals_item">
										<div class="deals_image"><img src="{{$date->products->image}}" alt=""></div>
										<div class="deals_content">
											<div class="deals_info_line d-flex flex-row justify-content-start">
												{{-- <div class="deals_item_category"><a href="#">{{$date->products->categore->Title}}</a></div> --}}
												<div class="deals_item_price_a ml-auto">${{$date->old_price}}</div>
											</div>
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_name"><a href="{{route('products',$date->products->id)}}">{{$date->products->Title}}</a></div>
												<div class="deals_item_price ml-auto">${{$date->new_price}}</div>
											</div>
											{{-- <div class="available">
												<div class="available_line d-flex flex-row justify-content-start">
													<div class="available_title">Available: <span>{{$date->available}}</span></div>
													<div class="sold_title ml-auto">Already sold: <span>{{$date->sold}}</span></div>
												</div>
												<div class="available_bar"><span style="width:{{$date->sold}}%"></span></div>
											</div> --}}
											<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<div class="deals_timer_title">Hurry Up</div>
													<div class="deals_timer_subtitle">Offer ends in:</div>
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="{{$date->month}} {{$date->day}} 2021">
														<div class="deals_timer_unit"> 
															<div id="deals_timer1_hr" class="deals_timer_hr"></div>
															<span>hours</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_min" class="deals_timer_min"></div>
															<span>mins</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer1_sec" class="deals_timer_sec"></div>
															<span>secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
	
								@endforeach
								
									<!-- Deals Item -->
									{{-- <div class="owl-item deals_item">
										<div class="deals_image"><img src="images/deals.png" alt=""></div>
										<div class="deals_content">
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_category"><a href="#">Headphones</a></div>
												<div class="deals_item_price_a ml-auto">$300</div>
											</div>
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_name">Beoplay H7</div>
												<div class="deals_item_price ml-auto">$225</div>
											</div>
											<div class="available">
												<div class="available_line d-flex flex-row justify-content-start">
													<div class="available_title">Available: <span>6</span></div>
													<div class="sold_title ml-auto">Already sold: <span>28</span></div>
												</div>
												<div class="available_bar"><span style="width:17%"></span></div>
											</div>
											<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<div class="deals_timer_title">Hurry Up</div>
													<div class="deals_timer_subtitle">Offer ends in:</div>
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="">
														<div class="deals_timer_unit">
															<div id="deals_timer2_hr" class="deals_timer_hr"></div>
															<span>hours</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer2_min" class="deals_timer_min"></div>
															<span>mins</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer2_sec" class="deals_timer_sec"></div>
															<span>secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
	
									<!-- Deals Item -->
									{{-- <div class="owl-item deals_item">
										<div class="deals_image"><img src="images/deals.png" alt=""></div>
										<div class="deals_content">
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_category"><a href="#">Headphones</a></div>
												<div class="deals_item_price_a ml-auto">$300</div>
											</div>
											<div class="deals_info_line d-flex flex-row justify-content-start">
												<div class="deals_item_name">Beoplay H7</div>
												<div class="deals_item_price ml-auto">$225</div>
											</div>
											<div class="available">
												<div class="available_line d-flex flex-row justify-content-start">
													<div class="available_title">Available: <span>6</span></div>
													<div class="sold_title ml-auto">Already sold: <span>28</span></div>
												</div>
												<div class="available_bar"><span style="width:17%"></span></div>
											</div>
											<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
												<div class="deals_timer_title_container">
													<div class="deals_timer_title">Hurry Up</div>
													<div class="deals_timer_subtitle">Offer ends in:</div>
												</div>
												<div class="deals_timer_content ml-auto">
													<div class="deals_timer_box clearfix" data-target-time="">
														<div class="deals_timer_unit">
															<div id="deals_timer3_hr" class="deals_timer_hr"></div>
															<span>hours</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer3_min" class="deals_timer_min"></div>
															<span>mins</span>
														</div>
														<div class="deals_timer_unit">
															<div id="deals_timer3_sec" class="deals_timer_sec"></div>
															<span>secs</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
	 		--}}
	
										<!-- Deals Item -->
										{{-- <div class="owl-item deals_item">
											<div class="deals_image"><img src="images/deals.png" alt=""></div>
											<div class="deals_content">
												<div class="deals_info_line d-flex flex-row justify-content-start">
													<div class="deals_item_category"><a href="#">Not Headphones</a></div>
													<div class="deals_item_price_a ml-auto">$300</div>
												</div>
												<div class="deals_info_line d-flex flex-row justify-content-start">
													<div class="deals_item_name">Beoplay H7</div>
													<div class="deals_item_price ml-auto">$225</div>
												</div>
												<div class="available">
													<div class="available_line d-flex flex-row justify-content-start">
														<div class="available_title">Available: <span>6</span></div>
														<div class="sold_title ml-auto">Already sold: <span>28</span></div>
													</div>
													<div class="available_bar"><span style="width:17%"></span></div>
												</div>
												<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
													<div class="deals_timer_title_container">
														<div class="deals_timer_title">Hurry Up</div>
														<div class="deals_timer_subtitle">Offer ends in:</div>
													</div>
													<div class="deals_timer_content ml-auto">
														<div class="deals_timer_box clearfix" data-target-time="">
															<div class="deals_timer_unit">
																<div id="deals_timer3_hr" class="deals_timer_hr"></div>
																<span>hours</span>
															</div>
															<div class="deals_timer_unit">
																<div id="deals_timer3_min" class="deals_timer_min"></div>
																<span>mins</span>
															</div>
															<div class="deals_timer_unit">
																<div id="deals_timer3_sec" class="deals_timer_sec"></div>
																<span>secs</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div> --}}
	
								</div>
	
							</div>
	
							<div class="deals_slider_nav_container">
								<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
								<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
							</div>
						</div>
						
						<!-- Featured -->
						<div class="featured">
							<div class="tabbed_container">
								<div class="tabs">
									<ul class="clearfix">
										<li class="active">Featured</li>
										<li>On Sale</li>
										{{-- <li>Best Rated</li> --}}
									</ul>
									<div class="tabs_line"><span></span></div>
								</div>
	
								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="featured_slider slider">
	
										<!-- Slider Item -->
										@foreach ($featured as $product)
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img style="width:115px;" src="{{$product->image}}" alt=""></div>
												<div class="product_content">
													@if($product->new_price)
													<div class="product_price discount">${{$product->product->price}}<span>${{$product->old_price}}</span></div>
													@else
													<div class="product_price discount">${{$product->old_price}}</div>

													@endif
													<div class="product_name"><div><a href="{{route('products',$product->product->id)}}">{{$product->product_name}}</a></div></div>
													<div class="product_extras">
														{{-- <div class="product_color">
															images/featured_1.png
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div> --}}
														<form action="{{route('add_product_cart',$product->product->id)}}" method="post">
															@csrf
														<button type="submit" class="product_cart_button">Add to Cart</button>
														</form>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													@if($product->new_price)
													 <li class="product_mark product_discount">offer</li>
													 @endif
													{{--<li class="product_mark product_new">new</li> --}}
												</ul>
											</div>
										</div>
										@endforeach
									
	
									
	
									
									
	
									
	
									
									
	
									</div>
									<div class="featured_slider_dots_cover"></div>
								</div>
	
								<!-- Product Panel -->
	
								<div class="product_panel panel">
									<div class="featured_slider slider">
										@foreach ($onSale as $product )
												<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div style="width:112px;" class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{$product->image}}" alt=""></div>
												<div class="product_content">
													<div class="product_price discount">${{$product->product->price}}<span>${{$product->old_price}}</span></div>
													<div class="product_name"><div><a href="{{route('products',$product->id)}}">{{$product->product_name}}</a></div></div>
													<div class="product_extras">
														
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">offer</li>
													{{-- <li class="product_mark product_new">new</li> --}}
												</ul>
											</div>
										</div>
										@endforeach
									
	
										
	
									</div>
									<div class="featured_slider_dots_cover"></div>
								</div>
	
								<!-- Product Panel -->
	
								<div class="product_panel panel">
									<div class="featured_slider slider">
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_1.png" alt=""></div>
												<div class="product_content">
													<div class="product_price discount">$225<span>$300</span></div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_2.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Apple iPod shuffle</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button active">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_3.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Sony MDRZX310W</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_4.png" alt=""></div>
												<div class="product_content">
													<div class="product_price discount">$225<span>$300</span></div>
													<div class="product_name"><div><a href="product.html">LUNA Smartphone</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Canon STM Kit...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_6.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Samsung J330F...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_7.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Lenovo IdeaPad</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Digitus EDNET...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_1.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_2.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_3.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_4.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_6.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_7.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
	
									</div>
									<div class="featured_slider_dots_cover"></div>
								</div>
	
							</div>
						</div>
	
					</div>
				</div>
			</div>
		</div>
	
		<!-- Popular Categories -->
	
		<div class="popular_categories">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="popular_categories_content">
							<div class="popular_categories_title">Popular Categories</div>
							<div class="popular_categories_slider_nav">
								<div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
								<div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
							</div>
							<div class="popular_categories_link"><a href="{{route('categores')}}">full catalog</a></div>
						</div>
					</div>
					
					<!-- Popular Categories Slider -->
	
					<div class="col-lg-9">
						<div class="popular_categories_slider_container">
							<div class="owl-carousel owl-theme popular_categories_slider">
	
								<!-- Popular Categories Item -->
								<div class="owl-item">
									<div class="popular_category d-flex flex-column align-items-center justify-content-center">
										<div class="popular_category_image"><img src="images/popular_1.png" alt=""></div>
										<div class="popular_category_text">Smartphones & Tablets</div>
									</div>
								</div>
	
								<!-- Popular Categories Item -->
								<div class="owl-item">
									<div class="popular_category d-flex flex-column align-items-center justify-content-center">
										<div class="popular_category_image"><img src="images/popular_2.png" alt=""></div>
										<div class="popular_category_text">Computers & Laptops</div>
									</div>
								</div>
	
								<!-- Popular Categories Item -->
								<div class="owl-item">
									<div class="popular_category d-flex flex-column align-items-center justify-content-center">
										<div class="popular_category_image"><img src="images/popular_3.png" alt=""></div>
										<div class="popular_category_text">Gadgets</div>
									</div>
								</div>
	
								<!-- Popular Categories Item -->
								<div class="owl-item">
									<div class="popular_category d-flex flex-column align-items-center justify-content-center">
										<div class="popular_category_image"><img src="images/popular_4.png" alt=""></div>
										<div class="popular_category_text">Video Games & Consoles</div>
									</div>
								</div>
	
								<!-- Popular Categories Item -->
								<div class="owl-item">
									<div class="popular_category d-flex flex-column align-items-center justify-content-center">
										<div class="popular_category_image"><img src="images/popular_5.png" alt=""></div>
										<div class="popular_category_text">Accessories</div>
									</div>
								</div>
	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Banner -->
	
		<div class="banner_2">
			<div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
			<div class="banner_2_container">
				<div class="banner_2_dots"></div>
				<!-- Banner 2 Slider -->
	
				<div class="owl-carousel owl-theme banner_2_slider">
	
					@foreach ($slider as $p )
					<div class="owl-item">
						<div class="banner_2_item">
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col-lg-4 col-md-6 fill_height">
										<div class="banner_2_content">
											{{-- <div class="banner_2_category">{{$p->categore->Title}}</div>  --}}
											<div class="banner_2_title">{{$p->Title}}</div>
											<div class="banner_2_text">{{$p->description}}</div>
											{{-- <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div> --}}
											<div class="button banner_2_button"><a href="{{route('products',$p->id)}}">Explore</a></div>
										</div>
										
									</div>
									<div class="col-lg-8 col-md-6 fill_height">
										<div class="banner_2_image_container">
											<div class="banner_2_image"><img src="{{$p->image}}" alt=""></div>
										</div>
									</div>
								</div>
							</div>			
						</div>
					</div>
					@endforeach
					<!-- Banner 2 Slider Item -->
				
	
					<!-- Banner 2 Slider Item -->
					{{-- <div class="owl-item">
						<div class="banner_2_item">
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col-lg-4 col-md-6 fill_height">
										<div class="banner_2_content">
											<div class="banner_2_category">Laptops</div>
											<div class="banner_2_title">MacBook Air 13</div>
											<div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
											<div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="button banner_2_button"><a href="#">Explore</a></div>
										</div>
										
									</div>
									<div class="col-lg-8 col-md-6 fill_height">
										<div class="banner_2_image_container">
											<div class="banner_2_image"><img src="images/banner_2_product.png" alt=""></div>
										</div>
									</div>
								</div>
							</div>			
						</div>
					</div> --}}
	
					<!-- Banner 2 Slider Item -->
					{{-- <div class="owl-item">
						<div class="banner_2_item">
							<div class="container fill_height">
								<div class="row fill_height">
									<div class="col-lg-4 col-md-6 fill_height">
										<div class="banner_2_content">
											<div class="banner_2_category">Laptops</div>
											<div class="banner_2_title">MacBook Air 13</div>
											<div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
											<div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="button banner_2_button"><a href="#">Explore</a></div>
										</div>
										
									</div>
									<div class="col-lg-8 col-md-6 fill_height">
										<div class="banner_2_image_container">
											<div class="banner_2_image"><img src="images/banner_2_product.png" alt=""></div>
										</div>
									</div>
								</div>
							</div>			
						</div>
					</div> --}}
	
				</div>
			</div>
		</div>
	
		<!-- Hot New Arrivals -->
	
		<div class="new_arrivals">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="tabbed_container">
							<div class="tabs clearfix tabs-right">
								<div class="new_arrivals_title">Hot New Arrivals</div>
								<ul class="clearfix">
									<li class="active">Featured</li>
									{{-- <li>Audio & Video</li>
									<li>Laptops & Computers</li> --}}
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>
							<div class="row">
								<div class="col-lg-9" style="z-index:1;">
	
									<!-- Product Panel -->
									<div class="product_panel panel active">
										<div class="arrivals_slider slider">
											@foreach ( $featured as $p )
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center" style="max-width:100px;"><img src="{{$p->image}}" alt=""></div>
													<div class="product_content">
														<div class="product_price">${{$p->product->price}}</div>
														<div class="product_name"><div><a href="{{route("products",$p->id)}}">{{$p->product_name}}</a></div></div>
														<div class="product_extras">
															{{-- <div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div> --}}
															<form action="{{route('add_product_cart',$p->id)}}" method="POST">
																@csrf 
															<button type="submit" class="product_cart_button">Add to Cart</button>
															</form>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														@if($product->new_price)
														<li class="product_mark product_discount">offer</li>
														@endif	
													{{-- <li class="product_mark product_new">new</li> --}}
													</ul>
												</div>
											</div>
											@endforeach
											<!-- Slider Item -->
											
	
										
	
										
	
	
										
	
									
	
										
										
										
	
										
	
										
										
	
										
	
										
										</div>
										<div class="arrivals_slider_dots_cover"></div>
									</div>
	
									<!-- Product Panel -->
									<div class="product_panel panel">
										<div class="arrivals_slider slider">
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount">-25%</li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button active">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount">-25%</li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
											<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="arrivals_slider_dots_cover"></div>
									</div>
	
									<!-- Product Panel -->
									<div class="product_panel panel">
										<div class="arrivals_slider slider">
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount">-25%</li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button active">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount">-25%</li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
											<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$379</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
	
											<!-- Slider Item -->
											<div class="arrivals_slider_item">
												<div class="border_active"></div>
												<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
													<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
													<div class="product_content">
														<div class="product_price">$225</div>
														<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
														<div class="product_extras">
															<div class="product_color">
																<input type="radio" checked name="product_color" style="background:#b19c83">
																<input type="radio" name="product_color" style="background:#000000">
																<input type="radio" name="product_color" style="background:#999999">
															</div>
															<button class="product_cart_button">Add to Cart</button>
														</div>
													</div>
													<div class="product_fav"><i class="fas fa-heart"></i></div>
													<ul class="product_marks">
														<li class="product_mark product_discount"></li>
														<li class="product_mark product_new">new</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="arrivals_slider_dots_cover"></div>
									</div>
	
								</div>
	
								<div class="col-lg-3">
									@foreach ($featured as $p )
									@if($p->id == '1')
									<div class="arrivals_single clearfix">
										<div class="d-flex flex-column align-items-center justify-content-center">
											<div class="arrivals_single_image"><img src="{{$p->image}}" alt=""></div>
											<div class="arrivals_single_content">
												{{-- <div class="arrivals_single_category"><a href="#">Smartphones</a></div> --}}
												<div class="arrivals_single_name_container clearfix">
													<div class="arrivals_single_name"><a href="#">{{$p->product_name}}</a></div>
													<div class="arrivals_single_price text-right">${{$p->product->price}}</div>
												</div>
												{{-- <div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div> --}}
												<form method="POST" action="{{route('add_product_cart',$p->id)}}">@csrf<button type="submit" class="arrivals_single_button">Add to Cart</button></form> 
											</div>
											{{-- <div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div> --}}
											<ul class="arrivals_single_marks product_marks">
												<li class="arrivals_single_mark product_mark product_new">new</li>
											</ul>
										</div>
									</div>
									@break
									@endif
								
									@endforeach
									
								</div>
	
							</div>
									
						</div>
					</div>
				</div>
			</div>		
		</div>
	
		<!-- Newsletter -->
	
		<div class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
							<div class="newsletter_title_container">
								<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
								<div class="newsletter_title">Sign up for Newsletter</div>
								<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
							</div>
							<div class="newsletter_content clearfix">
								<form action="#" class="newsletter_form">
									<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
									<button class="newsletter_button">Subscribe</button>
								</form>
								<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


<script>
	$(document).ready(function() {
  		console.log({!! json_encode($ads->id) !!})
        var huh  = new Date(Date.UTC(2020,2,{!! json_encode($ads->id) !!}));
        var duh  = new Date();
        var wha  = huh.getTime()/1000 - duh.getTime()/1000;
		var product_id = "";
        console.log(huh);


        var clock = $('.your-clock').FlipClock(wha,{
            clockFace: 'DailyCounter',
            countdown: true
        });

	// $.ajax({

	// 	type:'POST',

	// 	url:'{{route('add_product_cart',1)}}',

	// 	data:{name:name, password:password, email:email},

	// 	success:function(data){

	// 	alert(data.success);

	// 	}

	// );



})
 
</script>		
	
@endsection