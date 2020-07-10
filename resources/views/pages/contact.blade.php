@extends('layout')
@section('content')
<section class="ftco-section contact-section bg-light">
  <div class="container">
   <div class="row d-flex mb-5 contact-info">
    <div class="w-100"></div>
    <div class="col-md-3 d-flex">
     <div class="info bg-white p-4">
       <p><span>Địa chỉ: </span> Khu phố 6, P.Linh Trung, Q.Thủ Đức, TP.Hồ Chí Minh.</p>
     </div>
   </div>
   <div class="col-md-3 d-flex">
     <div class="info bg-white p-4">
       <p><span>Điện Thoại:</span> <a href="tel://1234567920">091-234-5678</a></p>
     </div>
   </div>
   <div class="col-md-3 d-flex">
     <div class="info bg-white p-4">
       <p><span>Email:</span> <a href="mailto:info@yoursite.com">Canteenuit@gm.uit.edu.vn</a></p>
     </div>
   </div>
   <div class="col-md-3 d-flex">
     <div class="info bg-white p-4">
       <p><span>Website</span> <a href="{{URL::to('/trang-chu')}}">CanteenUIT.com</a></p>
     </div>
   </div>
 </div>
 <div class="row block-9">
  <div class="col-md-6 order-md-last d-flex">
    <form action="#" class="bg-white p-5 contact-form">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Họ Và Tên ">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Chủ Đề">
      </div>
      <div class="form-group">
        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Tin Nhắn"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Gửi Tin Nhắn" class="btn btn-primary py-3 px-5">
      </div>
    </form>

  </div>

  <div class="col-md-6 d-flex">
   <!-- <div id="map" class="bg-white"> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1959.1169094754641!2d106.80357649035189!3d10.869812531829332!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1589869298735!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</div>
</div>
</div>
</section>
@endsection