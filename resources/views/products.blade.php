@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display:flex;justify-content: space-between;">
                    <div class="header-name" style="font-weight:bold;font-size:20px">
                        Products
                    </div>
                    <div class="button">
                        <button type="button" class="btn btn-primary" name="button" data-toggle="modal" data-target="#productsModal">Add Products</button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="productstable" class="table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Size</th>
                                <th>Product Color</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>{{$product->product_size}}</td>
                                <td>{{$product->product_color}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id='productsForm' method="post">
              @csrf
              <div class="form-group">
                  <label for="product_name">Product Name</label>
                  <input type="text" name="product_name" class="form-control">
              </div>
              <div class="form-group">
                  <label for="product_price">Product Price</label>
                  <input type="text" name="product_price" class="form-control">
              </div>
              <div class="form-group">
                  <label for="product_size">Product Size</label>
                  <input type="text" name="product_size" class="form-control">
              </div>
              <div class="form-group">
                  <label for="product_color">Product Color</label>
                  <input type="text" name="product_color" class="form-control">
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
          </form>
      </div>
    </div>
  </div>
</div>
<script>
    $('#productsForm').submit(function(e){
        e.preventDefault();
        var product_name = $("input[name=product_name]").val();
        var product_price = $("input[name=product_price]").val();
        var product_size = $("input[name=product_size]").val();
        var product_color = $("input[name=product_color]").val();
        var _token = $("input[name=_token]").val();

        $.ajax({
            url:"{{route('product.add')}}",
            type:"POST",
            data:{
                product_name : product_name,
                product_price : product_price,
                product_size : product_size,
                product_color : product_color,
                _token : _token
            },
            success:function(response){
                console.log(response);
                $('#productstable tbody').prepend('<tr><td>'+product_name+'</td><td>'+product_price+'</td><td>'+product_size+'</td><td>'+product_color+'</td></tr>');
                $('#productsModal').modal('toggle');
                $('#productsForm')[0].reset();
            }
        });
    })
</script>
@endsection
