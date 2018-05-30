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
</head>
<body>

    @include('web.detail.header')

    @include('web.detail.header-bot')

    @include('web.detail.model1')

    @include('web.detail.model2')

<div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>C<span>heckout </span></h3>
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
<div class="banner_bottom_agile_info" id="app1">
    <div class="container">
       <div class="agile-contact-grids">
                <div class="agile-contact-left">
                    <div class="col-md-7 address-grid">
                        <h4>Thông tin <span>Đơn hàng</span></h4>
                        <div class="table-cart">
                            <table class="table table-bordered" style="border: 1px solid;">
                            <thead>
                                <tr>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Đơn giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sessionSet['cart'] as $index => $cart)
                                    @if($index>0)
                                    <tr>
                                        <th scope="row"><img src="{{asset($cart['product_image'])}}" style="width: 100px;"></th>
                                        <td>{{$cart['item_name']}}</td>
                                        <td>{{$cart['amount']}}</td>
                                        <td>{{$cart['price']}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                                <tr>
                                    <th scope="row">Tổng tiền</th>
                                    <td colspan="1"></td>
                                    <td colspan="2">{{$sessionSet['total']}}VNĐ</td>
                                </tr>
                                
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="col-md-5 contact-form">
                        <h4 class="white-w3ls">Thông tin <span>Khách hàng</span></h4>
                        <form action="{{route('buy')}}" method="post">
                            @csrf
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="name" required="">
                                <label>Tên</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="address" required=""> 
                                <label>Địa chỉ</label>
                                <span></span>
                            </div> 
                            <div class="styled-input">
                                <input type="text" name="phone" required="" v-model="phone">
                                <label>Số Điện Thoại</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <textarea name="note" required=""></textarea>
                                <label>Lưu ý</label>
                                <span></span>
                            </div>
                            <input type="hidden" name="total" value="{{$sessionSet['total']}}">

                            @foreach($sessionSet['cart'] as $index => $cart)
                                @if($index>0)

                                    <input type="hidden" name="items[]" value="{{$cart['product_id']}}, {{$cart['amount']}}"> 
                                @endif  
                            @endforeach

                            <input type="submit" value="Mua Hàng">
                        </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
       </div>
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
</body>
</html>