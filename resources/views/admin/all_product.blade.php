@extends('admin_layout')
@section('admin_content')
        <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê sản phẩm
    </div>
    <div class="row w3-res-tb">
     
      <div class="col-sm-9">
      </div>

      <form method="POST" action="{{URL::to('/search-product')}}" >
        {{csrf_field()}}
        <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Tìm kiếm sản phẩm" name = "keyword_submit">
            <span class="input-group-btn">
              
              <input type="submit" class="btn btn-sm btn-default" mame = "search_product" value="Tìm kiếm">
            </span>
          </div>
        </div>
      </form>
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
            <th>Tên sản phẩm</th>
            <th>Số lượng sản phẩm</th>
            <th>Giá</th>
            <th>Giá KM</th>
            <th>Hình sản phẩm</th>
            <th>Danh mục</th>
            <th>Trạng thái</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_product as $key => $pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$pro->product_name}}</td>
            <td>{{$pro->product_quantity}}</td>
            <td>{{$pro->product_price}}</td>
            <td>{{$pro->product_promotion_price}}</td>
            <td><img src="public/upload/product/{{$pro->product_image}}" height="80" width="80"></td>
            <td>{{$pro->category_name}}</td>
            <td><span class="text-ellipsis">
              <?php
              if($pro->product_status==0){
                ?>
                <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
              <?php
              }else{
                ?>
                <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
              <?php
            }
            ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có muốn xóa sản phẩm?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active" ui-toggle-class="">    
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
