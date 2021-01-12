@extends('layouts.frontapp')
@section('content')
      <div class="col-md-1"></div>
      <div class="col-xs-12 col-sm-12 col-md-10 homebanner-holder"> 
                  <div class="detail-block">
                    @php $userProfile = Auth::user(); @endphp
                    @if(Auth::check())
                      <div class="row  wow fadeInUp">
                          <div class="col-md-8 col-sm-8 create-new-account">
                            
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




                            <h4 class="checkout-subtitle">Edit your info</h4>
                            <form action="{{ url('user/user_update/'.Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="info-title" for="name">নাম: <span>*</span></label>
                                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control unicase-form-control text-input" id="name">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="email">ইমেইল: <span>*</span></label>
                                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control unicase-form-control text-input" id="email">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="mobile">মোবাইল</label>
                                    <input type="number" name="mobile" value="{{ Auth::user()->mobile }}" class="form-control unicase-form-control text-input" id="mobile">
                                </div>

                                <img src="{{ asset(Auth::user()->image) }}" style="height: 244px; width: 244px;">
                                <div class="form-group">
                                    <label class="info-title" for="image">প্রফাইল ফটো</label>
                                    <input type="hidden" name="old_image" value="{{ Auth::user()->image }}">

                                    <input type="file" name="image" value="{{ Auth::user()->image }}" class="form-control unicase-form-control text-input" id="image">
                                </div>
                                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">আপডেট</button>
                            </form>
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












