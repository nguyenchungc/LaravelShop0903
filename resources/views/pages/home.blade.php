@extends('layout.headerLayout')
@section('title','Trang chủ')
@section('content')

  <!-- Home Slider Start -->
  <div class="slider">
    <div class="tp-banner-container clearfix">
      <div class="tp-banner">
        <ul>
          <!-- SLIDE 1 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700">
            <!-- MAIN IMAGE -->
            <img src="source/images/slider/slider-img1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
            <!-- LAYERS -->
            <!-- LAYER NR. 1 -->
            <div class="tp-caption very_big_white skewfromrightshort fadeout" data-x="center" data-y="100" data-speed="500" data-start="1200"
              data-easing="Circ.easeInOut" style=" font-size:70px; font-weight:800; color:#fe0100;">Huge
              <span style=" color:#000;">sale</span>
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-caption medium_text skewfromrightshort fadeout" data-x="center" data-y="165" data-hoffset="0" data-voffset="-73"
              data-speed="500" data-start="1200" data-easing="Power4.easeOut" style=" font-size:20px; font-weight:500; color:#337ab7;">
            Sale off 75% all products </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="210" data-hoffset="0" data-voffset="98"
              data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
              data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
              data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="border: 2px solid #fed700;border-radius: 50px; font-size:14px; background-color:#fed700; color:#333; z-index: 12; max-width: auto; max-height: auto; white-space: nowrap; letter-spacing:1px;">
              <a href='#' class='largebtn slide1'>Learn More</a>
            </div>
          </li>

          <!-- SLIDE 2 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700">
            <!-- MAIN IMAGE -->
            <img src="source/images/slider/slider-img2.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
            <!-- LAYERS -->
            <!-- LAYER NR. 1 -->
            <div class="tp-caption white_heavy_60 customin ltl tp-resizeme" data-x="310" data-y="140" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
              data-speed="1200" data-start="700" data-easing="Power4.easeOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1"
              data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn" style=" font-size:70px; font-weight:800; color:#333;">GREAT LOOKS </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption black_thin_blackbg_30 customin ltl tp-resizeme" data-x="310" data-y="220" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
              data-speed="1500" data-start="1000" data-easing="Power4.easeInOut" data-splitin="none" data-splitout="none"
              data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn" style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">The perfect synthesis of innovative thinking </div>

            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb ltb start tp-resizeme" data-x="310" data-y="270" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
              data-speed="1500" data-start="1600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
              data-elementdelay="0.01" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">
              <a href='#' class='largebtn solid'>Get It Now!</a>
            </div>
          </li>

          <!-- SLIDE 3 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700">
            <!-- MAIN IMAGE -->
            <img src="source/images/slider/slider-img3.jpg" alt="slidebg3" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
            <!-- LAYERS -->
            <!-- LAYER NR. 1 -->
            <div class="tp-caption big_100_white lft start fadeout" data-x="310" data-y="120" data-speed="500" data-start="1200" data-easing="Circ.easeInOut"
              style=" font-size:70px; font-weight:800; color:#fff;">High</div>
            <div class="tp-caption big_100_white lft fadeout" data-x="310" data-y="180" data-speed="500" data-start="1200" data-easing="Circ.easeInOut"
              style=" font-size:50px; font-weight:800; color:#fed700;">Definition</div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-caption medium_text lfb fadeout" data-x="310" data-y="260" data-speed="500" data-start="1200" data-easing="Power4.easeOut"
              style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">Best Camera For You?</div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption fade fadeout tp-resizeme" data-x="310" data-y="320" data-hoffset="-100" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
              data-speed="1500" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
              data-elementdelay="0.01" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">
              <a href='#' class='largebtn solid'>Get It Now!</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

 <!-- main container -->
 <div class="main-container col1-layout">
    <div class="container">
      <div class="row">

        <!-- Home Tabs  -->
        <div class="col-sm-12 col-md-12 col-xs-12">
          <div class="home-tab">
            <ul class="nav home-nav-tabs home-product-tabs">
              <li class="active">
                <a href="#featured" data-toggle="tab" aria-expanded="false">Sản phẩm đặt biệt</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#top-sellers" data-toggle="tab" aria-expanded="false">Các sản phẩm đang giảm giá</a>
              </li>
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane active in" id="featured">
                <div class="featured-pro">
                  <div class="slider-items-products">
                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
                        @foreach($feature as $fea)
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="icon-new-label new-right">New</div>
                              <div class="pr-img-area">
                                <a title="Ipsums Dolors Untra" href="single_product.html">
                                  <figure>
                                  <img class="first-img" src="source/images/{{$fea->image}}" alt="html template">
                                    <img class="hover-img" src="source/images/{{$fea->image}}" alt="html template">
                                  </figure>
                                </a>
                                <button type="button" class="add-to-cart-mt">
                                  <i class="fa fa-shopping-cart"></i>
                                  <span> Add to Cart</span>
                                </button>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                <a title="Ipsums Dolors Untra" href="{{route('singleProduct')}}">{{$fea->name}} </a>
                                </div>
                                <div class="item-content">
                                  <div class="item-price">
                                    <div class="price-box">
                                      @if($fea->promotion_price == 0)

                                          <p class="special-price">
                                            <span class="price-label">Regular Price:</span>
                                            <span class="price">{{number_format($fea->price)}} </span>
                                          </p>
                                      @else
                                        <p class="special-price">
                                            <span class="price-label">Special Price</span>
                                            <span class="price">{{number_format($fea->promotion_price)}} </span>
                                          </p>
                                          <p class="old-price">
                                            <span class="price-label">Regular Price:</span>
                                            <span class="price">{{number_format($fea->price)}} </span>
                                          </p>
                                      
                                        
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="top-sellers">
                <div class="top-sellers-pro">
                  <div class="slider-items-products">
                    <div id="top-sellers-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4 ">
                        @foreach($topSeller as $top)
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="icon-new-label new-right">New</div>
                              <div class="pr-img-area">
                                <a title="Ipsums Dolors Untra" href="single_product.html">
                                  <figure>
                                    <img class="first-img" src="source/images/{{$top->image}}" alt="html template">
                                    <img class="hover-img" src="source/images/{{$top->image}}" alt="html template">
                                  </figure>
                                </a>
                                <button type="button" class="add-to-cart-mt">
                                  <i class="fa fa-shopping-cart"></i>
                                  <span> Add to Cart</span>
                                </button>
                              </div>

                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <a title="Ipsums Dolors Untra" href="single_product.html">{{$top->name}}</a>
                                </div>
                                <div class="item-content">

                                  <div class="item-price">
                                    <div class="price-box">
                                        @if($top->promotion_price == 0)

                                        <p class="special-price">
                                          <span class="price-label">Regular Price:</span>
                                          <span class="price">{{number_format($top->price)}} </span>
                                        </p>
                                    @else
                                      <p class="special-price">
                                          <span class="price-label">Special Price</span>
                                          <span class="price">{{number_format($top->promotion_price)}} </span>
                                        </p>
                                        <p class="old-price">
                                          <span class="price-label">Regular Price:</span>
                                          <span class="price">{{number_format($top->price)}} </span>
                                        </p>
                                    
                                      
                                    @endif
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end main container -->

  <!--special-products-->

  <div class="container">
    <div class="special-products">
      <div class="page-header">
        <h2>Các sản phẩm mới</h2>
      </div>
      <div class="special-products-pro">
        <div class="slider-items-products">
          <div id="special-products-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4">
              @foreach($newProduct as $new)
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumbnail">
                    <div class="icon-sale-label sale-left">Sale</div>
                    <div class="icon-new-label new-right">New</div>
                    <div class="pr-img-area">
                      <a title="Ipsums Dolors Untra" href="{{Route('singleProduct')}}">
                        <figure>
                          <img class="first-img" src="source/images/{{$new->image}}" alt="html template">
                          <img class="hover-img" src="source/images/{{$new->image}}" alt="html template">
                        </figure>
                      </a>
                      <button type="button" class="add-to-cart-mt">
                        <i class="fa fa-shopping-cart"></i>
                        <span> Add to Cart</span>
                      </button>
                    </div>

                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                      <a title="Ipsums Dolors Untra" href="{{Route('singleProduct')}}">{{$new->name}} </a>
                      </div>
                      <div class="item-content">

                        <div class="item-price">
                          <div class="price-box">
                              @if($new->promotion_price == 0)

                              <p class="special-price">
                                <span class="price-label">Regular Price:</span>
                                <span class="price">{{number_format($new->price)}} </span>
                              </p>
                          @else
                            <p class="special-price">
                                <span class="price-label">Special Price</span>
                                <span class="price">{{number_format($new->promotion_price)}} </span>
                              </p>
                              <p class="old-price">
                                <span class="price-label">Regular Price:</span>
                                <span class="price">{{number_format($new->price)}} </span>
                              </p>
                          
                            
                          @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- category area start -->
  <div class="jtv-category-area">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
         
          <div class="jtv-single-cat">
            <h2 class="cat-title">Các sản phẩm đang bán</h2>
            @foreach($oldProduct as $old)
            <div class="jtv-product">
              <div class="product-img">
                <a href="single_product.html">
                  <img src="source/images/{{$old->image}}" alt="html template">
                  <img class="secondary-img" src="source/images/{{$old->image}}" alt="html template"> </a>
              </div>
              <div class="jtv-product-content">
                <h3>
                  <a href="single_product.html">{{$old->name}}</a>
                </h3>
                <div class="price-box">
                    @if($old->promotion_price == 0)

                    <p class="special-price">
                      <span class="price-label">Regular Price:</span>
                      <span class="price">{{number_format($old->price)}} </span>
                    </p>
                @else
                  <p class="special-price">
                      <span class="price-label">Special Price</span>
                      <span class="price">{{number_format($old->promotion_price)}} </span>
                    </p>
                    <p class="old-price">
                      <span class="price-label">Regular Price:</span>
                      <span class="price">{{number_format($old->price)}} </span>
                    </p>
                
                  
                @endif
                </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button>
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="jtv-single-cat">
            <h2 class="cat-title">Sản phẩm phổ thông</h2>
            @foreach($normalProduct as $normal)
            <div class="jtv-product">
              <div class="product-img">
                <a href="single_product.html">
                  <img src="source/images/{{$normal->image}}" alt="html template">
                  <img class="secondary-img" src="source/images/{{$normal->image}}" alt="html template"> </a>
              </div>
              <div class="jtv-product-content">
                <h3>
                  <a href="single_product.html">{{$normal->name}}</a>
                </h3>
                <div class="price-box">
                    @if($normal->promotion_price == 0)

                    <p class="special-price">
                      <span class="price-label">Regular Price:</span>
                      <span class="price">{{number_format($normal->price)}} </span>
                    </p>
                @else
                  <p class="special-price">
                      <span class="price-label">Special Price</span>
                      <span class="price">{{number_format($normal->promotion_price)}} </span>
                    </p>
                    <p class="old-price">
                      <span class="price-label">Regular Price:</span>
                      <span class="price">{{number_format($normal->price)}} </span>
                    </p>
                
                  
                @endif
                </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button>
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
           @endforeach
            
          </div>
        </div>

        <!-- service area start -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="jtv-service-area">

            <!-- jtv-single-service start -->

            <div class="jtv-single-service">
              <div class="service-icon">
                <img alt="html template" src="source/images/customer-service-icon.png"> </div>
              <div class="service-text">
                <h2>24/7 customer service</h2>
                <p>
                  <span>Call us 24/7 at 000 - 123 - 456</span>
                </p>
              </div>
            </div>
            <div class="jtv-single-service">
              <div class="service-icon">
                <img alt="html template" src="source/images/shipping-icon.png"> </div>
              <div class="service-text">
                <h2>free shipping worldwide</h2>
                <p>
                  <span>On order over $199 - 7 days a week</span>
                </p>
              </div>
            </div>
            <div class="jtv-single-service">
              <div class="service-icon">
                <img alt="html template" src="source/images/guaratee-icon.png"> </div>
              <div class="service-text">
                <h2>money back guaratee!</h2>
                <p>
                  <span>Send within 30 days</span>
                </p>
              </div>
            </div>

            <!-- jtv-single-service end -->

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- category-area end -->

@endsection