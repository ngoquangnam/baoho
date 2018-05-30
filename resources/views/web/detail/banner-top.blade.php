
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Trang chủ
                                <span class="sr-only">(current)</span></a>
                            </li>
                            
                            @foreach($categories->take(5) as $category)
                                <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">{{ $category->name }}<span class="caret"></span>
                               </a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-2 multi-gd-img1 multi-gd-text ">
                                            <a href="#">
                                                <img src="{{ asset('web/images/top2.jpg') }}" alt=" "/>
                                            </a>
                                        </div>
                                        
                                        @php
                                        $count = $category->subCategories->count();
                                        @endphp
                                        
                                        @for($i = 0; $i < $count; $i+=8)
                                        <div class="col-sm-5 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                @foreach($category->subCategories as $key => $sub_category)
                                                    @if($key>=$i && $key<$i+8)
                                                        <li><a href="mens.html">{{ $sub_category->name }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endfor
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            @endforeach
                            
                           
                           
                            
                            <li class=" menu__item">
                                 <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                <form action="#" method="post" class="last">
                    <button class="w3view-cart" type="button"  data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-cart-arrow-down"
                                                                                        aria-hidden="true"></i></button>
                </form>

            </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <div class="clearfix"></div>
    </div>
</div>
<!-- //banner-top