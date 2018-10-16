@extends('master')
@section('content')      
 <div id="pageContent" class="starthide">
      <!-- BEGIN content_for_index -->
      <div id="shopify-section-1480804468506" class="shopify-section index-section">
        <div class="tp-banner-container content" data-section-id="1480804468506" data-section-type="slideshow-section">
          <div class="tp-banner-1480804468506" data-speed="16000" data-fullscreen="on" data-startheight="800">
            <ul>
              @foreach ($slides as $slide )
              <!-- SLIDE -->
              <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide">
                <!-- MAIN IMAGE -->
                <img src="image/{{ $slide->image }}" alt="" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat">
                <div class="tp-caption lfb stb" data-x="center" data-y="center" data-voffset="0" data-hoffset="0" data-speed="600" data-start="900" data-easing="Power4.easeOut" data-endeasing="Power4.easeIn" style="z-index: 2;">
                  <div class="tp-caption3--wd-2" style="color:#ff0000">{{ $slide->name }}
                  </div>
                  <div class="tp-caption3--wd-3" style="color:#ff0000">{{ $slide->category }}
                  </div>
                  <div class="tp-caption3--wd-3" style="color:#ff0000">{{ $slide->sale }}
                  </div>
                  <div class="text-center"> 
                    <a href="collections/accessories.html" class="link-button button--border-thick" data-text="Shop now!">Shop now!
                    </a> 
                  </div>
                </div>
              </li>
              <!-- /SLIDE -->
              @endforeach
            </ul>
          </div>
        </div>
      </div>
   <!-- listing section -->
  @include('page/listing')
  <!-- END listing section -->
      <div id="shopify-section-1480804649554" class="shopify-section index-section">
        <!-- featured products -->
        <section class="content" data-section-id="1480804649554" data-section-type="featuredproducts-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-xl-12">
                <div class="title-box">
                  <h2 class="text-left text-uppercase title-under">FEATURED PRODUCTS
                  </h2> 
                </div>
                <!-- /title -->
                <div class="product-listing carousel-products-mobile row featprod-js-1480804649554">
                  @foreach($products as $product)
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                      <!-- product -->
                      <div class="product product--zoom smallproduct 31530889420">
                        <div class="product__inside">
                          <!-- product image -->
                          <div class="product__inside__image">
                            <a href="{{ route('productTitle',$product->id) }}"> 
                              <img src="image/products/{{ $product->image }}" alt="" /> 
                            </a> 
                            <a href="javascript:void(0);" onclick="quiqview('boyfriend-shirt')" class="quick-view">
                              <b>
                                <span class="icon icon-visibility">
                                </span> Quick View
                              </b>
                            </a> 
                          </div>
                          <!-- /product image -->
                          <!-- label news -->
                          <!-- /label news -->
                          <!-- label sale -->
                          @if($product->price_sale!=0)
                          <div class="product__label product__label--left product__label--sale">
                            <span>Sale
                              <br>
                            </span> 
                          </div>
                          @endif
                          <!-- /label sale -->
                          <!-- product name -->
                          <div class="product__inside__name">
                            <h2 class="product_title">
                              <a href="products/boyfriend-shirt.html">{{ $product->name }}
                              </a>
                            </h2> 
                          </div>
                          <!-- /product name -->
                          <!-- product description -->
                          <!-- visible only in row-view mode -->
                          <div class="product__inside__description row-mode-visible">{{ $product->descriptions_sort }}
                          </div>
                          <!-- /product description -->
                          <!-- product price -->
                          <div class="product__inside__price price-box">
                            @if($product->price_sale==0)
                            <span class=money>{{ $product->price_out }}
                            </span>
                            @else
                              <span class=money>{{ $product->price_sale}}
                              </span>
                              <span class="price-box__old">
                                <span class=money>{{ $product->price_out }}
                                </span>
                              </span>
                            @endif
                          </div>
                          <!-- /product price -->
                          <!-- product review -->
                          <!-- visible only in row-view mode -->
                          <div class="product__inside__review row-mode-visible">
                            <div class="rating row-mode-visible">
                              <span class="shopify-product-reviews-badge" data-id="9097937292">
                              </span> 
                            </div>
                          </div>
                          <!-- /product review -->
                          <div class="product__inside__hover">
                            <!-- product info -->
                            <div class="product__inside__info">
                              <div class="product__inside__info__btns"> 
                                <a href="javascript:void(0);" onclick="Shopify.addItem(31530889420, 1); return false;" class="btn btn--ys btn--xl addtocart-js">
                                  <span class="icon icon-shopping_basket">
                                  </span> Add to Cart
                                </a> 
                                <a href="javascript:void(0);" onclick="quiqview('boyfriend-shirt')" class="btn btn--ys btn--xl  row-mode-visible hidden-xs">
                                  <span class="icon icon-visibility">
                                  </span> Quick View
                                </a> 
                              </div>
                              <div class="custom__info__link hidden-xs">
                              </div>
                            </div>
                            <!-- /product info -->
                            <!-- product rating -->
                            <div class="rating row-mode-hide">
                              <span class="shopify-product-reviews-badge" data-id="9097937292">
                              </span> 
                            </div>
                            <!-- /product rating -->
                          </div>
                        </div>
                      </div>
                      <!-- /product -->
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end featured products -->
      </div>
      <div id="shopify-section-1480804703531" class="shopify-section index-section">
        <!--=== box-baners ===-->
        <section class="content container-fluid box-baners resize-js-1480804703531" data-section-id="1480804703531" data-section-type="resize-section">
          <div class="row">
            <!-- col-left -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!-- banner -->
              <a href="collections/accessories.html" class="banner zoom-in"> 
                <span class="figure">
                  <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/img10_1024x1024f06f.jpg?v=1481310095" alt="">
                  <span class="figcaption text-left">
                    <span class="block-table">
                      <span class="block-table-cell">
                        <span class="block font-size82 font-bold text1-1">15% OFF
                        </span> 
                        <span class="block font-size26 font-normal text2-1 empty-style">SEASON ESSENTIALS!
                        </span> 
                        <em class="link-btn-20 main-font btn-color-1">Shop now! 
                          <span class="icon icon-navigate_next">
                          </span>
                        </em> 
                      </span>
                    </span>
                  </span>
                </span>
              </a>
              <!-- /banner -->
            </div>
            <!-- col-left -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!-- banner -->
              <a href="collections/women-s.html" class="banner zoom-in"> 
                <span class="figure">
                  <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/img11_1024x10246048.jpg?v=1481310211" alt="">
                  <span class="figcaption text-left">
                    <span class="block-table">
                      <span class="block-table-cell">
                        <span class="block font-size82 font-bold text1-2">NEW
                        </span> 
                        <span class="block font-size26 font-normal text2-2 empty-style">SEASON ESSENTIALS!
                        </span> 
                        <em class="link-btn-20 main-font btn-color-2">Shop now! 
                          <span class="icon icon-navigate_next">
                          </span>
                        </em> 
                      </span>
                    </span>
                  </span>
                </span>
              </a>
              <!-- /banner -->
            </div>
            <!-- col-left -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!-- banner -->
              <a href="collections/accessories.html" class="banner zoom-in"> 
                <span class="figure">
                  <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/img12_1024x10249970.jpg?v=1481310353" alt="">
                  <span class="figcaption text-left">
                    <span class="block-table">
                      <span class="block-table-cell">
                        <span class="block font-size82 font-bold text1-3">HATS
                        </span> 
                        <span class="block font-size26 font-medium text2-3 empty-style">NEW COLLECTION
                        </span> 
                        <em class="link-btn-20 main-font btn-color-3">Shop now! 
                          <span class="icon icon-navigate_next">
                          </span>
                        </em> 
                      </span>
                    </span>
                  </span>
                </span>
              </a>
              <!-- /banner -->
            </div>
            <!-- col-left -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!-- banner -->
              <a href="collections/men-s.html" class="banner zoom-in"> 
                <span class="figure">
                  <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/img13_1024x1024d1c9.jpg?v=1481310403" alt="">
                  <span class="figcaption">
                    <span class="block-table">
                      <span class="block-table-cell">
                        <span class="block font-size26 font-normal text1-4">A GREAT SELECTION OF
                        </span> 
                        <span class="block font-size82 font-bold text2-4 empty-style">SUPERB BRANDS
                        </span> 
                        <span class="btn btn--border btn--xl btn-color-4">Shop now!
                        </span> 
                      </span>
                    </span>
                  </span>
                </span>
              </a>
              <!-- /banner -->
            </div>
          </div>
        </section>
      </div>
      <div id="shopify-section-1480804823444" class="shopify-section index-section">
        <!-- news & sale products -->
        <section class="content" data-section-id="1480804823444" data-section-type="slidersgroup-section">
          <div class="container">
            <div class="row sliderblock-1480804823444" data-showproducts="6">
              <div class="col-sm-12 col-md-12 col-xl-12">
                <div class="title-with-button">
                  <div class="carousel-products__button pull-right"> 
                    <span class="btn-prev">
                    </span> 
                    <span class="btn-next">
                    </span> 
                  </div>
                  <h2 class="text-left text-uppercase title-under pull-left">Special PRODUCTS
                  </h2> 
                </div>
                <div class="carousel-products row carousel-small" data-autoplay="false" data-speed="7000" data-step="3">
                  @foreach($products as $product)
                    @if($product->price_sale!=0)
                    <div class="col-lg-3">
                      <!-- product -->
                      <div class="product 31530898636">
                        <div class="product__inside">
                          <!-- product image -->
                          <div class="product__inside__image">
                            <a href="{{ route('productTitle',$product->id) }}"> 
                              <img src="image/products/{{ $product->image}}" alt="Black Cap" /> 
                            </a> 
                            <a href="javascript:void(0);" onclick="quiqview('black-cap')" class="quick-view">
                              <b>
                                <span class="icon icon-visibility">
                                </span> Quick View
                              </b>
                            </a> 
                          </div>
                          <!-- /product image -->
                          <!-- label news -->
                          <!-- /label news -->
                          <!-- label sale -->
                          <!-- /label sale -->
                          <!-- product name -->
                          <div class="product__inside__name">
                            <h2 class="product_title">
                              <a href="products/black-cap.html">Black Cap
                              </a>
                            </h2> 
                          </div>
                          <!-- /product name -->
                          <!-- product description -->
                          <!-- visible only in row-view mode -->
                          <div class="product__inside__description row-mode-visible">{{ $product->descriptions_sort}} 
                          </div>
                          <!-- /product description -->
                          <!-- product price -->
                          <div class="product__inside__price price-box baseprice">
                            <span class=money>{{ $product->price_sale}}
                            </span> 
                          </div>
                          <!-- /product price -->
                          <!-- product review -->
                          <!-- visible only in row-view mode -->
                          <div class="product__inside__review row-mode-visible">
                            <div class="rating row-mode-visible">
                              <span class="shopify-product-reviews-badge" data-id="9097940108">
                              </span> 
                            </div>
                          </div>
                          <!-- /product review -->
                          <div class="product__inside__hover">
                            <!-- product info -->
                            <div class="product__inside__info">
                              <div class="product__inside__info__btns"> 
                                <a href="javascript:void(0);" onclick="Shopify.addItem(31530898636, 1); return false;" class="btn btn--ys btn--xl addtocart-js">
                                  <span class="icon icon-shopping_basket">
                                  </span> Add to Cart
                                </a> 
                                <a href="javascript:void(0);" onclick="quiqview('black-cap')" class="btn btn--ys btn--xl  row-mode-visible hidden-xs">
                                  <span class="icon icon-visibility">
                                  </span> Quick View
                                </a> 
                              </div>
                              <div class="custom__info__link hidden-xs">
                              </div>
                            </div>
                            <!-- /product info -->
                            <!-- product rating -->
                            <div class="rating row-mode-hide">
                              <span class="shopify-product-reviews-badge" data-id="9097940108">
                              </span> 
                            </div>
                            <!-- /product rating -->
                          </div>
                        </div>
                      </div>
                      <!-- /product -->
                    </div>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div id="shopify-section-1480804899321" class="shopify-section index-section">
        <section class="content section-indent-bottom container-fluid fill-bg" data-section-id="1480804899321" data-section-type="brands-section">
          <div class="container">
            <div class="row">
              <div class="brands-carousel brands-carousel-js-1480804899321" data-autoplay="true" data-speed="10000" data-step="1">
                <div>
                  <a href="#"> 
                    <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/brand_large7b6d.png?v=1535807565" alt=""> 
                  </a>
                </div>
                <div>
                  <a href="#"> 
                    <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/brand-1_large87c7.png?v=1535807574" alt=""> 
                  </a>
                </div>
                <div>
                  <a href="#"> 
                    <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/brand-2_large59ca.png?v=1535807588" alt=""> 
                  </a>
                </div>
                <div>
                  <a href="#"> 
                    <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/Brand-3_largefa9d.png?v=1535807609" alt=""> 
                  </a>
                </div>
                <div>
                  <a href="#"> 
                    <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/Brand-4_largeb1bc.png?v=1535807620" alt=""> 
                  </a>
                </div>
                <div>
                  <a href="#"> 
                    <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/Brand-5_large8abc.png?v=1535807645" alt=""> 
                  </a>
                </div>
                <div>
                  <a href="#"> 
                    <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/brand-6_large4d22.png?v=1535807752" alt=""> 
                  </a>
                </div>
                <div>
                  <a href="#"> 
                    <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/brand-7_large5e6a.png?v=1535807762" alt=""> 
                  </a>
                </div>
                <div>
                  <a href="#"> 
                    <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/brand-8_largedbf0.png?v=1535807771" alt=""> 
                  </a>
                </div>
                <div>
                  <a href="#"> 
                    <img src="source/cdn.shopify.com/s/files/1/1637/5229/files/brand-9_large224c.png?v=1535807780" alt=""> 
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div id="shopify-section-1480804987566" class="shopify-section index-section">
        <!-- recent-posts-carousel -->
        <section class="content" data-section-id="1480804987566" data-section-type="blogslider-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- title -->
                <div class="title-with-button">
                  <div class="carousel-products__button pull-right"> 
                    <span class="btn-prev">
                    </span> 
                    <span class="btn-next">
                    </span> 
                  </div>
                  <h2 class="text-center text-uppercase title-under">Latest news
                  </h2> 
                </div>
                <!-- /title -->
                <!-- carousel-new -->
                <div class="carousel-products row postscarousel-js-1480804987566" id="postsCarousel" data-autoplay="true" data-speed="7000" data-step="2" data-showproducts="4">
                  <!-- slide-->
                  <div class="col-sm-3 col-xl-12">
                    <!--  -->
                    <div class="recent-post-box">
                      <div class="col-lg-12 col-xl-12"> 
                        <a href="blogs/news/mauris-lacinia-lectus-6.html">
                          <span class="figure">
                            <img src="source/cdn.shopify.com/s/files/1/1637/5229/articles/blog8_1024x1024e0c7.jpg?v=1481316680" alt="Mauris Lacinia Lectus">
                            <span class="figcaption label-top-left">
                              <span>
                                <b>09
                                </b>
                                <em>dec
                                </em>
                              </span>
                            </span>
                          </span>
                        </a> 
                      </div>
                      <div class="col-lg-12 col-xl-12">
                        <div class="recent-post-box__text">
                          <h4>
                            <a href="blogs/news/mauris-lacinia-lectus-6.html">Mauris Lacinia Lectus
                            </a>
                          </h4>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque.
                          </p> 
                          <a class="link-commet" href="blogs/news/mauris-lacinia-lectus-6.html#addcomment">
                            <span class="icon icon-message ">
                            </span>
                            <span class="number">0
                            </span> comment(s)
                          </a> 
                        </div>
                      </div>
                    </div>
                    <!-- / -->
                  </div>
                  <!-- /slide -->
                  <!-- slide-->
                  <div class="col-sm-3 col-xl-12">
                    <!--  -->
                    <div class="recent-post-box">
                      <div class="col-lg-12 col-xl-12"> 
                        <a href="blogs/news/mauris-lacinia-lectus-5.html">
                          <span class="figure">
                            <img src="source/cdn.shopify.com/s/files/1/1637/5229/articles/blog1_1024x1024b4c6.jpg?v=1481316604" alt="Mauris Lacinia Lectus">
                            <span class="figcaption label-top-left">
                              <span>
                                <b>09
                                </b>
                                <em>dec
                                </em>
                              </span>
                            </span>
                          </span>
                        </a> 
                      </div>
                      <div class="col-lg-12 col-xl-12">
                        <div class="recent-post-box__text">
                          <h4>
                            <a href="blogs/news/mauris-lacinia-lectus-5.html">Mauris Lacinia Lectus
                            </a>
                          </h4>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque.
                          </p> 
                          <a class="link-commet" href="blogs/news/mauris-lacinia-lectus-5.html#addcomment">
                            <span class="icon icon-message ">
                            </span>
                            <span class="number">0
                            </span> comment(s)
                          </a> 
                        </div>
                      </div>
                    </div>
                    <!-- / -->
                  </div>
                  <!-- /slide -->
                  <!-- slide-->
                  <div class="col-sm-3 col-xl-12">
                    <!--  -->
                    <div class="recent-post-box">
                      <div class="col-lg-12 col-xl-12"> 
                        <a href="blogs/news/mauris-lacinia-lectus-7.html">
                          <span class="figure">
                            <img src="source/cdn.shopify.com/s/files/1/1637/5229/articles/blog6_1024x1024b57f.jpg?v=1481316711" alt="Mauris Lacinia Lectus">
                            <span class="figcaption label-top-left">
                              <span>
                                <b>09
                                </b>
                                <em>dec
                                </em>
                              </span>
                            </span>
                          </span>
                        </a> 
                      </div>
                      <div class="col-lg-12 col-xl-12">
                        <div class="recent-post-box__text">
                          <h4>
                            <a href="blogs/news/mauris-lacinia-lectus-7.html">Mauris Lacinia Lectus
                            </a>
                          </h4>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque.
                          </p> 
                          <a class="link-commet" href="blogs/news/mauris-lacinia-lectus-7.html#addcomment">
                            <span class="icon icon-message ">
                            </span>
                            <span class="number">0
                            </span> comment(s)
                          </a> 
                        </div>
                      </div>
                    </div>
                    <!-- / -->
                  </div>
                  <!-- /slide -->
                  <!-- slide-->
                  <div class="col-sm-3 col-xl-12">
                    <!--  -->
                    <div class="recent-post-box">
                      <div class="col-lg-12 col-xl-12"> 
                        <a href="blogs/news/mauris-lacinia-lectus-1.html">
                          <span class="figure">
                            <img src="source/cdn.shopify.com/s/files/1/1637/5229/articles/blog7_1024x1024e58d.jpg?v=1481316484" alt="Mauris Lacinia Lectus">
                            <span class="figcaption label-top-left">
                              <span>
                                <b>09
                                </b>
                                <em>dec
                                </em>
                              </span>
                            </span>
                          </span>
                        </a> 
                      </div>
                      <div class="col-lg-12 col-xl-12">
                        <div class="recent-post-box__text">
                          <h4>
                            <a href="blogs/news/mauris-lacinia-lectus-1.html">Mauris Lacinia Lectus
                            </a>
                          </h4>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque.
                          </p> 
                          <a class="link-commet" href="blogs/news/mauris-lacinia-lectus-1.html#addcomment">
                            <span class="icon icon-message ">
                            </span>
                            <span class="number">0
                            </span> comment(s)
                          </a> 
                        </div>
                      </div>
                    </div>
                    <!-- / -->
                  </div>
                  <!-- /slide -->
                  <!-- slide-->
                  <div class="col-sm-3 col-xl-12">
                    <!--  -->
                    <div class="recent-post-box">
                      <div class="col-lg-12 col-xl-12"> 
                        <a href="blogs/news/mauris-lacinia-lectus-4.html">
                          <span class="figure">
                            <img src="source/cdn.shopify.com/s/files/1/1637/5229/articles/blog4_30121018-2a35-4ded-933d-b9ba1230f1d8_1024x1024bc88.jpg?v=1481316478" alt="Mauris Lacinia Lectus">
                            <span class="figcaption label-top-left">
                              <span>
                                <b>03
                                </b>
                                <em>dec
                                </em>
                              </span>
                            </span>
                          </span>
                        </a> 
                      </div>
                      <div class="col-lg-12 col-xl-12">
                        <div class="recent-post-box__text">
                          <h4>
                            <a href="blogs/news/mauris-lacinia-lectus-4.html">Mauris Lacinia Lectus
                            </a>
                          </h4>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque.
                          </p> 
                          <a class="link-commet" href="blogs/news/mauris-lacinia-lectus-4.html#addcomment">
                            <span class="icon icon-message ">
                            </span>
                            <span class="number">0
                            </span> comment(s)
                          </a> 
                        </div>
                      </div>
                    </div>
                    <!-- / -->
                  </div>
                  <!-- /slide -->
                  <!-- slide-->
                  <div class="col-sm-3 col-xl-12">
                    <!--  -->
                    <div class="recent-post-box">
                      <div class="col-lg-12 col-xl-12"> 
                        <a href="blogs/news/mauris-lacinia-lectus-3.html">
                          <span class="figure">
                            <img src="source/cdn.shopify.com/s/files/1/1637/5229/articles/blog5_1024x1024d9a6.jpg?v=1481316363" alt="Mauris Lacinia Lectus">
                            <span class="figcaption label-top-left">
                              <span>
                                <b>03
                                </b>
                                <em>dec
                                </em>
                              </span>
                            </span>
                          </span>
                        </a> 
                      </div>
                      <div class="col-lg-12 col-xl-12">
                        <div class="recent-post-box__text">
                          <h4>
                            <a href="blogs/news/mauris-lacinia-lectus-3.html">Mauris Lacinia Lectus
                            </a>
                          </h4>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque.
                          </p> 
                          <a class="link-commet" href="blogs/news/mauris-lacinia-lectus-3.html#addcomment">
                            <span class="icon icon-message ">
                            </span>
                            <span class="number">0
                            </span> comment(s)
                          </a> 
                        </div>
                      </div>
                    </div>
                    <!-- / -->
                  </div>
                  <!-- /slide -->
                </div>
                <!-- /carousel-new -->
              </div>
            </div>
          </div>
        </section>
        <!-- /recent-posts-carousel -->
        <style>
          @media (min-width: 1770px) {
            [data-section-id~="1480804987566"] .recent-post-box p {
              padding-right: 15px;
            }
            [data-section-id~="1480804987566"] .recent-post-box > div:last-child {
              padding-left: 0 !important;
            }
          }
        </style>
      </div>
      <div id="shopify-section-1480805417605" class="shopify-section index-section">
        <section class="content" data-section-id="1480805417605" data-section-type="collectionslider-section">
          <div class="container">
            <div class="row">
              <div class="category-carousel category-carousel-js-1480805417605" data-autoplay="false" data-speed="7000" data-step="1">
                <div class="col-sm-4 col-md-4 col-lg-4 block-child designtype2">
                  <a href="#" class="promo-design3">
                    <div>
                      <div class="block-title text1color">Order Return
                      </div>
                      <div class="block text-uppercase font-lighter block-top-11 text2color">Returns within
                      </div>
                      <div class="block color-base main-font font-size46 font-style-italic text3color">7 days
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 block-child designtype2">
                  <a href="#" class="promo-design3">
                    <div>
                      <div class="block-title color-base text1color">Free shipping
                      </div>
                      <div class="block text-uppercase font-lighter color-dark font-size24 block-top-11 text2color">on orders over $99.
                      </div>
                      <div class="block main-font font-style-italic  font-size16 block-top-23 text3color">This offer is valid on all our store items.
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 block-child designtype2">
                  <a href="#" class="promo-design3">
                    <div>
                      <div class="block-title  block-top-15 text2color">Cash on delivery
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- END content_for_index -->
    </div>
    
    @endsection