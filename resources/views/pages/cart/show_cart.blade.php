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
<form class="billing-form">
 {{ csrf_field() }}
 <h3 class="mb-4 billing-heading">Thông tin khách hàng</h3>
 <div class="row align-items-end">
   <div class="col-md-6">
    <div class="form-group">
     <label for="firstname">Họ và tên</label>
     <?php
     $customer_id = Session::get('customer_id');
     $customername="";
     if($customer_id!=NULL){ 
       $customername = DB::table('tbl_customers')->where('customer_id', $customer_id)->get()[0]->customer_name;
     }
     ?>
     <input style="text-align: left; color: black !important" type="text" class="form-control" name="shipping_name" placeholder="" value="<?php echo $customername; ?>">
   </div>
 </div>
 <div class="col-md-6">
  <div class="form-group">
   <label for="lastname">Email</label>
    <?php
     $customer_id = Session::get('customer_id');
     $customeremail="";
     if($customer_id!=NULL){ 
       $customeremail = DB::table('tbl_customers')->where('customer_id', $customer_id)->get()[0]->customer_email;
     }
     ?>
   <input style="text-align: left; color: black !important" type="text" class="form-control" name="shipping_email" placeholder="" value="<?php echo $customeremail; ?>" >
 </div>
</div>

<div class="w-100"></div>
<div class="col-md-6">
  <div class="form-group">
   <label for="phone">Số điện thoại</label>
   <?php
     $customer_id = Session::get('customer_id');
     $customerphone="";
     if($customer_id!=NULL){ 
       $customerphone = DB::table('tbl_customers')->where('customer_id', $customer_id)->get()[0]->customer_phone;
     }
     ?>
   <input style="text-align: left; color: black !important" type="text" class="form-control" name="shipping_phone" placeholder="" value="<?php echo $customerphone; ?>" >
 </div>
</div>

<div class="col-md-6">
  <div class="form-group">
    <label for="phone">Ghi chú</label>
    <input type="text" class="form-control" name="shipping_notes" placeholder="">
  </div>
</div>
<div class="w-100"></div>
<div class="col-md-12">
  <div class="form-group mt-4">
   <div class="radio">
    <a href="{{URL::to('/register-checkout')}}">Tạo tài khoản mới</a>
  </div>
</div>
</div>
</div>
</form>
<div class="row justify-content-end">

  <form action="{{URL::to('/check-coupon')}}" method="POST">
   @csrf
   <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    <input style=" width: 348px; height: 68px" type="text" placeholder=" Nhập mã giảm giá (nếu có)"name ="coupon">
    <br><br>
    <input type="submit" name=""class="btn btn-primary py-3 px-4" value="Áp dụng mã giảm giá" name="check-coupon"> 
  </form>

</div> 

<?php
$message = Session::get('message');
if($message){
  echo '<span class="text-alert">', $message,'</span>';
  Session::put('message',null);

}
?>



<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
  <div class="cart-total mb-3">
   <p class="d-flex">
    <span>Tạm tính</span>
    <span>{{Cart::subtotal().' '.'VNĐ'}}</span>
    
  </p>

  <p class="d-flex">

    @if(Session::get('coupon'))
    <span>Mã giảm</span>
    @foreach(Session::get('coupon') as $key =>$cou)
    @if($cou['coupon_condition']==1)
    @php 
    echo '<span>'.$cou['coupon_numbers'].'%</span> </p>'; 
    echo '<p class="d-flex">
    <span>Tổng giảm</span>';
    $total =(int)Cart::subtotal() *1000;

    $coupon_numbers = (int)$cou['coupon_numbers'];
    (int)$total_coupon = $total*$coupon_numbers/100;
    echo '<span>'.$total_coupon.' VNĐ </span>';

    echo' <hr><p class="d-flex total-price">
    <span>Thành tiền</span>';
    (int)$result = $total - $total_coupon;
    echo '<span>'.$result.' VNĐ </span> </p>' ;
    @endphp
    @else 
    @php 
    echo '<span>'.$cou['coupon_numbers'].' VNĐ</span> </p>'; 
            // echo '<p class="d-flex">
            //       <span>Tổng giảm</span>';
    $total =(int)Cart::subtotal() *1000;

    $coupon_numbers = (int)$cou['coupon_numbers'];
            // (int)$total_coupon = $total-$coupon_numbers/100;
            //echo '<span>'.$total_coupon.' VNĐ </span>';

    echo' <hr><p class="d-flex total-price">
    <span>Thành tiền</span>';
    (int)$result = $total - $coupon_numbers;
    echo '<span>'.$result.' VNĐ </span> </p>' ;
    @endphp


    @endif
    @endforeach
    @else
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
  
  @endif

  <?php
  $customer_id = Session::get('customer_id');
  if($customer_id!=NULL){ 
    ?>
    <p>
      <a href="{{URL::to('/checkout')}}" class="btn btn-primary py-3 px-4">Tiến hành thanh toán</a>
      @if(Session::get('coupon'))
      <br><br>

      <a href="{{URL::to('/unset-coupon')}}" class="btn btn-primary py-3 px-4">Xóa mã khuyến mãi</a>
      @endif
    </p>
    <?php
  }else{
   ?>
   <p>
    <a href="{{URL::to('/login-checkout')}}" class="btn btn-primary py-3 px-4">Tiến hành thanh toán</a>
    @if(Session::get('coupon'))
    <br><br>
    <a href="{{URL::to('/unset-coupon')}}" class="btn btn-primary py-3 px-4">Xóa mã khuyến mãi</a>
    @endif
  </p>
  <?php 
}
?>
</div>
</div>
</div>
</section>
@endsection