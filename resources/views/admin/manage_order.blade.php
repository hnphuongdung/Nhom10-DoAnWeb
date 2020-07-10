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
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên khách hàng</th>
            <th>Tổng giá tiền</th>
            <th>Tình trạng đơn hàng</th>
            <th>Hiển thị</th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_order as $key => $order)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$order->customer_name}}</td>
            <td>{{$order->order_total}}</td>
            <td>{{$order->order_status}}</td>
            <td>
              <a href="{{URL::to('/view-order/'.$order->order_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                <a onclick="return confirm('Bạn có muốn xóa đơn hàng không?')" href="{{URL::to('/delete-order/'.$order->order_id)}}" class="active" ui-toggle-class="">    
                </i><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        {{ $all_order->links() }}

      </footer>
        
    </div>
  </div>
  @endsection