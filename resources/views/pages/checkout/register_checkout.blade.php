@extends('login')
@section('login')
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form">
          <span class="login100-form-title p-b-43">
            ĐĂNG KÝ
          </span>
          
          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Mã số sinh viên" required>
          </div>
          
          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="pass" placeholder="Mật khẩu" required>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="pass" placeholder="Nhập lại mật khẩu" required>
          </div>

          <div class="flex-sb-m w-full p-t-3 p-b-32">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Bạn không phải là người máy
              </label>
            </div>

            <div>
              <a href="{{URL::to('/login-checkout')}}" class="txt1">
                Đã có tài khoản
              </a>
            </div>
          </div>

          <a href="index.html" class="container-login100-form-btn">
            <button class="login100-form-btn">
              Đăng ký
            </button>
          </a>
          
        </form>

        <div class="login100-more" style="background-image: url('login/images/bg-01.jpg');">
        </div>
      </div>
    </div>
  </div>
@endsection