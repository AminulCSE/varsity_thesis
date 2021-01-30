@extends('layouts.frontapp')
@section('content')
  <div class="col-md-1"></div>
  <div class="col-xs-12 col-sm-12 col-md-10 homebanner-holder"> 
              <div class="detail-block">
                  <div class="row fadeInUp">

<h3 style="text-align: center; color: red;">Select your payment method
  <br><i class="fa fa-chevron-down"></i>
</h3>
                    <div class="row ">
                      <div class="shopping-cart">
                        <div class="shopping-cart-table">
                          @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif

                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        <div class="table-responsive">
                          <table class="table col-xs-12 col-sm-12">
                            <thead>
                              <tr>
                                <th class="cart-description item">Image</th>
                                <th class="cart-product-name item">Product Name</th>
                                <th class="cart-qty item">Quantity</th>
                                <th class="cart-price item">Price</th>
                                <th class="cart-size item">Size</th>
                                <th class="cart-sub-total item">Subtotal</th>
                                <th class="cart-romove item">Remove</th>
                              </tr>
                            </thead><!-- /thead -->
                            <tbody>

                    @php
                      $cart_row = Cart::content();
                      $total = 0;
                    @endphp

                            @foreach($cart_row as $cartval_row)
                              <tr>
                                <td class="cart-image">
                                  <a class="entry-thumbnail" href="{{ url('product_details/'.$cartval_row->id) }}">
                                      <img src="{{ asset($cartval_row->options->image1) }}" alt="">
                                  </a>
                                </td>

                                <td class="cart-product-name-info">
                                  <h4 class="cart-product-description"><a href="{{ url('product_details/'.$cartval_row->id) }}">{{ $cartval_row->name }}</a></h4>
                                  
                                  <div class="cart-product-info">
                                    <span class="product-color">Product Code:<span>{{ $cartval_row->options->product_code }}</span></span>
                                  </div>
                                </td>

                                  <form action="{{ url('updatecart') }}" method="post">
                                    @csrf
                                    <td class="cart-product-quantity">
                                      <div class="quant-input">
                                        <input type="number" name="qty" value="{{ $cartval_row->qty }}" min="1">
                                        <input type="hidden" name="rowId" value="{{ $cartval_row->rowId }}">
                                      </div>
                                          <input type="submit" name="submit" value="Update">
                                    </td>
                                  </form>

                              <td>
                                  <div class="cart-product-info">
                                    {{ $cartval_row->price }}
                                  </div>
                              </td>

                              <td>
                                  <div class="cart-product-info">
                                    {{ $cartval_row->options->size }}
                                  </div>
                              </td>

                                <td class="cart-product-sub-total">
                                  <span class="cart-sub-total-price">{{ $cartval_row->subtotal }}</span>
                                </td>

                                <!--<td class="cart-product-grand-total"><span class="cart-grand-total-price">{{ $cartval_row->subtotal*$cartval_row->qty }}</span></td>
                                 -->
                                 <td class="romove-item">
                                 <a onclick="return confirm('Are you sure to delete the cart??')" href="{{ url('destroycart/'.$cartval_row->rowId) }}" title="cancel" class="icon">
                                    <i class="fa fa-trash-o"></i>
                                  </a>
                                </td>
                              </tr>
                              @php $total += $cartval_row->subtotal;  @endphp
                              @endforeach

                              <td colspan="4" style="text-align: right;"> <b>Grand Total</b> </td>
                              <td colspan="2"><b>Tk:- {{ $total }}/-</b></td>

                            </tbody><!-- /tbody -->
                          </table><!-- /table -->
                        </div>
                      </div><!-- /.shopping-cart-table -->  
                    </div><!-- /.shopping-cart -->
                  </div>

                  <div class="row" style=""><!-- Payment methed -->
                    <div class="col-md-4"></div>

                    <div class="col-md-4">
                      <h3 style="text-align: center; color: red;">Payment Method</h3>
                      <form action="{{ url('customer/payment/store') }}" method="post">
                        @csrf

                        @foreach($cart_row as $cartval_row)
                          <input type="hidden" name="product_id" value="{{ $cartval_row->id }}">
                        @endforeach


                        <input type="hidden" name="order_total" value="{{ $total }}">
                        <select class="form-control" name="payment_method" required="" id="payment_method">
                          <option selected="" disabled="">Select Payment Type</option>
                          <option value="Hand cash">Hand Cash</option>
                          <option onclick="showhide()" value="Bkash">Bkash</option>
                        </select>

                        <div id="show_field" style="display: none; margin-top: 20px;">
                          <span style="color: green;">* Bkash No: 01787377982</span><br>
                          <input type="text" name="transaction_no"  class="form-control" placeholder="Enter Bkash Transction id">
                        </div><br>

                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">সাবমিট</button>
                      </form>
                    </div>

                    <div class="col-md-4"></div>
                  </div>



                </div><!-- /.row -->
              </div>
            </div><!-- /.col -->
            <div class="clearfix">
              
            </div>
        </div><!-- /.row -->
      </div>
  <!-- /.homebanner-holder --> 
  <!-- ============================================== CONTENT : END ============================================== --> 
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
$('#payment_method').on('change', function () {
    if(this.value === "Bkash"){
        $("#show_field").show();
        $("#required").attr("required", true);
    } else {
        $("#show_field").hide();
    }
});
</script>

<!-- /.row --> 
<div class="col-md-1"></div>
@endsection