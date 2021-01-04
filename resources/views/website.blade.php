@extends('layouts.frontapp')
@section('content')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        @include('inc.frontslider')
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">নতুন প্রডাক্ট</h3>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">
            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

            @php
              $product_data = DB::table('products')->get();
            @endphp

            @foreach($product_data as $product_row)         
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{ url('product_details/'.$product_row->id) }}">
                              <img  src="{{ asset($product_row->image1) }}" alt="">
                            </a> 
                          </div>
                          <!-- /.image -->
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 style="font-size: 20px;" class="name">
                            <a href="{{ url('product_details/'.$product_row->id) }}" style="color: #05a70a">{{ $product_row->product_name }}</a>
                          </h3>
                          <div class="description">
                            {{ Str::limit($product_row->description, 50) }}
                          </div>
                          <div class="product-price"> <span class="price"> ৳ {{ $product_row->price }} </span></div>
                          <!-- /.product-price --> 
                        </div>



                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">

                              <li class="add-cart-button btn-group">
                                <a href="{{ url('product_details/'.$product_row->id) }}" class="btn btn-primary icon" type="button"><i class="fa fa-shopping-cart"></i>
                                </a>
                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                  @endforeach
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content --> 
        </div>
        <!-- /.scroll-tabs --> 
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            @php
              $banner = DB::table('banners')->limit(1)->orderBy('id', 'DESC')->where('status','1')->get();
            @endphp

            @foreach($banner as $banner_row)
            <!-- /.col -->
            <div class="col-md-12 col-sm-12">
              <div class="wide-banner cnt-strip">
                <div style="height: 250px; width: 847.5px" class="image"> <img class="img-responsive" src="{{ asset($banner_row->image) }}" alt="">
                </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
            @endforeach
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 



        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section wow fadeInUp new-arriavls">
          <h3 class="section-title">বেস্ট সেলিং প্রডাক্ট</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{ asset('public/frontend/images/products/p19.jpg') }}" alt=""></a> </div>
                    <!-- /.image -->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{ asset('public/frontend/images/products/p28.jpg') }}" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{ asset('public/frontend/images/products/p30.jpg') }}" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{ asset('public/frontend/images/products/p1.jpg') }}" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{ asset('public/frontend/images/products/p2.jpg') }}" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{ asset('public/frontend/images/products/p3.jpg') }}" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 



        <!-- ============================================== BLOG SLIDER ============================================== -->

        @php
          $all_blog = DB::table('blogs')->where('status', 1)->get();
        @endphp
        <section class="section latest-blog outer-bottom-vs wow fadeInUp">
          <h3 class="section-title">নতুন ব্লগ পোস্ট</h3>
          <div class="blog-slider-container outer-top-xs">
            <div class="owl-carousel blog-slider custom-carousel">


              @foreach($all_blog as $blog_row)
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="{{ url('blog_details/'.$blog_row->id) }}"><img src="{{ asset($blog_row->image) }}" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name">
                      <a href="#">{{ $blog_row->title }}</a>
                    </h3>
                    <span class="info">By Jone Doe &nbsp;|&nbsp; {{ $blog_row->created_at }}</span>
                    <p class="text">{{ $blog_row->description }}</p>
                    <a href="{{ url('blog_details/'.$blog_row->id) }}" class="lnk btn btn-primary">Read more</a>
                  </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>

              @endforeach
              <!-- /.item -->
              
            </div>
            <!-- /.owl-carousel --> 
          </div>
          <!-- /.blog-slider-container --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== BLOG SLIDER : END ============================================== --> 
        
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== -->


      @include('inc.sidebar')
    </div>
    <!-- /.row --> 
    
@endsection












