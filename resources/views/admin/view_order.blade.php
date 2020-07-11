@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin khách hàng
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
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$customer->customer_name}}</td>
            <td>{{$customer->customer_phone}}</td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
<br><br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê chi tiết đơn hàng
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
                <input type="checkbox">
              </label>
            </th>
            <th>Tên sản phẩm</th>
            <th>Số lượng kho</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
          </tr>
        </thead>
        <tbody>
           @php 
          $i = 0;
          $total = 0;
          @endphp
        @foreach($order_details as $key => $details)

          @php 
          $i++;
          $subtotal = $details->product_price*$details->product_sales_quantity;
          $total+=$subtotal;
          @endphp
          <tr>
            <td><i>{{$i}}</i></label></td>
            <td>{{$details->product_name}}</td>
            <td>{{$details->product_quantity}}</td> 
            <td><input type="number" min="1" value="{{$details->product_sales_quantity}}" name="product_sales_quantity">
            <button type="submit" name="update_sales_quantity" class="btn btn-info">Cập nhật số lượng</button>
          </td>
            <td>{{$details->product_price}}</td>
            <td>{{$details->product_price*$details->product_sales_quantity}}</td>
            <td>{{number_format($details->product_price,0,',',',')}}đ</td>
            <td>{{number_format($subtotal,0,',',',')}}đ</td>
          </tr>
          @endforeach
          <tr>
            <td>Thanh toán: {{number_format($total,0,',',',')}}đ</td>
          </tr>
            <td>
              <select class="form_control">
                <option value="Đang chờ xử lý">Đang chờ xử lý</option>
                <option value="Đã xử lý">Đã xử lý</option>
                <option value="Đã hủy hàng">Hủy đơn hàng</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection