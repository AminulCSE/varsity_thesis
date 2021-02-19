@extends('layouts.frontapp')
@section('content')
<div class="col-md-2"></div>
<div class="col-xs-12 col-sm-12 col-md-8 homebanner-holder"> 
    <div class="detail-block">
        <div class="row wow fadeInUp">

            <div class="col-md-2"></div>
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
              <style type="text/css">
                .info-title>span{color: red;}
              </style>

              <h4 class="checkout-subtitle" style="color: #05a70a; text-align: center;">প্রয়োজনে মেসেজ করুন</h4>
              <form action="{{ url('user/send_contact') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label class="info-title" for="name">নাম: <span>*</span></label>
                      <input type="text" name="name" class="form-control border border-success" id="name">
                  </div>
                  <div class="form-group">
                      <label class="info-title" for="email">ইমেইল: <span>*</span></label>
                      <input type="email" name="email" class="form-control border border-success" id="email">
                  </div>

                  <div class="form-group">
                      <label class="info-title" for="subject">সাবজেক্ট: <span>*</span></label>
                      <input type="subject" name="subject" class="form-control border border-success" id="email">
                  </div>

                  <div class="form-group">
                      <label class="info-title" for="phone_number">ফোন নাম্বার: <span></span></label>
                      <input type="phone_number" name="phone_number" class="form-control border border-success" id="phone_number">
                  </div>


                  <div class="form-group">
                      <label class="info-title" for="message">মেসেজ<span>*</span></label>
                      <textarea name="message" class="form-control border border-success" rows="8" id="message"></textarea>
                  </div>
                  <button type="submit" class="btn-upper btn btn-primary checkout-page-button">সেন্ড</button>
              </form>
          </div>
<div class="col-md-2"></div>



        </div><!-- /.row -->
        

        <br>
        <div class="row">
          <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3018.1637085501866!2d90.37629381434952!3d23.807411892514327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sbd!4v1613445541976!5m2!1sen!2sbd" width="830" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>



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
<div class="col-md-2"></div>
@endsection












