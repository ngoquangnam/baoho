<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href="{{ asset('web/images/banner/matna.jpg') }}" rel="shortcut icon" type="image/x-icon"/>
    <title>{{ $subCategories->name }} chất lượng cao uy tín với số lượng lớn </title>
    <!--/tags -->
    <meta HTTP-EQUIV="Content-Language" content="vi">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="{{ $subCategories->name }} chất lượng cao số lượng lớn, Đồ bảo hộ Đức Sơn luôn đặt chất lượng và uy tín lên hàng đầu ,"/>
    <meta name="keywords"
          content=" @foreach($categories as $category){{ $category->name }}, @foreach($category->subCategories as $sub_category){{ $sub_category->name }}, @endforeach @endforeach {{ $subCategories->name }}, Đồ bảo hộ chất lượng cao, đồ bảo hộ uy tín, đồ bảo hộ lao động, bảo hộ lao động đức sơn"/>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/jquery-ui.css') }}">

    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('web/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css'/>
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
          rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>

</head>
<body>
@include('web.detail.header')

@include('web.detail.header-bot')

@include('web.detail.model1')

@include('web.detail.model2')

@include('web.detail.banner-top')


<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>CHI TIẾT<span> SẢN PHẨM</span></h3>
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="{{ route('home') }}">Trang chủ</a><i>|</i></li>
                    <li>Liên hệ</li>
                </ul>
            </div>
        </div>
    </div>
</div>
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

    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3">
                    
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    
                </div>
            </div>
            <div class="clearfix"></div>


        </div>
    </div>
</div>

@include('web.detail.grids')

@include('web.detail.footer')

@include('web.detail.login')

</div>
@include('web.detail.js')
</body>
</html>