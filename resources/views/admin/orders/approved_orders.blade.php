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
                            <h5>Approved Orders</h5>
                            <a class="btn btn-primary float-right" href="{{ url('orders/pending_orders') }}">Pending Orders</a>
                            
                        </div>

                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="new-cons" class="table table-striped table-bordered nowrap">
                                    <div class="col-md-5">
                                        @if(session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                    </div>
                                    <thead>
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Total Tk</th>
                                            <th>Payent type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach($approved_orders as $approved_row)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $approved_row->order_total }}</td>
                                            <td>
                                                {{ $approved_row->payment_method }}
                                                @if($approved_row->payment_method=='Bkash')
                                                <span>(Transaction no: {{ $approved_row->transaction_no }})</span>
                                                @endif
                                            </td>

                                            <td>
                                                @if($approved_row->status==0)
                                            <span class="text-danger">Order Pending</span>
                                                @elseif($approved_row->status==1)
                                            <span class="text-primary">Approved</span>
                                                @endif
                                            </td>


                                            <td>

                                                <a href="{{ url('orders/order_details/'.$approved_row->id) }}" title="Order Details">
                                                    <i style="font-size: 22px;" class="ti ti-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
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