@extends('master')
@section('content')
    <section class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb--ys pull-left">
                <li class="home-link">
                    <a href="{{ route('index') }}" class="icon icon-home"></a>
                </li>
                <li><a href="{{ route('collection_women') }}" title="">Products</a>
                </li>
                <li><span>{{ $sanpham->name }}</span>
                </li>
            </ol>
        </div>
    </section>
    <div id="pageContent" class="starthide">
        <section class="content offset-top-0">
            <div class="container">
                <div class="row product-info-outer">
                    <div id="productPrevNext" class="hidden-xs hidden-sm">
                        <a href="../collections/accessories/products/black-cap.html" class="product-prev"> <img src="image/products/{{ $sanpham->image }}" alt="Black Cap" /> </a>
                        <a href="../collections/accessories/products/black-large.html" class="product-next"> <img src="image/products/{{ $sanpham->image }}" alt="Black Large" /> </a>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 hidden-xs">
                                <div class="product-main-image">
                                    <div class="product-main-image__item"> 
                                        <img class="product-zoom" id="bigImg" src="{{asset('image/')}}/products/{{ $sanpham->image }}" zoom-image="{{asset('image/')}}/products/{{ $sanpham->image }}" alt="Black Coffee Belt" /> 
                                    </div>
                                    <div class="product-main-image__zoom"></div>
                                </div>
                                <div class="product-images-carousel">
                                    <ul id="smallGallery" >
                                        @foreach($image_products as $image_product)
                                            <li>
                                                <a href="#" data-image="{{asset('image/')}}/products/{{ $image_product->image }}" data-zoom-image="{{asset('image/')}}/products/{{ $image_product->image }}"> <img src="{{asset('image/')}}/products/{{ $image_product->image }}" alt="Bright White Shoes"></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="wrapper hidden-xs">
                                    <div class="product-info__sku pull-left">SKU: <strong class="sku"></strong>
                                    </div>
                                    <div class="product-info__availability pull-right">Availability: <strong class="color ">Many in stock</strong>
                                    </div>
                                </div>
                                <div class="product-info__title">
                                    <h2>{{ $sanpham->name}}</h2> </div>
                                <div class="wrapper visible-xs">
                                    <div class="product-info__sku pull-left">SKU: <strong class="sku"></strong>
                                    </div>
                                    <div class="product-info__availability pull-right">Availability: <strong class="color">Many in stock</strong>
                                    </div>
                                </div>
                                <div class="visible-xs">
                                    <div class="clearfix"></div>
                                    <ul id="mobileGallery">
                                        <li><img src="../../cdn.shopify.com/s/files/1/1637/5229/products/BODY_SHAPING_LEGGINGS_1024x10249df3.jpg?v=1481123971" alt="" />
                                        </li>
                                        <li><img src="../../cdn.shopify.com/s/files/1/1637/5229/products/BODY_SHAPING_LEGGINGS_1_1024x1024ff50.jpg?v=1481123973" alt="" />
                                        </li>   
                                        <li><img src="../../cdn.shopify.com/s/files/1/1637/5229/products/BODY_SHAPING_LEGGINGS_2_1024x1024ed5e.jpg?v=1481123976" alt="" />
                                        </li>
                                        <li><img src="../../cdn.shopify.com/s/files/1/1637/5229/products/BODY_SHAPING_LEGGINGS_3_1024x1024f7b3.jpg?v=1481123977" alt="" />
                                        </li>
                                    </ul> 
                                </div>
                                <div class="price-box product-info__price">
                                    @if($sanpham->price_sale==0)
                                        <span class=money>{{ $sanpham->price_out }}
                                        </span>
                                        @else
                                          <span class=money>{{ $sanpham->price_sale}}
                                          </span>
                                          <span class="price-box__old">
                                            <span class=money>{{ $sanpham->price_out }}
                                            </span>
                                          </span>
                                    @endif
                                </div>
                                <div class="product-info__review">
                                    <div class="rating"><span class="shopify-product-reviews-badge" data-id="9097940044"></span>
                                    </div>
                                </div>
                                <div class="divider divider--xs product-info__divider hidden-xs"></div>
                                <div class="product-info__description">
                                    <div class="product-info__description__brand"><img src="../../cdn.shopify.com/s/files/1/1020/0405/files/brandb343.png?10631915041598488553" alt="">
                                    </div>
                                    <div class="product-info__description__text">{{ $sanpham->descriptions_sort }}</div>
                                </div>
                                <div class="divider divider--xs product-info__divider divider_alarm" style="display:none"></div>
                                <div class="product_message_alarm" style="display:none"> <span class="color-red"><span class="font35 font-lighter percent_parent"><span class="percent">0</span>% Off.</span> Hurry, there are only <span class="update_quantity_not_delete">-8</span> item(s) left!</span>
                                    <br>
                                    <br> </div>
                                <!-- countdown_box -->
                                <div class="divider divider--xs product-info__divider"></div>
                                <form id="add-item-form" action="https://fashop-default.myshopify.com/cart/add" method="post">
                                    <input type="hidden" name="id" value="31530898572" />
                                    <div class="divider divider--sm"></div>
                                    <div class="wrapper">
                                        <div class="pull-left"><span class="qty-label">QTY:</span>
                                        </div>
                                        <div class="pull-left">
                                            <input type="text" name="quantity" class="input--ys qty-input pull-left" value="1">
                                        </div>
                                        <div class="pull-left">
                                            <button type="submit" class="btn btn--ys btn--xxl addtocart"><span class="icon icon-shopping_basket"></span> Add to Cart</button>
                                        </div>
                                    </div>
                                    <script>
                                        jQuery('.addtocart').click(function(e) {
                                            e.preventDefault();
                                            Shopify.addItemFromFormStart('add-item-form', 9097940044);
                                        });
                                    </script>
                                </form>
                                <ul class="product-link"> </ul>
                                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                    <a class="addthis_button_preferred_1"></a>
                                    <a class="addthis_button_preferred_2"></a>
                                    <a class="addthis_button_preferred_3"></a>
                                    <a class="addthis_button_preferred_4"></a>
                                    <a class="addthis_button_compact"></a>
                                    <a class="addthis_counter addthis_bubble_style"></a>
                                </div>
                                <script type='text/javascript'>
                                    var addthis_product = 'sfy-2.0.2';
                                    var addthis_plugin_info = {
                                        "info_status": "enabled",
                                        "cms_name": "Shopify",
                                        "cms_version": null,
                                        "plugin_name": "AddThis Sharing Tool",
                                        "plugin_version": "2.0.2",
                                        "plugin_mode": "AddThis"
                                    };
                                    var addthis_config = { /*AddThisShopify_config_begins*/
                                        pubid: 'xa-525fbbd6215b4f1a',
                                        button_style: 'style3',
                                        services_compact: '',
                                        ui_delay: 0,
                                        ui_click: false,
                                        ui_language: '',
                                        data_track_clickback: true,
                                        data_ga_tracker: '',
                                        custom_services: '',
                                        custom_services_size: true /*AddThisShopify_config_ends*/
                                    };
                                </script>
                                <script type='text/javascript' src='../../s7.addthis.com/js/300/addthis_widget.js#pubid=xa-525fbbd6215b4f1a'></script>
                            </div>
                        </div>
                        <div class="row content">
                            <ul class="nav nav-tabs nav-tabs--ys1" role="tablist">
                                <li class="active"> <a href="#Tab1" role="tab" data-toggle="tab" class="text-uppercase">Description</a> </li>
                                <li> <a href="#Tab2" role="tab" data-toggle="tab" class="text-uppercase">Custom Tab</a> </li>
                                <li> <a href="#Tab3" role="tab" data-toggle="tab" class="text-uppercase">SIZING GUIDE</a> </li>
                                <li> <a href="#Tab4" role="tab" data-toggle="tab" class="text-uppercase">TAGS</a> </li>
                                <li> <a href="#Tab5" role="tab" data-toggle="tab" class="text-uppercase">REVIEWS</a> </li>
                            </ul>
                            <div class="tab-content tab-content--ys">
                                <div role="tabpanel" class="tab-pane active" id="Tab1">
                                    <p>{{ $sanpham->descriptions_long }}</p>
                                    <div class="divider divider--md"></div>
                                    <table class="table table-params">
                                        <tbody>
                                            <tr>
                                                <td class="text-right"><span class="color">PROOF</span>
                                                </td>
                                                <td>PDF Proof</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><span class="color">SAMPLES</span>
                                                </td>
                                                <td>Digital, Printed</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><span class="color">WRAPPING</span>
                                                </td>
                                                <td>Yes, No</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><span class="color">UV GLOSS COATING</span>
                                                </td>
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><span class="color">SHRINK WRAPPING</span>
                                                </td>
                                                <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><span class="color">WEIGHT</span>
                                                </td>
                                                <td>0.05, 0.06, 0.07ess cards</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="Tab2">
                                    <h5><strong class="color text-uppercase">Lorem ipsum dolor sit amet conse ctetur adipisicing elit</strong></h5>
                                    <div class="divider divider--xs"></div>
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. orem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    <ul class="marker-list-circle">
                                        <li><span class="text-uppercase">Lorem ipsum dolor sit amet</span>
                                        </li>
                                        <li><span class="text-uppercase">Conse ctetur adipisicing</span>
                                        </li>
                                        <li><span class="text-uppercase">Elit sed do eiusmod tempor</span>
                                        </li>
                                        <li><span class="text-uppercase">Incididunt ut laborev</span>
                                        </li>
                                        <li><span class="text-uppercase">Et dolore magna aliqua</span>
                                        </li>
                                        <li><span class="text-uppercase">Ut enim ad min</span>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="Tab3">
                                    <h5><strong class="color text-uppercase">Clothing - Single Size Conversion (Continued)</strong></h5>
                                    <div class="divider divider--xs"></div>
                                    <div class="table-responsive">
                                        <table class="table table-params">
                                            <tbody>
                                                <tr>
                                                    <td class="text-right"><span class="color">UK</span>
                                                    </td>
                                                    <td>
                                                        <ul class="sizes-row">
                                                            <li>18</li>
                                                            <li>20</li>
                                                            <li>22</li>
                                                            <li>24</li>
                                                            <li>26</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><span class="color">European</span>
                                                    </td>
                                                    <td>
                                                        <ul class="sizes-row">
                                                            <li>46</li>
                                                            <li>48</li>
                                                            <li>50</li>
                                                            <li>52</li>
                                                            <li>54</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><span class="color">US</span>
                                                    </td>
                                                    <td>
                                                        <ul class="sizes-row">
                                                            <li>14</li>
                                                            <li>16</li>
                                                            <li>18</li>
                                                            <li>20</li>
                                                            <li>22</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><span class="color">Australia</span>
                                                    </td>
                                                    <td>
                                                        <ul class="sizes-row">
                                                            <li>8</li>
                                                            <li>10</li>
                                                            <li>12</li>
                                                            <li>14</li>
                                                            <li>16</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="Tab4">
                                    <ul class="tags-list">
                                        <li><a href="../collections/all/vintage.html">Vintage</a>
                                        </li>
                                        <li><a href="../collections/all/style.html">Style</a>
                                        </li>
                                        <li><a href="../collections/all/streetstyle.html">Streetstyle</a>
                                        </li>
                                        <li><a href="../collections/all/prom-dresses.html">Prom dresses</a>
                                        </li>
                                        <li><a href="../collections/all/model.html">Model</a>
                                        </li>
                                        <li><a href="../collections/all/colorful.html">Colorful</a>
                                        </li>
                                        <li><a href="../collections/all/club-dresses.html">Club dresses</a>
                                        </li>
                                        <li><a href="../collections/all/clothes.html">Clothes</a>
                                        </li>
                                        <li><a href="../collections/all/bikini.html">Bikini</a>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="Tab5">
                                    <div id="shopify-product-reviews" data-id="9097940044"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-product-block col-xl-4 visible-xl">
                        <div class="delivery-banner" onclick="window.location.href = '#'">
                            <div class="delivery-banner__icon"><span class="icon-redeem"></span>
                            </div>
                            <div class="delivery-banner__text">
                                <h3>SPECIAL OFFER 1+1=3</h3>
                                <h5>Get a gift!</h5>
                                <p>Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis.</p>
                            </div>
                        </div>
                        <div class="delivery-banner" onclick="window.location.href = '#'">
                            <div class="delivery-banner__icon"><span class="icon-card_membership"></span>
                            </div>
                            <div class="delivery-banner__text">
                                <h3>FREE REWARD CARD</h3>
                                <h5>Worth 10$, 50$, 100$</h5>
                                <p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
                            </div>
                        </div>
                        <div class="delivery-banner" onclick="window.location.href = '#'">
                            <div class="delivery-banner__icon"><span class="icon-local_shipping"></span>
                            </div>
                            <div class="delivery-banner__text">
                                <h3>Free Shipping</h3>
                                <h5>on orders over $100</h5>
                                <p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
                            </div>
                        </div>
                        <div class="delivery-banner" onclick="window.location.href = '#'">
                            <div class="delivery-banner__icon"><span class="icon-replay_5"></span>
                            </div>
                            <div class="delivery-banner__text">
                                <h3>Order Return</h3>
                                <h5>Returns within 5 days</h5>
                                <p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            if (jQuery('.product-info .product-info__sku .sku').length) {
                if (jQuery('.product-info .product-info__sku .sku').text() == "") {
                    var $ava = jQuery(".product-info .product-info__availability");
                    if ($ava.hasClass('product-info__availability')) {
                        $ava.removeClass('product-info__availability')
                    }
                    jQuery('.product-info .product-info__sku').remove();
                }
            }
        </script>
        <!-- related products -->
        <section class="content">
            <div class="container">
                <!-- title -->
                <div class="title-with-button">
                    <div class="carousel-products__center pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
                    <h2 class="text-left text-uppercase title-under pull-left">YOU MAY ALSO BE INTERESTED IN THE FOLLOWING PRODUCT(S)</h2> </div>
                <!-- /title -->
                <!-- carousel -->
                <div class="carousel-products row" id="carouselRelated">
                    @foreach($products as $same)
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-one-six">
                        <!-- product -->
                        <div class="product 31530898636">
                            <div class="product__inside">
                                <!-- product image -->
                                <div class="product__inside__image">
                                    <a href="{{ route('productTitle',$same->id) }}"> <img src="{{asset('image/')}}/products/{{ $sanpham->image }}" alt="Black Cap" /> </a> <a href="javascript:void(0);" onclick="quiqview('black-cap')" class="quick-view"><b><span class="icon icon-visibility"></span> Quick View</b></a> </div>
                                <!-- /product image -->
                                <!-- label news -->
                                <!-- /label news -->
                                <!-- label sale -->
                                <!-- /label sale -->
                                <!-- product name -->
                                <div class="product__inside__name">
                                    <h2 class="product_title"><a href="{{ route('productTitle',$same->id) }}">{{ $same->name}}</a></h2> </div>
                                <!-- /product name -->
                                <!-- product description -->
                                <!-- visible only in row-view mode -->
                                <div class="product__inside__description row-mode-visible">{{ $same->descriptions_sort }}</div>
                                <!-- /product description -->
                                <!-- product price -->
                                <div class="product__inside__price price-box baseprice">
                                    @if($same->price_sale==0)
                                        <span class=money>{{ $same->price_out }}
                                        </span>
                                        @else
                                          <span class=money>{{ $same->price_sale}}
                                          </span>
                                          <span class="price-box__old">
                                            <span class=money>{{ $same->price_out }}
                                            </span>
                                          </span>
                                    @endif
                                </div>
                                <!-- /product price -->
                                <!-- product review -->
                                <!-- visible only in row-view mode -->
                                <div class="product__inside__review row-mode-visible">
                                    <div class="rating row-mode-visible"><span class="shopify-product-reviews-badge" data-id="9097940108"></span>
                                    </div>
                                </div>
                                <!-- /product review -->
                                <div class="product__inside__hover">
                                    <!-- product info -->
                                    <div class="product__inside__info">
                                        <div class="product__inside__info__btns"> <a href="javascript:void(0);" onclick="Shopify.addItem(31530898636, 1); return false;" class="btn btn--ys btn--xl addtocart-js"><span class="icon icon-shopping_basket"></span> Add to Cart</a> <a href="javascript:void(0);" onclick="quiqview('black-cap')" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick View</a> </div>
                                        <div class="custom__info__link hidden-xs"></div>
                                    </div>
                                    <!-- /product info -->
                                    <!-- product rating -->
                                    <div class="rating row-mode-hide"><span class="shopify-product-reviews-badge" data-id="9097940108"></span>
                                    </div>
                                    <!-- /product rating -->
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                    </div>
                    @endforeach

                </div>
                <!-- /carousel -->
            </div>
        </section>
        <!-- /related products -->
    </div>
@endsection