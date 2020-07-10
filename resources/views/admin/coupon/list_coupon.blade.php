@extends('admin_layout')
@section('admin_content')
        <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê mã giảm giá
    </div>
   {{--  <div class="row w3-res-tb">
      
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div> --}}
    <div class="table-responsive">
                                    <?php
                                    $message = Session::get('message');
                                    if($message){
                                    echo '<span class="text-alert">', $message,'</span>';
                                    Session::put('message',null);

                                    }
                                    ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>Tên mã</th>
            <th>Mã</th>
            <th>Số lượng</th>
            <th>Điều kiện</th>
            <th>Số giảm</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($coupon as $key => $cou)
          <tr>
            <td>{{$cou->coupon_name}}</td>
            <td>{{$cou->coupon_code}}</td>
            <td>{{$cou->coupon_times}}</td>
            <td><span class="text-ellipsis">
              <?php
              if($cou->coupon_condition==1){
                ?>
                Giảm theo %
              <?php
              }else{
                ?>
               Giảm theo tiền
              <?php
            }
            ?>
            </span></td>
            <td><span class="text-ellipsis">
              <?php
              if($cou->coupon_condition==1){
                ?>
                Giảm {{$cou->coupon_numbers}} %
              <?php
              }else{
                ?>
               Giảm {{$cou->coupon_numbers}} đ
              <?php
            }
            ?>
            </span></td>
           
            <td>
              
              <a onclick="return confirm('Bạn có muốn xóa mã?')" href="{{URL::to('/delete-coupon/'.$cou->coupon_id)}}" class="active" ui-toggle-class="">    
                </i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      
    </footer>
  </div>
</div>
@endsection
