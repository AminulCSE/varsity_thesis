@extends('layouts.frontapp')
@section('content')
  <div class="col-md-1"></div>
  <div class="col-xs-12 col-sm-12 col-md-10 homebanner-holder"> 
              <div class="detail-block">
                  <div class="row fadeInUp">
                    <div class="row ">
                      <div class="shopping-cart">
                        <div class="shopping-cart-table">
                          @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
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
                                <th class="cart-sub-total item">Subtotal</th>
                                <th class="cart-romove item">Remove</th>
                              </tr>
                            </thead><!-- /thead -->
                            <tfoot>
                              <tr>
                                <td colspan="7">
                                  <div class="shopping-cart-btn">
                                    <span class="">
                                      <a href="{{ url('/') }}" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                                    </span>
                                  </div><!-- /.shopping-cart-btn -->
                                </td>
                              </tr>
                            </tfoot>
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



                                <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{ $cartval_row->subtotal }}</span></td>

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
                            </tbody><!-- /tbody -->
                          </table><!-- /table -->
                        </div>
                      </div><hr><!-- /.shopping-cart-table -->        


                      <div class="col-md-8"></div>

                      <div class="col-md-4 col-sm-12 cart-shopping-total">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>
                                <div class="cart-sub-total">
                                  Subtotal<span class="inner-left-md">Tk: {{ $total }}</span>
                                </div>
                                <div class="cart-grand-total">
                                  Grand Total<span class="inner-left-md">Tk: {{ $total }}</span>
                                </div>
                              </th>
                            </tr>
                          </thead><!-- /thead -->
                          <tbody>
                              <tr>
                                <td>
                                  <div class="cart-checkout-btn pull-right">
                                    <button type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
                                  </div>
                                </td>
                              </tr>
                          </tbody><!-- /tbody -->
                        </table><!-- /table -->
                      </div><!-- /.cart-shopping-total -->      
                    </div><!-- /.shopping-cart -->
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
<!-- /.row --> 
<div class="col-md-1"></div>
@endsection