<!-- /category -->
    <div class="banner-bootom-w3-agileits">
    <div class="container">
        <h3 class="wthree_text_info">SẢN PHẨM <span>BÁN CHẠY</span></h3>
         <!-- mens -->
        <div class="clearfix"></div>

        <div class="col-md-4 col-sm-12 products-left">
            <div class="filter-price">
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
           
            <div class="clearfix"></div>
        </div>
        <div class="col-md-8 products-right">
            
        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/w4.jpg" alt="" class="pro-image-front">
                                    <img src="images/w4.jpg" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Black Basic Shorts</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$120.99</span>
                                        <del>$189.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="business" value=" ">
                                                                <input type="hidden" name="item_name" value="Black Basic Shorts">
                                                                <input type="hidden" name="amount" value="30.99">
                                                                <input type="hidden" name="discount_amount" value="1.00">
                                                                <input type="hidden" name="currency_code" value="USD">
                                                                <input type="hidden" name="return" value=" ">
                                                                <input type="hidden" name="cancel_return" value=" ">
                                                                <input type="submit" name="submit" value="Add to cart" class="button">
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                                        
                                </div>
                            </div>
        </div>
        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/b7.jpg" alt="" class="pro-image-front">
                                    <img src="images/b7.jpg" alt="" class="pro-image-back">
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
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="business" value=" ">
                                                                <input type="hidden" name="item_name" value="Costa Swiss Bag">
                                                                <input type="hidden" name="amount" value="30.99">
                                                                <input type="hidden" name="discount_amount" value="1.00">
                                                                <input type="hidden" name="currency_code" value="USD">
                                                                <input type="hidden" name="return" value=" ">
                                                                <input type="hidden" name="cancel_return" value=" ">
                                                                <input type="submit" name="submit" value="Add to cart" class="button">
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                                        
                                </div>
                            </div>
        </div>
        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="images/s6.jpg" alt="" class="pro-image-front">
                                    <img src="images/s6.jpg" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Aero Canvas Loafers  </a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$120.99</span>
                                        <del>$199.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="business" value=" ">
                                                                <input type="hidden" name="item_name" value="Aero Canvas Loafers">
                                                                <input type="hidden" name="amount" value="30.99">
                                                                <input type="hidden" name="discount_amount" value="1.00">
                                                                <input type="hidden" name="currency_code" value="USD">
                                                                <input type="hidden" name="return" value=" ">
                                                                <input type="hidden" name="cancel_return" value=" ">
                                                                <input type="submit" name="submit" value="Add to cart" class="button">
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                                        
                                </div>
                            </div>
        </div>
                
        </div>
        <div class="clearfix"></div>
        
        <div class="single-pro">
             <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/w1.jpg" alt="" class="pro-image-front">
                                        <img src="images/w1.jpg" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                            
                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">A-line Black Skirt</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$130.99</span>
                                            <del>$189.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="A-line Black Skirt" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/w2.jpg" alt="" class="pro-image-front">
                                        <img src="images/w2.jpg" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                            
                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Sleeveless Solid Blue Top</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$140.99</span>
                                            <del>$189.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Sleeveless Solid Blue Top" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/w3.jpg" alt="" class="pro-image-front">
                                        <img src="images/w3.jpg" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                            
                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Skinny Jeans</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$150.99</span>
                                            <del>$189.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Skinny Jeans " />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/w4.jpg" alt="" class="pro-image-front">
                                        <img src="images/w4.jpg" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                            
                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Black Basic Shorts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$120.99</span>
                                            <del>$189.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Black Basic Shorts" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/w5.jpg" alt="" class="pro-image-front">
                                        <img src="images/w5.jpg" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                            
                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Pink Track Pants</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$220.99</span>
                                            <del>$389.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Pink Track Pants" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/w6.jpg" alt="" class="pro-image-front">
                                        <img src="images/w6.jpg" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                            
                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Analog Watch</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$320.99</span>
                                            <del>$489.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Analog Watch" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/w7.jpg" alt="" class="pro-image-front">
                                        <img src="images/w7.jpg" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                            
                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Ankle Length Socks</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$100.99</span>
                                            <del>$159.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Ankle Length Socks" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                                            
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/w8.jpg" alt="" class="pro-image-front">
                                        <img src="images/w8.jpg" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                            
                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Reebok Women's Tights</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$130.99</span>
                                            <del>$169.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Reebok Women's Tights" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                                            
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
        </div>
    </div>
</div>  
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">

                    <h2 style="font-size: 23px;">Danh mục sản phẩm</h2>
                    <div class="panel-group category-products" id="accordian">
               
                        @foreach($categories as $category)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#{{ $category->id }}">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            {{ $category->name }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="{{ $category->id }}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                           @foreach($category->subCategories as $subCategory)
                                            <li><a href="">{{ $subCategory->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                
                </div>
            </div>
            <div class="col-sm-9 padding-right">

                <div class="features_items">
                    <h3 class="wthree_text_info">SẢN PHẨM <span>BÁN CHẠY</span></h3>

                    <div class="row" >

                        @foreach($featuresItems as $product)
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{ asset($product->images[0]->image) }}" alt="" class="pro-image-front">
                                    <img src="{{ asset($product->images[0]->image) }}" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{ route('detail', $product->id) }}" class="link-product-add-cart">Xem ngay</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product">
                                    <h4><a href="single.html">{{ $product->name }}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">{{ $product->price }}</span>
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

                </div>
            </div>
        </div>
    </div>
</section>
<!-- //category -->