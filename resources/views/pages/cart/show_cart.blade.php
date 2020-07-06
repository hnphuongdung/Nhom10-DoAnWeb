@extends('layout')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url({{URL::to('public/frontend/images/bg_1.jpg')}});">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></span></p>
       <h1 class="mb-0 bread">Giỏ hàng của tôi</h1>
     </div>
   </div>
 </div>
</div>

<section class="ftco-section ftco-cart">
 <div class="container">
  <div class="row">
   <div class="col-md-12 ftco-animate">
    <div class="cart-list">
    	<?php
    	$content = Cart::content();
    	?>
     <table class="table">
      <thead class="thead-primary">
        <tr class="text-center">
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Tổng cộng</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($content as $v_content)
        <tr class="text-center">
          <td class="product-remove"><a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><span class="ion-ios-close"></span></a></td>

          <td class="image-prod"><div class="img" style="background-image:url({{URL::to('public/upload/product/'.$v_content->options->image)}});"></div></td>

          <td class="product-name">
           <h3>{{$v_content->name}}</h3>
           <p>Ăn mà ngại thì chỉ có hại cho bao tử mà thôi!</p>
         </td>

         <td class="price">{{number_format($v_content->price).' '.'VNĐ'}}</td>

         <td class="quantity">
           <div class="input-group mb-3">
           	<form action="{{URL::to('/update-cart-quantity')}}" method="POST">
				{{csrf_field()}}
			<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
             <input type="text" name="cart_quantity" class="quantity form-control input-number" value="{{$v_content->qty}}" min="1" max="100">
             <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-primary btn-sm">
         </form>
           </div>
         </td>

         <td class="total">
         	<?php $subtotal = $v_content->price * $v_content->qty;
         					echo number_format($subtotal).' '.'VNĐ';
         	?>
         </td>
       </tr><!-- END TR-->
		@endforeach
   </tbody>
 </table>
</div>
</div>
</div>
<div class="row justify-content-end">
 <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
  <div class="cart-total mb-3">
   <p>Nhâp mã giảm giá (nếu có)</p>
   <form action="#" class="info">
     <div class="form-group">
       <input type="text" class="form-control text-left px-3" placeholder="">
     </div>
   </form>
 </div>
 <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Áp dụng mã giảm giá</a></p>
</div>
<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
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
<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Tiến hành thanh toán</a></p>
</div>
</div>
</div>
</section>
@endsection