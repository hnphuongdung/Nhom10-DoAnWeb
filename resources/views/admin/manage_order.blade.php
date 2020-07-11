@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê đơn hàng
    </div>
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
            <th>Thứ tự</th>
            <th>Mã đơn hàng</th>
            <th>Tổng giá tiền</th>
            <th>Tình trạng đơn hàng</th>
            <th>Hiển thị</th>
          </tr>
        </thead>
        <tbody>
          @php 
          $i = 0;
          @endphp
          @foreach($order as $key => $or)
          @php 
            $i++;
            @endphp
          <tr>
            <td><i>{{$i}}</i></label></td>
            <td>{{$or->order_id}}</td>
            <td>{{$or->order_total}}</td>
            <td>{{$or->order_status}}</td>
            <td>
              <a href="{{URL::to('/view-order/'.$or->order_code)}}" class="active" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                <a onclick="return confirm('Bạn có muốn xóa đơn hàng không?')" href="{{URL::to('/delete-order/'.$or->order_code)}}" class="active" ui-toggle-class="">    
                </i><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
        
    </div>
  </div>
  @endsection