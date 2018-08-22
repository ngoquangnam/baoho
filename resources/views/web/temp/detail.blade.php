<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href="{{ asset('web/images/banner/matna.jpg') }}" rel="shortcut icon" type="image/x-icon"/>
    <title>{{ $product->name }} chất lượng cao uy tín nhất Việt Nam,{{$product->category->name}}</title>
    <!--/tags -->
    <meta http-equiv="Content-Language" content="vi">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="{{ $product->name }},{{$product->subCategory->name}},{{$product->category->name}}, Đồ Bảo Hộ chất lượng cao số lượng lớn, Đồ bảo hộ Đức Sơn luôn đặt chất lượng và uy tín lên hàng đầu"/>
    <meta name="keywords"
          content="Đồ bảo hộ chất lượng cao, đồ bảo hộ uy tín, đồ bảo hộ lao động, bảo hộ lao động đức sơn, @foreach($categories as $category){{ $category->name }}, @foreach($category->subCategories as $sub_category){{ $sub_category->name }}, @endforeach @endforeach {{$product->subCategory->name}},{{$product->category->name}}"/>
    <meta name="robots" content="noodp,index,follow"/>
    <meta name='revisit-after' content='1 days'/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href="{{ asset('web/css/flexslider.css') }}" type="text/css" media="screen"/>

    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
          rel='stylesheet' type='text/css'>
</head>
<body>

@include('web.detail.header')

@include('web.detail.header-bot')

@include('web.detail.model1')

@include('web.detail.model2')

@include('web.detail.banner-top')

<div id="app">
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">giỏ hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="ul-cart">
                        <li class="li-cart">
                            <div class="row" style="width: 700px;">
                                <div class="col-sm-4">
                                    <h5>Tên sản phẩm:</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5>Số lượng:</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5>Giá:</h5>
                                </div>
                            </div>
                        </li>
                        <li
                                v-for="(c,index) in cart" v-if="index>0" class="li-cart"
                        >

                            <div class="row" style="width: 700px;">
                                <div class="col-sm-4">
                                    <h5>@{{c.item_name}}</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5>@{{c.amount}}</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5>@{{numberFormat(c.price, 0, ',', ',')}}</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h4>Tổng tiền: <span
                                        class="badge badge-secondary">@{{numberFormat(total, 0, ',', ',')}}VNĐ</span>
                            </h4>
                        </li>
                    </ul>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" @click="submitCart">Checkout</button>

                </div>
            </div>
        </div>
    </div>


    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>CHI TIẾT<span>SẢN PHẨM</span></h3>
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="{{route('home')}}">Trang chủ</a><i>|</i></li>
                        <li>Liên hệ</li>
                    </ul>
                </div>
            </div>
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
                                    <div class="thumb-image">
                                        <img src="{{ asset($image->image) }}" data-imagezoom="true"
                                             class="img-responsive" alt="{{ str_slug($product->name) }}">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-right-left simpleCart_shelfItem">
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
                    @foreach($product->sizes as $key => $size)
                        <div class="colr">
                            <label class="radio">
                                <input type="checkbox" name="size"
                                       @foreach($product->sizes as $ps)
                                       @if($size->id  == $ps->id)
                                       {{'checked'}}
                                       @endif
                                       @endforeach style="display:none;"><i></i>{{ $size->size }}
                            </label>

                        </div>
                    @endforeach

                    <div class="clearfix"></div>
                </div>
                <div class="occasional">
                    <h5>Màu sắc :</h5>
                    @foreach($product->colors as $key => $color)
                        <div class="colr">
                            <label class="radio">
                                <input type="checkbox" name="color"
                                       @foreach($product->colors as $pc)
                                       @if($color->id  == $pc->id)
                                       {{'checked'}}
                                       @endif
                                       @endforeach style="display:none;"><i></i>
                                <div style="width: 25px; height: 25px;background-color: {{ $color->color }};"></div>
                            </label>

                        </div>
                    @endforeach

                    <div class="clearfix"></div>
                </div>
                <div class="occasional">
                    <h5>Chất liệu :</h5>
                    @foreach($product->materials as $key => $material)
                        <div>
                            <label class="radio">
                                <input type="checkbox" name="color"
                                                        @foreach($product->materials as $pm)
                                                        @if($material->id  == $pm->id)
                                                        {{'checked'}}
                                                        @endif
                                                        @endforeach style="display:none;"><i></i>{{ $material->name }}
                            </label>

                        </div>
                    @endforeach

                    <div class="clearfix"></div>
                </div>
                <div>
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                        <form action="" method="post"
                              v-on:submit.prevent="addCart('{{$product->id}}', '{{$product->name}}', {{$product->price}}, '{{$product->images[0]->image}}')">
                            <fieldset>
                                @csrf
                                <input type="hidden" name="cmd" value="_cart"/>
                                <input type="hidden" name="add" value="1"/>
                                <input type="hidden" name="id" value="{{ $product->id }}"/>
                                <input type="hidden" name="item_name" value="{{ $product->name }}"/>
                                <input type="hidden" name="amount"
                                       value="{{ number_format($product->price, 0, ',', '.') }}"/>
                                <input type="hidden" name="discount_amount" value="0"/>
                                <input type="hidden" name="currency_code" value="VND"/>
                                <input type="hidden" name="return" value=" "/>
                                <input type="hidden" name="cancel_return" value=" "/>
                                <input type="submit" name="submit" value="Thêm vào giỏ" class="button"
                                       data-toggle="modal" data-target="#exampleModalLong"/>
                            </fieldset>
                        </form>
                    </div>

                </div>

            </div>
            @isset($product->link_video)
                <div class="col-md-4">
                    <iframe width="500" height="315" src="{{$product->link_video}}" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            @endisset

            <div class="clearfix"></div>
            <!-- /new_arrivals -->
           
            <div class="responsive_tabs_agileits">
                <div id="horizontalTab">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="tieude">
                                <h5 class="noidung" id="chinh">Mô tả chi tiết sản phẩm</h5>
                            </div>
                            <div style="padding-left: 1%;"> 
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //new_arrivals -->
            <!--/slider_owl-->


        </div>
    </div>

    @include('web.detail.grids')

    @include('web.detail.footer')
</div>
<script type="text/javascript" src="{{ asset('web/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<script src="{{ asset('web/js/modernizr.custom.js')}}"></script>
<script src="{{ asset('web/js/imagezoom.js')}}"></script>
<!-- single -->
<!-- script for responsive tabs -->

@include('web.detail.js')
<script src="{{ asset('web/js/jquery.flexslider.js')}}"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
</body>
</html>