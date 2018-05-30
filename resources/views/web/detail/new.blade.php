
<!-- Button trigger modal -->


<!-- Modal -->

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
    <div class="container">
        <h3 class="wthree_text_info">SẢN PHẨM <span>NỔI BẬT</span></h3>
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <li>Thiết bị an toàn</li>
                <li>Quần áo BHLĐ</li>
                <li>Thiết bị  PCCC </li>
                <li>Thiết bị kim khí </li>
            </ul>
            <div class="resp-tabs-container">
                <!--/tab_one-->
                <div class="tab1">
                @foreach($salesItem->take(8) as $product)
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{asset($product->images[0]->image)}}" alt="" class="pro-image-front">
                                <img src="{{asset($product->images[0]->image)}}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{ route('detail', $product->id) }}" class="link-product-add-cart">Xem ngay</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">{{ $product->name }}</a></h4>
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
                                            <input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" data-toggle="modal" data-target="#exampleModalLong"/>
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
                @foreach($clothes->take(8) as $product)
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{asset($product->images[0]->image)}}" alt="" class="pro-image-front">
                                <img src="{{asset($product->images[0]->image)}}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{ route('detail', $product->id) }}" class="link-product-add-cart">Xem ngay</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">{{ $product->name }}</a></h4>
                                
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
                                            <input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" data-toggle="modal" data-target="#exampleModalLong"/>
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

                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/b1.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/b1.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Laptop Messenger Bag</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$140.99</span>
                                    <del>$169.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value=" Laptop Messenger Bag"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/b2.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/b2.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Puma Backpack</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$127.99</span>
                                    <del>$169.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Puma Backpack"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/b3.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/b3.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html"> Laptop Backpack</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$120.99</span>
                                    <del>$189.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value=" Laptop Backpack"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/b4.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/b4.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Travel Duffel Bag </a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$190.99</span>
                                    <del>$259.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Travel Duffel Bag "/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/b5.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/b5.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html"> Hand-held Bag </a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$190.99</span>
                                    <del>$259.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value=" Hand-held Bag "/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/b6.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/b6.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Butterflies Bag </a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$190.99</span>
                                    <del>$259.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Butterflies Bag"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/b7.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/b7.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Costa Swiss Bag </a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$290.99</span>
                                    <del>$359.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Costa Swiss Bag"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/b8.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/b8.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Noble Designs Bag </a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$120.99</span>
                                    <del>$159.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Noble Designs Bag "/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="tab4">

                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/s1.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/s1.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Running Shoes</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$80.99</span>
                                    <del>$89.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Running Shoes"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/s2.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/s2.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Shoetopia Lace Up</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$90.99</span>
                                    <del>$59.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Shoetopia Lace Up"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/s3.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/s3.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Steemo Casuals(Black)</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$90.99</span>
                                    <del>$59.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Steemo Casuals (Black)"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/s4.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/s4.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Benetton Flip Flops</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$40.99</span>
                                    <del>$99.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Benetton Flip Flops"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/s5.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/s5.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Moonwalk Bellies </a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$80.99</span>
                                    <del>$99.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Moonwalk Bellies"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/s6.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/s6.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Aero Canvas Loafers </a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$120.99</span>
                                    <del>$199.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Aero Canvas Loafers"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/s7.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/s7.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Sparx Sporty Canvas Shoes</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$160.99</span>
                                    <del>$199.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Sparx Sporty Canvas Shoes"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('web/images/s8.jpg') }}" alt="" class="pro-image-front">
                                <img src="{{ asset('web/images/s8.jpg') }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Women BLACK Heels</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$180.99</span>
                                    <del>$199.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Women BLACK Heels"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
