<!DOCTYPE html>
<html>
<head>
    <title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home ::
        w3layouts</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
    <!--//tags -->
    <link href="{{ asset('web/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('web/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css'/>
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
          rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
<link rel="stylesheet" href="{{ asset('web/css/flexslider.css') }}" type="text/css" media="screen" />

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>

    @include('web.detail.header')

    @include('web.detail.header-bot')

    @include('web.detail.model1')

    @include('web.detail.model2')

<div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>CHI TIẾT<span>SẢN PHẨM</span></h3>
            <!--/w3_short-->
                 <div class="services-breadcrumb">
                        <div class="agile_inner_breadcrumb">

                           <ul class="w3_short">
                                <li><a href="index.html">Trang chủ</a><i>|</i></li>
                                <li>Liên hệ</li>
                            </ul>
                         </div>
                </div>
       <!--//w3_short-->
    </div>
</div>
<div class="banner-bootom-w3-agileits">
    <div class="container">
         <div class="col-md-4 single-right-left ">
            <div class="grid images_3_of_2">
                <div class="flexslider">
                    
                    <ul class="slides">
                        @foreach($product->images  as $image)
                        <li data-thumb="{{ asset($image->image) }}">
                            <div class="thumb-image"> <img src="{{ asset($image->image) }}" data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="clearfix"></div>
                </div>  
            </div>
        </div>
        <div class="col-md-8 single-right-left simpleCart_shelfItem">
                    <h3>{{ $product->name }}</h3>
                    <p><span class="item_price">{{ number_format($product->price, 0, ',', ',') }}VNĐ</span></p>
                    <div class="rating1">
                        <span class="starRating">
                            <input id="rating5" type="radio" name="rating" value="5">
                            <label for="rating5">5</label>
                            <input id="rating4" type="radio" name="rating" value="4">
                            <label for="rating4">4</label>
                            <input id="rating3" type="radio" name="rating" value="3" checked="">
                            <label for="rating3">3</label>
                            <input id="rating2" type="radio" name="rating" value="2">
                            <label for="rating2">2</label>
                            <input id="rating1" type="radio" name="rating" value="1">
                            <label for="rating1">1</label>
                        </span>
                    </div>
                    
                    <div class="color-quality">
                        <div class="color-quality-right">
                        <h5>Loại sản phẩm: {{$product->category->name}}</h5>
                        <h5>dòng sản phẩm: {{$product->subCategory->name}}</h5>
                            
                        </div>
                    </div>
                    
                    <div class="occasional">
                        <h5>Kích cỡ :</h5>
                         @foreach($sizes as $key => $size)
                        <div class="colr">
                            <label class="radio"><input type="checkbox" name="size"  
                        @foreach($product->sizes as $ps)
                        @if($size->id  == $ps->id)
                        {{'checked'}}
                        @endif
                        @endforeach style="display:none;"><i></i>{{ $size->size }}</label>
                            
                        </div>
                        @endforeach
                        
                        <div class="clearfix"> </div>
                    </div> 
                    <div class="occasional">
                        <h5>Màu sắc :</h5>
                         @foreach($colors as $key => $color)
                        <div class="colr">
                            <label class="radio"><input type="checkbox" name="color"  
                        @foreach($product->colors as $pc)
                        @if($color->id  == $pc->id)
                        {{'checked'}}
                        @endif
                        @endforeach style="display:none;"><i></i>{{ $color->color }}</label>
                            
                        </div>
                        @endforeach
                        
                        <div class="clearfix"> </div>
                    </div> 
                    <div class="occasional">
                        <h5>Chất liệu :</h5>
                         @foreach($materials as $key => $material)
                        <div class="colr">
                            <label class="radio"><input type="checkbox" name="color" 
                        @foreach($product->materials as $pm)
                        @if($material->id  == $pm->id)
                        {{'checked'}}
                        @endif
                        @endforeach style="display:none;"><i></i>{{ $material->name }}</label>
                            
                        </div>
                        @endforeach
                        
                        <div class="clearfix"> </div>
                    </div>
                    <div class="occasion-cart">
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart">
                                                                    <input type="hidden" name="add" value="1">
                                                                    <input type="hidden" name="business" value=" ">
                                                                    <input type="hidden" name="item_name" value="Wing Sneakers">
                                                                    <input type="hidden" name="amount" value="650.00">
                                                                    <input type="hidden" name="discount_amount" value="1.00">
                                                                    <input type="hidden" name="currency_code" value="USD">
                                                                    <input type="hidden" name="return" value=" ">
                                                                    <input type="hidden" name="cancel_return" value=" ">
                                                                    <input type="submit" name="submit" value="Add to cart" class="button">
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                                            
                    </div>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                                                           <li class="share">Share On : </li>
                                                            <li><a href="#" class="facebook">
                                                                  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="#" class="twitter"> 
                                                                  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="#" class="instagram">
                                                                  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="#" class="pinterest">
                                                                  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                                                        </ul>
                    
              </div>
                <div class="clearfix"> </div>
                <!-- /new_arrivals --> 
    <div class="responsive_tabs_agileits"> 
                <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                            <li>Thông tin và mô tả sản phẩm</li>
                            <li>Đánh giá</li>
                        </ul>
                    <div class="resp-tabs-container">
                    <!--/tab_one-->
                       <div class="tab1">

                            <div class="single_page_agile_its_w3ls">
                              {!! $product->description !!}
                            </div>
                        </div>
                        <!--//tab_one-->
                        <div class="tab2">
                            
                            <div class="single_page_agile_its_w3ls">
                                <div class="bootstrap-tab-text-grids">
                                    <div class="bootstrap-tab-text-grid">
                                        <div class="bootstrap-tab-text-grid-left">
                                            <img src="images/t1.jpg" alt=" " class="img-responsive">
                                        </div>
                                        <div class="bootstrap-tab-text-grid-right">
                                            <ul>
                                                <li><a href="#">Admin</a></li>
                                                <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                                            </ul>
                                            <p></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                     </div>
                                     <div class="add-review">
                                        <h4>add a review</h4>
                                        <form action="#" method="post">
                                                <input type="text" name="Name" required="Name">
                                                <input type="email" name="Email" required="Email"> 
                                                <textarea name="Message" required=""></textarea>
                                            <input type="submit" value="SEND">
                                        </form>
                                    </div>
                                 </div>
                                 
                             </div>
                         </div>
                          
                    </div>
                </div>  
            </div>
    <!-- //new_arrivals --> 
        <!--/slider_owl-->
    
            
            </div>
 </div>

    @include('web.detail.footer')

    @include('web.detail.js')

<script type="text/javascript">
    var app1 = new Vue({
        el: '#app1',
        data: {
            phone: '',
        },
        watch: {
            phone: function(val){
                if(isNaN(val))
                    alert('vui lòng nhập đúng số điện thoại');
            }
        }
    })
</script>
<script type="text/javascript" src="{{ asset('web/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<script src="{{ asset('web/js/modernizr.custom.js')}}"></script>
    <!-- Custom-JavaScript-File-Links --> 
    <!-- cart-js -->
    <script src="{{ asset('web/js/minicart.min.js')}}"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>

    <!-- //cart-js --> 
    <!-- single -->
<script src="{{ asset('web/js/imagezoom.js')}}"></script>
<!-- single -->
<!-- script for responsive tabs -->                     
<script src="{{ asset('web/js/easy-responsive-tabs.js')}}"></script>
<script>
    $(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion           
    width: 'auto', //auto or any width like 600px
    fit: true,   // 100% fit in a container
    closed: 'accordion', // Start closed if in accordion view
    activate: function(event) { // Callback function if tab is switched
    var $tab = $(this);
    var $info = $('#tabInfo');
    var $name = $('span', $info);
    $name.text($tab.text());
    $info.show();
    }
    });
    $('#verticalTab').easyResponsiveTabs({
    type: 'vertical',
    width: 'auto',
    fit: true
    });
    });
</script>
<!-- FlexSlider -->
<script src="{{ asset('web/js/jquery.flexslider.js')}}"></script>
                        <script>
                        // Can also be used with $(document).ready()
                            $(window).load(function() {
                                $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                                });
                            });
                        </script>
                    <!-- //FlexSlider-->
<!-- //script for responsive tabs -->       
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('web/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{ asset('web/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="{{ asset('web/js/bootstrap.js')}}"></script>
</body>
</html>