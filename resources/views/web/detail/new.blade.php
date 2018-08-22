<div class="new_arrivals_agile_w3ls_info" >
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
                        <div class="col-sm-3">
                            <h5>Tên sản phẩm:</h5>
                        </div>
                        <div class="col-sm-3">
                            <h5>Số lượng:</h5>
                        </div>
                        <div class="col-sm-3">
                            <h5>Giá:</h5>
                        </div>
                        <div class="col-sm-3">
                            <h5>Xóa:</h5>
                        </div>
                    </div>
                </li>
                <li
                    v-for="(c,index) in cart" v-if="index>0" class="li-cart"
                >

                    <div class="row" style="width: 700px;">
                        <div class="col-sm-3">
                            <h5>@{{c.item_name}}</h5>
                        </div>
                        <div class="col-sm-3">
                            <h5>@{{c.amount}}</h5>
                        </div>
                        <div class="col-sm-3">
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
            <button type="button" class="btn btn-primary" @click="deleteCart" data-dismiss="modal" aria-label="Close">xóa</button>
      </div>
    </div>
  </div>
</div>
    <div class="container">
        <h3 class="wthree_text_info" id="noi-bat">SẢN PHẨM <span>NỔI BẬT</span></h3>
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <li><h4 class="tab-h4">Thiết bị an toàn</h4></li>
                <li><h4 class="tab-h4">Quần áo BHLĐ</h4></li>
                <li><h4 class="tab-h4">Thiết bị  PCCC</h4> </li>
                <li><h4 class="tab-h4">Thiết bị kim khí</h4> </li>
                <li><h4 class="tab-h4">Giày Bảo hộ </h4></li>
            </ul>
            <div class="resp-tabs-container">
                <!--/tab_one-->
                <div class="tab1">
                @foreach($safeDevices->take(15) as $product)
                    <div class="col-md-5ths col-xs-6 col-sm-6 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{asset($product->images[0]->image)}}" alt="{{$product->slug}}" class="pro-image-front">
                                <img src="{{asset($product->images[0]->image)}}" alt="{{$product->slug}}" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{ route('detail', ['slug' =>  $product->slug.'-'.$product->id]) }}" class="link-product-add-cart">Xem ngay</a>
                                    </div>
                                </div>
                                <span class="product-new-top">
                                    @if($product->discount != null)
                                    <del>{{$product->discount}}%</del>
                                    @else
                                    New
                                    @endif

                                </span>
                            </div>
                            <div class="item-info-product ">
                                <h4 style="display: block;height: 34px;"><a href="{{ route('detail', ['slug' => $product->slug.'-'.$product->id]) }}">{{ $product->name }}</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">{{ number_format($product->price, 0, ',', ',') }}VNĐ</span>
                                    <del></del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="" method="post" v-on:submit.prevent="addCart('{{$product->id}}', '{{$product->name}}', {{$product->price}}, '{{$product->images[0]->image}}')">
                                        <fieldset>
                                            @csrf
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="id" value="{{ $product->id }}"/>
                                            <input type="hidden" name="item_name" value="{{ $product->name }}"/>
                                            <input type="hidden" name="amount" value="{{ number_format($product->price, 0, ',', '.') }}"/>
                                            <input type="hidden" name="discount_amount" value="0"/>
                                            <input type="hidden" name="currency_code" value="VND"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Thêm vào giỏ" class="button" data-toggle="modal" data-target="#exampleModalLong"/>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="clearfix"></div>
                </div>
                <!--//tab_one-->
                <!--/tab_two-->
                <div class="tab2">
                @foreach($clothes->take(15) as $product)
                    <div class="col-md-5ths product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{asset($product->images[0]->image)}}" alt="{{$product->slug}}" class="pro-image-front">
                                <img src="{{asset($product->images[0]->image)}}" alt="{{$product->slug}}" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{ route('detail', ['slug' =>  $product->slug.'-'.$product->id]) }}" class="link-product-add-cart">Xem ngay</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4 style="display: block;height: 34px;"><a href="{{ route('detail', ['slug' => $product->slug.'-'.$product->id]) }}">{{ $product->name }}</a></h4>
                                
                                <div class="info-product-price">
                                    <span class="item_price">{{ number_format($product->price, 0, ',', '.') }}VNĐ</span>
                                    <del></del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="" method="post" v-on:submit.prevent="addCart('{{$product->id}}', '{{$product->name}}', {{$product->price}}, '{{$product->images[0]->image}}')">
                                        <fieldset>
                                            @csrf
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="id" value="{{ $product->id }}"/>
                                            <input type="hidden" name="item_name" value="{{ $product->name }}"/>
                                            <input type="hidden" name="amount" value="{{ number_format($product->price, 0, ',', '.') }}"/>
                                            <input type="hidden" name="discount_amount" value="0"/>
                                            <input type="hidden" name="currency_code" value="VND"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Thêm vào giỏ" class="button" data-toggle="modal" data-target="#exampleModalLong"/>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
                </div>
                <!--//tab_two-->

                <div class="tab3">
                @foreach($fireProtectionEquipments->take(15) as $product)
                    <div class="col-md-5ths product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{asset($product->images[0]->image)}}" alt="{{$product->slug}}" class="pro-image-front">
                                <img src="{{asset($product->images[0]->image)}}" alt="{{$product->slug}}" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{ route('detail', ['slug' =>  $product->slug.'-'.$product->id]) }}" class="link-product-add-cart">Xem ngay</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4 style="display: block;height: 34px;"><a href="{{ route('detail', ['slug' => $product->slug.'-'.$product->id]) }}">{{ $product->name }}</a></h4>
                                
                                <div class="info-product-price">
                                    <span class="item_price">{{ number_format($product->price, 0, ',', '.') }}VNĐ</span>
                                    <del></del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="" method="post" v-on:submit.prevent="addCart('{{$product->id}}', '{{$product->name}}', {{$product->price}}, '{{$product->images[0]->image}}')">
                                        <fieldset>
                                            @csrf
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="id" value="{{ $product->id }}"/>
                                            <input type="hidden" name="item_name" value="{{ $product->name }}"/>
                                            <input type="hidden" name="amount" value="{{ number_format($product->price, 0, ',', '.') }}"/>
                                            <input type="hidden" name="discount_amount" value="0"/>
                                            <input type="hidden" name="currency_code" value="VND"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Thêm vào giỏ" class="button" data-toggle="modal" data-target="#exampleModalLong"/>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
                </div>
                <div class="tab4">
                @foreach($metallicEquipments->take(15) as $product)
                    <div class="col-md-5ths product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{asset($product->images[0]->image)}}" alt="{{$product->slug}}" class="pro-image-front">
                                <img src="{{asset($product->images[0]->image)}}" alt="{{$product->slug}}" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{ route('detail', ['slug' =>  $product->slug.'-'.$product->id]) }}" class="link-product-add-cart">Xem ngay</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4 style="display: block;height: 34px;"><a href="{{ route('detail', ['slug' => $product->slug.'-'.$product->id]) }}">{{ $product->name }}</a></h4>
                                
                                <div class="info-product-price">
                                    <span class="item_price">{{ number_format($product->price, 0, ',', '.') }}VNĐ</span>
                                    <del></del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="" method="post" v-on:submit.prevent="addCart('{{$product->id}}', '{{$product->name}}', {{$product->price}}, '{{$product->images[0]->image}}')">
                                        <fieldset>
                                            @csrf
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="id" value="{{ $product->id }}"/>
                                            <input type="hidden" name="item_name" value="{{ $product->name }}"/>
                                            <input type="hidden" name="amount" value="{{ number_format($product->price, 0, ',', '.') }}"/>
                                            <input type="hidden" name="discount_amount" value="0"/>
                                            <input type="hidden" name="currency_code" value="VND"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Thêm vào giỏ" class="button" data-toggle="modal" data-target="#exampleModalLong"/>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
                </div>
                <div class="tab5">
                @foreach($shoeProtections->take(15) as $product)
                    <div class="col-md-5ths product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{asset($product->images[0]->image)}}" alt="{{$product->slug}}" class="pro-image-front">
                                <img src="{{asset($product->images[0]->image)}}" alt="{{$product->slug}}" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{ route('detail', ['slug' =>  $product->slug.'-'.$product->id]) }}" class="link-product-add-cart">Xem ngay</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4 style="display: block;height: 34px;"><a href="{{ route('detail', ['slug' =>  $product->slug.'-'.$product->id]) }}">{{ $product->name }}</a></h4>
                                
                                <div class="info-product-price">
                                    <span class="item_price">{{ number_format($product->price, 0, ',', '.') }}VNĐ</span>
                                    <del></del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="" method="post" v-on:submit.prevent="addCart('{{$product->id}}', '{{$product->name}}', {{$product->price}}, '{{$product->images[0]->image}}')">
                                        <fieldset>
                                            @csrf
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="id" value="{{ $product->id }}"/>
                                            <input type="hidden" name="item_name" value="{{ $product->name }}"/>
                                            <input type="hidden" name="amount" value="{{ number_format($product->price, 0, ',', '.') }}"/>
                                            <input type="hidden" name="discount_amount" value="0"/>
                                            <input type="hidden" name="currency_code" value="VND"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Thêm vào giỏ" class="button" data-toggle="modal" data-target="#exampleModalLong"/>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
   
</div>

<div class="clearfix"></div>

<div class="new_arrivals_agile_w3ls_info">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="tieude">
                    <h5 class="noidung">Sản phẩm chính</h5>
                </div>
                <div class="body">
                    
                    <div class="noidung-td flexslider2 carousel">
                        <div class="custom-navigation all-control">
                            <div class="control-nav-left">
                                <a href="#" class="flex-prev color"><i class="fa fa-chevron-left"></i></a>
                            </div>
                            <div class="control-nav-right">
                                <a href="#" class="flex-next color"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div> 
                        <ul class="slides">
                            <li>
                                <div style="width: 100%;">
                                    <div class="team-grids">
                                        <div class="thumbnail team-w3agile">
                                            
                                            <img src="/web/images/banner/matna.jpg" class="img-responsive img-custom" alt="mat-na-phong-doc">
                                            <div class="social-icons team-icons right-w3l fotw33">
                                                <div class="caption">
                                                    <h4>Mặt nạ phòng độc</h4>
                                                    <p>Thông tin chi tiết</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noidung-p">
                                        <p><b>Mặt nạ phòng độc</b> là thiết bị cá nhân được sử dụng để bảo vệ người dùng chống lại các chất độc hại trong không khí như SO2, NO2 bụi công nghiệp siêu nhỏ...
                                      </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div style="width: 100%;">
                                    <div class="team-grids">
                                        <div class="thumbnail team-w3agile">
                                            
                                            <img src="/web/images/banner/giay.jpg" class="img-responsive img-custom" alt="giay-bao-ho">
                                            <div class="social-icons team-icons right-w3l fotw33">
                                                <div class="caption">
                                                     <h4>Giày bảo hộ</h4>
                                                    <p>Mô tả ngắn</p>                        
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="noidung-p">
                                         <p><b>Giày bảo hộ lao động</b> là vật dụng không thể thiếu đối với người lao động làm việc ở môi trường nguy hiểm để đảm bảo an toàn cho đôi chân tránh được các vật sắc nhọn...
                                     </p>
                                    </div>
                                </div>
                            </li> 

                            <li>
                                <div style="width: 100%;">
                                    <div class="team-grids">
                                        <div class="thumbnail team-w3agile">
                                            
                                            <img src="/web/images/banner/mu.jpg" class="img-responsive img-custom" alt="mu-bao-ho">
                                            <div class="social-icons team-icons right-w3l fotw33">
                                                <div class="caption">
                                                     <h4>Mũ bảo hộ lao động</h4>
                                                    <p>Mô tả ngắn</p>                        
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="noidung-p">
                                       <p><b>Mũ bảo hộ lao động</b> là vật dụng không thể thiếu đối với người lao động làm việc ở các công trường để đảm bảo an toàn là đầu tránh khỏi các trấn thương nguy hiểm..
                                     </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div style="width: 100%;">
                                    <div class="team-grids">
                                        <div class="thumbnail team-w3agile">
                                            
                                            <img src="/web/images/banner/day.jpg" class="img-responsive img-custom" alt="day-bao-ho">
                                            <div class="social-icons team-icons right-w3l fotw33">
                                                <div class="caption">
                                                    <h4>Dây an toàn</h4>
                                                    <p>Mô tả ngắn</p>                             
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="noidung-p">
                                        <p><b>Dây an toàn</b> là vật dụng cần thiết bảo vệ người lao động khi đang làm việc ở những nơi nguy hiểm có độ cao lớn, tránh dược những rủi ro đáng tiếc khi việc ở trên cao...
                                     </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        
                    </div>

                </div>
                <div class="flexslider1 carousel news">
                    <ul class="slides">
                    <li>
                        <div>
                            <div class="team-grids">
                                <div class="thumbnail team-w3agile">
                                    
                                    <img src="/web/images/b1.jpg" class="img-responsive img-custom" alt="">
                                    <div class="social-icons team-icons right-w3l fotw33">
                                        <div class="caption">
                                            <h4>Joanna Vilken</h4>
                                            <p>Add Short Description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="noidung-p">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. 
                              </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="team-grids">
                                <div class="thumbnail team-w3agile">
                                    
                                    <img src="/web/images/b1.jpg" class="img-responsive img-custom" alt="">
                                    <div class="social-icons team-icons right-w3l fotw33">
                                        <div class="caption">
                                            <h4>Joanna Vilken</h4>
                                            <p>Add Short Description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="noidung-p">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. 
                              </p>
                            </div>
                        </div>
                    </li>
                </ul>
                </div>
                
            </div>
            <div class="col-md-9">
                <div class="tieude">
                    <h5 class="noidung" id="chinh">Sản phẩm chính</h5>
                </div>
                @foreach($safeDevices->take(8) as $product)
                    <div class="col-md-3 col-xs-6 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{asset($product->images[0]->image)}}" alt="{{$product->slug}}" class="pro-image-front">
                                <img src="{{asset($product->images[0]->image)}}" alt="{{$product->slug}}" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{ route('detail', ['slug' =>  $product->slug.'-'.$product->id]) }}" class="link-product-add-cart">Xem ngay</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4 style="display: block;height: 34px;"><a href="{{ route('detail', ['slug' =>  $product->slug.'-'.$product->id]) }}">{{ $product->name }}</a></h4>
                                
                                <div class="info-product-price">
                                    <span class="item_price">{{ number_format($product->price, 0, ',', '.') }}VNĐ</span>
                                    <del></del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="" method="post" v-on:submit.prevent="addCart('{{$product->id}}', '{{$product->name}}', {{$product->price}}, '{{$product->images[0]->image}}')">
                                        <fieldset>
                                            @csrf
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="id" value="{{ $product->id }}"/>
                                            <input type="hidden" name="item_name" value="{{ $product->name }}"/>
                                            <input type="hidden" name="amount" value="{{ number_format($product->price, 0, ',', '.') }}"/>
                                            <input type="hidden" name="discount_amount" value="0"/>
                                            <input type="hidden" name="currency_code" value="VND"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Thêm vào giỏ" class="button" data-toggle="modal" data-target="#exampleModalLong"/>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


