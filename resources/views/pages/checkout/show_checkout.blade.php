@extends('layout')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url({{asset('public/frontend/images/bg_1.jpg')}});">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></span> <span>Thanh toán</span></p>
					<h1 class="mb-0 bread">Thanh toán</h1>
				</div>
			</div>
		</div>
	</div>
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-7 ftco-animate">
				
				</div>
				<div class="col-xl-5">
					<div class="row mt-5 pt-3">
						<div class="cart-total mb-3">
   							<p class="d-flex">
    						<span>Tạm tính</span>
    						<span>{{Cart::subtotal().' '.'VNĐ'}}</span>
 							</p>
  							<p class="d-flex">
    						<span>Giảm giá</span>
    						<span>{{Cart::discount().' '.'VNĐ'}}</span>
  							</p>
  							<hr>
  							<p class="d-flex total-price">
    						<span>Thành tiền</span>
    						<span>{{Cart::subtotal().' '.'VNĐ'}}</span>
  							</p>
						</div>

						<div class="col-md-12">
							<div class="cart-detail p-3 p-md-4">
								<h3 class="billing-heading mb-4">Phương Thức Thanh Toán</h3>
								<form action="{{URL::to('/order-place')}}" method="GET">
								{{ csrf_field() }}
								<div class="form-group">
									<div class="col-md-12">
										<div class="radio">
											<label><input type="radio" name="payment_option" value="1" class="mr-2"> Thanh toán trực tiếp</label>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-md-12">
										<div class="checkbox">
											<label><input type="checkbox" value="" class="mr-2" require> Tôi đã đọc và chấp nhận tất cả điều khoản</label>
										</div>
									</div>
								</div>
								<p><a href="{{URL::to('/order-place')}}"class="btn btn-primary py-3 px-4">Đặt hàng</a></p>
								</form>
							</div>
						</div>
					</div>
				</div> 
				<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
			</div>
		</div>
	</section> 
@endsection