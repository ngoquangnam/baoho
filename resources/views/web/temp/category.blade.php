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

    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>CHI TIẾT<span>SẢN PHẨM</span></h3>
             <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                   <ul class="w3_short">
                        <li><a href="index.html">Trang chủ</a><i>|</i></li>
                        <li>Liên hệ</li>
                    </ul>
                 </div>
            </div>
        </div>
    </div>
<div id="app">
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                       <h4>Tổng tiền: <span class="badge badge-secondary">@{{numberFormat(total, 0, ',', ',')}}VNĐ</span></h4>
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
         <!-- mens -->
        <div class="col-md-4 products-left">
            <div class="filter-price">
                <h3>Filter By <span>@{{numberFormat(filter, 0, ',', ',')}}</span></h3>
                    <ul class="dropdown-menu6">
                        <li>                
                            <div id="slider-range"></div>                           
                            <input type="range" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" v-model="filter" min="0" max="10000000"/>
                        </li>           
                    </ul>
            </div>
             <div class="css-treeview">
                <h4>DANH MỤC SẢN PHẨM</h4>
                <ul class="tree-list-pad">
                        @foreach($categories as $index => $category)
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a data-toggle="collapse" data-parent="#accordian" href="#{{ $category->id }}">{{ $category->name }}</a>
                        <ul id="{{ $category->id }}" class="panel-collapse collapse">
                            @foreach($category->subCategories as $key => $subCategory)
                            <li ><a href="mens.html">{{ $subCategory->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="community-poll">
                <h4>Community Poll</h4>
                <div class="swit form"> 
                    <form>
                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>More convenient for shipping and delivery</label> </div></div>
                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Lower Price</label> </div></div>
                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Track your item</label> </div></div>
                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bigger Choice</label> </div></div>
                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>More colors to choose</label> </div></div>   
                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Secured Payment</label> </div></div>
                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Money back guaranteed</label> </div></div>   
                    <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Others</label> </div></div>      
                    <input type="submit" value="SEND">
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-8 products-right">
            <h5>Product <span>Compare(@{{sort}})</span></h5>
            <div class="sort-grid">
                <div class="sorting">
                    <h6>Sort By</h6>
                    <select id="country1" class="frm-field required sect" v-model="sort">
                        <option value="1">Default</option>
                        <option value="2">Name(A - Z)</option> 
                        <option value="3">Name(Z - A)</option>
                        <option value="4">Price(High - Low)</option>
                        <option value="5">Price(Low - High)</option> 
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="sorting">
                    <h6>Showing</h6>
                    <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">7</option>
                        <option value="null">14</option> 
                        <option value="null">28</option>                    
                        <option value="null">35</option>                                
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="men-wear-top">
                
                <div  id="top" class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        @foreach($banners as $banner)
                        <li>
                            <img class="img-responsive" src="{{ asset($banner->image) }}" alt=" "/>
                        </li>
                        
                        @endforeach
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <product-vue 
            v-for="(item, index) in lists"
            :key="item.id"
            :id="item.id"
            :image="item.image"
            :name="item.name"
            :price="item.price"
            :slug="item.slug"
            v-on:add-cart="addCart"
            v-if="item.price > filters"
            ></product-vue>
 
                
        <div class="clearfix"></div>
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