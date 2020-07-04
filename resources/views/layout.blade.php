<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chào mừng bạn đến với canteen UIT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('public/frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('public/frontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('public/frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
</head>

<body class="goto-here">
  <div class="py-1 bg-primary">
   <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
         <div class="col-lg-12 d-block">
            <div class="row d-flex">
               <div class="col-md pr-4 d-flex topper align-items-center">
                  <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                  <span class="text">091-234-5678</span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                  <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                  <span class="text">Canteen@gm.uit.edu.vn</span>
              </div>
              <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                  <a href="register.html" class="text">Đăng kí</a>
                  <a href="Login.html" class="text">Đăng nhập</a>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.html">Canteen UIT</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="{{URL::to('/trang-chu')}}" class="nav-link">Trang chủ</a></li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
             <a class="dropdown-item" href="shop.html">Menu</a>
             <a class="dropdown-item" href="cart.html">Giỏ hàng</a>
             <a class="dropdown-item" href="checkout.html">Thanh toán</a>
         </div>
     </li>
     <li class="nav-item"><a href="about.html" class="nav-link">Giới thiệu</a></li>
     <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
     <li class="nav-item"><a href="contact.html" class="nav-link">Liên hệ</a></li>
     <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

 </ul>
</div>
</div>
</nav>
<!-- END nav -->
@yield('content')
<footer class="ftco-footer ftco-section">
  <div class="container">
   <div class="row">
    <div class="mouse">
      <a href="#" class="mouse-icon">
       <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
     </a>
   </div>
 </div>
 <div class="row mb-5">
  <div class="col-md">
    <div class="ftco-footer-widget mb-4">
      <h2><a href="index.html" class="ftco-heading-2">Canteen UIT</a></h2>
      <p>Ăn mà ngại thì chỉ có hại cho bao tử mà thôi!</p>
      <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
      </ul>
    </div>
  </div>
  <div class="col-md">
    <div class="ftco-footer-widget mb-4 ml-md-5">
      <h2 class="ftco-heading-2">Tất cả</h2>
      <ul class="list-unstyled">
        <li><a href="shop.html" class="py-2 d-block">Menu</a></li>
        <li><a href="about.html" class="py-2 d-block">Giới thiệu</a></li>
        <li><a href="contact.html" class="py-2 d-block">Liên hệ</a></li>
      </ul>
    </div>
  </div>
  <div class="col-md-4">
   <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">Hỗ trợ</h2>
    <div class="d-flex">
     <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
       <li><a href="" class="py-2 d-block">Cách thức đặt hàng</a></li>
       <li><a href="dieukhoan.html" class="py-2 d-block">Điều khoản &amp; Điều kiện</a></li>
       <li><a href="quyenriengtu.html" class="py-2 d-block">Quyền riêng tư</a></li>
     </ul>
   </div>
 </div>
</div>
<div class="col-md">
  <div class="ftco-footer-widget mb-4">
   <h2 class="ftco-heading-2">Bạn có thắc mắc?</h2>
   <div class="block-23 mb-3">
     <ul>
       <li><span class="icon icon-map-marker"></span><span class="text">Trường Đại học Công nghệ Thông tin, khu phố 6, phường Linh Trung, quận Thủ Đức, TP. Hồ Chí Minh</span></li>
       <li><a href="#"><span class="icon icon-phone"></span><span class="text">091-234-5678</span></a></li>
       <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Canteen@gm.uit.edu.vn</span></a></li>
     </ul>
   </div>
 </div>
</div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="public/frontend/js/jquery.min.js"></script>
<script src="public/frontend/js/jquery-migrate-3.0.1.min.js"></script>
<script src="public/frontend/js/popper.min.js"></script>
<script src="public/frontend/js/bootstrap.min.js"></script>
<script src="public/frontend/js/jquery.easing.1.3.js"></script>
<script src="public/frontend/js/jquery.waypoints.min.js"></script>
<script src="public/frontend/js/jquery.stellar.min.js"></script>
<script src="public/frontend/js/owl.carousel.min.js"></script>
<script src="public/frontend/js/jquery.magnific-popup.min.js"></script>
<script src="public/frontend/js/aos.js"></script>
<script src="public/frontend/js/jquery.animateNumber.min.js"></script>
<script src="public/frontend/js/bootstrap-datepicker.js"></script>
<script src="public/frontend/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="public/frontend/js/google-map.js"></script>
<script src="public/frontend/js/main.js"></script>

</body>
</html>