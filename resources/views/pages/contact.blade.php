@extends('layout')
@section('content')
<section class="ftco-section contact-section bg-light">
  <div class="panel-body">
                                    
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
  
    <form action="{{URL::to('/save-contact')}}" method = "POST"class="bg-white p-5 contact-form">
      @csrf
    <?php
                                    $message = Session::get('message');
                                    if($message){
                                    echo '<span class="text-alert">', $message,'</span>';
                                    Session::put('message',null);

                                    }
                                    ?>
        <input type="text" name= "name" class="form-group form-control" placeholder="Họ Và Tên ">
      
      
        <input type="text" name = "email"class="form-group form-control" placeholder="Email">
      
        <input type="text" name = "subject"class="form-group form-control" placeholder="Chủ Đề">
      
        <textarea name="mess" id="" cols="30" rows="7" class="form-group form-control" placeholder="Tin Nhắn"></textarea>
     
        <input type="submit" name = "send_mess"value="Gửi Tin Nhắn" class="form-group btn btn-primary py-3 px-5">
      
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