@extends('layouts.frontapp')
@section('content')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
<div class="container">
<div class="row"> 
<!-- ============================================== SIDEBAR ============================================== -->
<div class="col-md-9">
    <div class="blog-post wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
          <img class="img-responsive" src="{{ asset($blogshow_id->image) }}" alt="">
          <h1>{{ $blogshow_id->title }}</h1>
          <i class="fa fa-user"></i> <span class="author">John Doe</span>
          <i class="fa fa-comment"></i> <span class="review">7 Comments</span>
          <i class="fa fa-calendar"></i> <span class="date-time">18/06/2016 11.30AM</span>
          <p>{{ $blogshow_id->description }}</p>
          <div class="social-media" style="font-size: 20px; color:#05a70a;">
              <span>share post:</span>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-rss"></i></a>
              <a href="#" class="hidden-xs"><i class="fa fa-pinterest"></i></a>
          </div>
      </div>
      <br><br><br>

      <div class="blog-review wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
          <div class="row">
              <div class="col-md-12">
                  <h3 class="title-review-comments">16 comments</h3>
              </div>
              <div class="col-md-2 col-sm-2">
                  <img src="assets/images/testimonials/member1.png" alt="Responsive image" class="img-rounded img-responsive">
              </div>
              <div class="col-md-10 col-sm-10 blog-comments outer-bottom-xs">
                  <div class="blog-comments inner-bottom-xs">
                      <h4>Jone doe</h4>
                      <span class="review-action pull-right">
                          03 Day ago /   
                          <a href="#"> Repost</a> /
                          <a href="#"> Reply</a>
                      </span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                  </div>
                  <div class="blog-comments-responce outer-top-xs ">
                      <div class="row">
                          <div class="col-md-2 col-sm-2">
                              <img src="assets/images/testimonials/member2.png" alt="Responsive image" class="img-rounded img-responsive">
                          </div>
                          <div class="col-md-10 col-sm-10 outer-bottom-xs">
                              <div class="blog-sub-comments inner-bottom-xs">
                                  <h4>Sarah Smith</h4>
                                  <span class="review-action pull-right">
                                      03 Day ago /   
                                      <a href="#"> Repost</a> /
                                      <a href="#"> Reply</a>
                                  </span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                              </div>
                          </div>
                          <div class="col-md-2 col-sm-2">
                              <img src="assets/images/testimonials/member3.png" alt="Responsive image" class="img-rounded img-responsive">
                          </div>
                          <div class="col-md-10 col-sm-10">
                              <div class=" inner-bottom-xs">
                                  <h4>Stephen</h4>
                                  <span class="review-action pull-right">
                                      03 Day ago /   
                                      <a href="#"> Repost</a> /
                                      <a href="#"> Reply</a>
                                  </span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-sm-2">
                  <img src="assets/images/testimonials/member4.png" alt="Responsive image" class="img-rounded img-responsive">
              </div>
              <div class="col-md-10 col-sm-10">
                  <div class="blog-comments inner-bottom-xs outer-bottom-xs">
                      <h4>Saraha Smith</h4>
                      <span class="review-action pull-right">
                          03 Day ago /   
                          <a href="#"> Repost</a> /
                          <a href="#"> Reply</a>
                      </span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                  </div>
              </div>
              <div class="col-md-2 col-sm-2">
                  <img src="assets/images/testimonials/member1.png" alt="Responsive image" class="img-rounded img-responsive">
              </div>
              <div class="col-md-10 col-sm-10">
                  <div class="blog-comment inner-bottom-xs">
                      <h4>Mark Doe</h4>
                      <span class="review-action pull-right">
                          03 Day ago /   
                          <a href="#"> Repost</a> /
                          <a href="#"> Reply</a>
                      </span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                  </div>
              </div>
              <div class="post-load-more col-md-12"><a class="btn btn-upper btn-primary" href="#">Load more</a></div>
          </div>




      <div class="related_blog">
        <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">আরো ব্লগ পোস্ট</h3>
                        <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                    @php
                        $more_blog = DB::table('blogs')->limit('5')->get();
                    @endphp
                    @foreach($more_blog as $more_blog_row)
                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                    <div class="product-image">
                                      <div class="image">
                                        <a href="{{ url('blog_details/'.$more_blog_row->id) }}">
                                          <img  src="{{ asset($more_blog_row->image) }}" alt="">
                                        </a>
                                      </div>
                                      <!-- /.image -->
                                    </div>
                                    <!-- /.product-image -->
                                    
                                    <div class="product-info text-left">
                                      <h2 class="name">
                                        <a href="{{ url('blog_details/'.$more_blog_row->id) }}">{{ $more_blog_row->title }}</a>
                                      </h2>
                                      <!-- /.product-price --> 
                                      <div class="description">
                                        {{ Str::limit($more_blog_row->description, 50) }}
                                      </div>
                                    </div>
                                    <!-- /.product-info -->
                                    <!-- /.cart --> 
                                  </div>
                                </div><!-- /.products -->
                            </div><!-- /.item -->
                            @endforeach
                          </div><!-- /.home-owl-carousel -->
                    </section><!-- /.section -->
      </div>


      </div>
  </div>
@include('inc.sidebar')
</div>
<!-- /.row --> 

@endsection












