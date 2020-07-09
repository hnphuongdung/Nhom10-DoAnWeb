@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm mã giảm giá
            </header>
            <div class="panel-body">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">', $message,'</span>';
                    Session::put('message',null);

                }
                ?>
                <div class="position-center">
                    <form role="form" action="{{URL::to('/insert-coupon-code')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên mã giảm giá</label>
                            <input type="text" name="coupon_name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mã giảm giá</label>
                            <input type="text" class="form-control" name="coupon_code" id="exampleInputPassword1" placeholder="Mô tả danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số lượng mã</label>
                            <input class="form-control" name="coupon_times" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tính năng mã</label>
                            <select name="coupon_condition" class="form-control input-sm m-bot15">
                                <option value="0">-----Chọn------</option>
                                <option value="1">Giảm theo %</option>
                                <option value="2">Giảm theo tiền</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nhập số % hoặc số tiền giảm</label>
                            <input type="text" class="form-control" name="coupon_numbers" id="exampleInputPassword1">
                        </div>

                        <button type="submit" name="insert_coupon" class="btn btn-info">Thêm mã giảm giá</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>
@endsection