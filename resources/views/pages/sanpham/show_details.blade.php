@extends('layout')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url({{URL::to('public/frontend/images/bg_1.jpg')}});">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></span> 
         <h1 class="mb-0 bread">Mô tả món ăn</h1>
       </div>
     </div>
   </div>
 </div>
 @foreach($product_details as $key => $value)
 {{-- Product details --}}
 <section class="ftco-section">
   <div class="container">
    <div class="row">
     <div class="col-lg-6 mb-5 ftco-animate">
      <a href="#" class="image-popup"><img src="{{URL::to('/public/upload/product/'.$value->product_image)}}" class="img-fluid" alt="Colorlib Template"></a>
    </div>
    <div class="col-lg-6 product-details pl-md-5 ftco-animate">
      <h3>{{$value->product_name}}</h3>
      <div class="rating d-flex">
       <p class="text-left mr-4">
        <a href="#" class="mr-2">5.0</a>
        <a href="#"><span class="ion-ios-star-outline"></span></a>
        <a href="#"><span class="ion-ios-star-outline"></span></a>
        <a href="#"><span class="ion-ios-star-outline"></span></a>
        <a href="#"><span class="ion-ios-star-outline"></span></a>
        <a href="#"><span class="ion-ios-star-outline"></span></a>
      </p>
      <p class="text-left mr-4">
        <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Đánh giá</span></a>
      </p>
      <p class="text-left">
        <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Đã bán</span></a>
      </p>
    </div>
    <p class="price"><span>{{number_format($value->product_price).' '.'VNĐ'}}</span></p>
    <p>{{$value->product_desc}}</p>
    <p>Danh mục: {{$value->category_name}}</p>
    <div class="row mt-4">
     <div class="col-md-6">
      <div class="form-group d-flex">
        <div class="select-wrap">
       {{-- <div class="icon"><span class="ion-ios-arrow-down"></span></div>
       <select name="" id="" class="form-control">
        <option value="">Nhỏ</option>
        <option value="">Vừa</option>
        <option value="">Lớn</option>
        <option value="">Khổng lồ</option>
      </select> --}}
    </div>
  </div>
</div>
<div class="w-100"></div>
<div class="input-group col-md-6 d-flex mb-3">
  <form action="{{URL::to('/save-cart')}}" method="POST">
   {{csrf_field()}}
   <input type="number" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
 </div>
 <input type="hidden" name="productid_hidden" value="{{$value->product_id}}"> 
 {{-- <button type="submit" class="btn btn-primary btn-black py-3 px-5"><a href="{{URL::to('/save-cart')}}">Thêm vào giỏ hàng</a></button> --}}
 <input type="submit" class="btn btn-primary btn-black py-3 px-5" value="Thêm vào giỏ hàng">
</form>
</div>
</div>
</div>
</section>
{{-- End product details --}}
@endforeach
<section class="ftco-section ">
 <div class="container">
  <div class="row justify-content-center mb-3 pb-3">
    <div class="col-md-12 heading-section text-center ftco-animate">
     <span class="subheading">Menu</span>
     <h2 class="mb-4">Món ăn liên quan</h2>
     <p>Ăn mà ngại chỉ có hại cho bao tử mà thôi! </p>
   </div>
 </div>   		
</div>
<div class="container">
  <div class="row">
    @foreach($related as $key =>$lienquan )
    <div class="col-md-6 col-lg-3 ftco-animate">
      <div class="product">
       <a href="{{URL::to('chi-tiet-san-pham/'.$lienquan->product_id)}}" class="img-prod"><img class="img-fluid" src="{{URL::to('public/upload/product/'.$lienquan->product_image)}}" alt="Colorlib Template">
       </a>
       <div class="text py-3 pb-4 px-3 text-center">
        <h3><a href="{{URL::to('chi-tiet-san-pham/'.$lienquan->product_id)}}">{{$lienquan->product_name}}</a></h3>

        <div class="d-flex">
          <div class="pricing">
            <p class="price"><span>{{number_format($value->product_price).' '.'VNĐ'}}</span></p>
          </div>
        </div>
        <div class="bottom-area d-flex px-3">
         <div class="m-auto d-flex">
          <form action="{{URL::to('/save-cart')}}" method="POST" style="display:flex">
            {{csrf_field()}}
            <a href="{{URL::to('/chi-tiet-san-pham/'.$lienquan->product_id)}}" style="margin-right: 5px" class="add-to-cart d-flex justify-content-center align-items-center text-center">
             <span><i class="ion-ios-menu"></i></span>
           </a>
           <input type="hidden" id="quantity" name="quantity" value="1">
           <input type="hidden" name="productid_hidden" value="{{$lienquan->product_id}}"> 
           <button type="submit" style="background-color: #ccab07; border-radius:50%; width:40px; height:40px; border:none; padding-left: 5px; color: white"><i class="ion-ios-cart"></i></button>
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
@endforeach
</div>
</div>
</section>
@endsection