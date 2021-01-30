@extends('layouts.backapp')
@section('backend_content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <!-- Page-header end -->
                <div class="page-body">
                    <!-- Config. table start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Order Approved List</h5>
                            <a class="btn btn-primary float-right" href="{{ url('orders/approved_orders') }}">Order Approved list</a>
                            
                        </div>

                        <div class="card-block">
                            <div class="col-md-12 table-responsive">
                            <table class="table-bordered" width="100%" style="background-color: #f7f7f7;">
                              @foreach($approved_order_details as $order_details)
                              <tr>
                                <td style="padding: 10px;">Billing info</td>
                                <td style="padding: 10px;" colspan="2">
                                  <strong>Name:</strong> {{ $order_details->name }}
                                  <strong>Mobile no:</strong> {{ $order_details->mobile_no }}<br>
                                  <strong>Email:</strong> {{ $order_details->email }}
                                  <strong>Address:</strong> {{ $order_details->address }}<br>
                                  <strong>Payment Method:</strong><br>
                                    {{ $order_details->payment_method }}
                                    @if($order_details->payment_method=='Bkash')
                                      <span>(Transaction no: {{ $order_details->transaction_no }})</span>
                                    @endif
                                    <strong>Order No.</strong><br>

                                    @php
                                      $sub_total_g = $order_details->order_total;
                                    @endphp
                                <strong>{{ $order_details->order_no }}</strong><br>
                                </td>
                              </tr>
                              @endforeach

                              <tr>
                                <td style="padding: 10px;">Product name/ Image</td>
                                <td style="padding: 10px;">Product size</td>
                                <td style="padding: 10px;">Product Qty/ Price</td>
                              </tr>

                              @foreach($approved_order_details as $product_details_row)
                              <tr>
                                <td  style="padding: 10px;">
                                  <img style="height: 150px; width: 150px;" src="{{ asset($product_details_row->image1) }}"><br>
                                  {{ $product_details_row->product_name }}
                                  }
                                </td>
                                <td style="padding: 10px;">{{ $product_details_row->size }}</td>
                                <td style="padding: 10px;">
                                  {{ $product_details_row->qty }} x
                                  {{ $product_details_row->price }}=
                                  @php
                                    $sub_total = $product_details_row->qty*$product_details_row->price;
                                    echo $sub_total.'/-';
                                  @endphp
                                </td>
                              </tr>
                              @endforeach

                              <tr>
                                <td style="padding: 10px; text-align: right;" colspan="2">Grand Total: </td>
                                <td style="padding: 10px;">={{ $sub_total_g }}/-</td>
                              </tr>
                            </table>
                          </div>
                        </div>
                    </div>
                    <!-- Config. table end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection