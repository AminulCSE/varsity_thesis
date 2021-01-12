@extends('layouts.frontapp')
@section('content')
      <div class="col-md-1"></div>
      <div class="col-xs-12 col-sm-12 col-md-10 homebanner-holder"> 
                  <div class="detail-block">
                    @php $userProfile = Auth::user(); @endphp
                    @if(Auth::check())
                      <div class="row  wow fadeInUp">
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




                          <div class="col-md-8">
                            <img style="height: 240px; width: 240px;" src="{{ asset($userProfile->image) }}">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>নাম</th>
                                  <th>ইমেইল</th>
                                  <th>মোবাইল নাম্বার</th>
                                  <th>রেজিস্ট্রেশন ডেট</th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td>{{ $userProfile->name }}</td>
                                  <td>{{ $userProfile->email }}</td>
                                  <td>{{ $userProfile->mobile }}</td>
                                  <td>{{ $userProfile->created_at }}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          <div class="col-md-4 col-sm-12" style="background-color: #023020; padding: 30px; margin: 15px 0px; height: 400px">
                              <a class="btn btn-success" href="{{ route('user.home') }}">আমার প্রফাইল</a><br><br>
                             <a class="btn btn-success" href="{{ url('user/user_edit/'.Auth::user()->id) }}">প্রফাইল পরিবর্তন</a><br><br>
                            <a class="btn btn-success" href="{{ url('user/change_userpass/'.Auth::user()->id) }}">পাসওয়ার্ড চেন্জ</a><br><br>
                            <a class="btn btn-success" href="{{ url('user/order/'.Auth::user()->id) }}">অর্ডার</a>
                          </div>
                      </div><!-- /.row -->
                    @else
                    <h2 style="text-align: center;color: #ff4433;">অনুগ্রহ করে লগইন/ রেজিস্ট্রেশন করুন:-
                      <a style="text-align: center; text-decoration: underline;" href="{{ route('login') }}">লগ ইন/ রেজিস্ট্রেশন</a>
                    </h2>

                    @endif

                    

                  </div>


                    <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                  

                </div><!-- /.col -->
                <div class="clearfix"></div>
            </div><!-- /.row -->
        
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    <!-- /.row --> 
    <div class="col-md-1"></div>
@endsection












