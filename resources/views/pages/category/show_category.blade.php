@extends('layout')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url({{URL::to('public/frontend/images/bg_1.jpg')}});">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></span><span>Món ăn</span></p>
       <h1 class="mb-0 bread">Món ăn</h1>
     </div>
   </div>
 </div>
</div>

<section class="ftco-section">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-10 mb-5 text-center">
    <ul class="product-category">
      @foreach($category as $key => $cate)
      <li><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}" class="active">{{$cate->category_name}}</a></li>
      <li></li>
      @endforeach
    </ul>
  </div>
</div>
<div class="row">
 @foreach($category_by_id as $key => $product)
     <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="product">
           <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" class="img-prod"><img class="img-fluid" src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="Colorlib Template">
              <div class="overlay"></div>
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
              <h3><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a></h3>
              <div class="d-flex">
                 <div class="pricing">
                    <p class="price"><span class="price-sale">{{number_format($product->product_price).' '.'VNĐ'}}</span></p>
                </div>
            </div>
            <div class="bottom-area d-flex px-3">
             <div class="m-auto d-flex">
              <form action="{{URL::to('/save-cart')}}" method="POST" style="display:flex">
              {{csrf_field()}}
                <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" style="margin-right: 5px" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                   <span><i class="ion-ios-menu"></i></span>
               </a>
               <input type="hidden" id="quantity" name="quantity" value="1">
               <input type="hidden" name="productid_hidden" value="{{$product->product_id}}"> 
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

{{ $category_by_id->links() }}
</section>
@endsection