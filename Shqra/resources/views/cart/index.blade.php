@extends('layouts.ecommers')
@section('content')
    <div class="card">
        <div class="card-content">
            	<!-- Cart -->

	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Shopping Cart</div>
						<div class="cart_items">
							<ul class="cart_list">
								 @foreach (Auth::user()->cart->products as $pro )
								 <li class="cart_item clearfix">

									<div class="cart_item_image"><img src="{{$pro->image}}" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">{{$pro->Title}}</div>
										</div>
										{{-- <div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"><span style="background-color:#999999;"></span>Silver</div>
										</div> --}}
										{{-- <div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div>
											<div class="cart_item_text">1</div>
										</div> --}}
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">${{$pro->price}}</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">${{$pro->price}}</div>
										</div>
										<form method="POST" action="{{route('remove_product_cart',[Auth::user()->cart->id,$pro->id] )}}">
											@csrf
										<button type="submit" style="background:none; border:none;"><i class="fa fa-times" aria-hidden="true"></i></button>
										</form>
									</div>
									
								</li>
								
								@endforeach

								{{-- <li class="cart_item clearfix">
									<div class="cart_item_image"><img src="{{asset('images/shopping_cart.jpg')}}" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">MacBook Air 13</div>
										</div>
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"><span style="background-color:#999999;"></span>Silver</div>
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div>
											<div class="cart_item_text">1</div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">$2000</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">$2000</div>
										</div>
									</div>
                                </li> --}}
                                
							</ul>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">${{Auth::user()->cart->products->sum('price')}}</div>
							</div>
						</div>

						<div class="cart_buttons">
                            <form method="POST" action="{{route('check_out')}}" >
                                @csrf
                            <button type="submit" class="button cart_button_clear">Check Out </button>
                            </form>
							{{-- <button type="button" class="button cart_button_checkout">Add to Cart</button> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

        </div>
    </div>
@endsection