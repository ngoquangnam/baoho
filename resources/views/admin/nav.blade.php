
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('admin.home') }}">
                <i class="fa fa-dashboard nav_icon "></i>
                <span class="nav-label">Dashboards</span> 
            </a>
          </li>
          
          <li class="nav-item" data-toggle="collapse" href="#banner">
            <a class="nav-link" href="#banner"><i class="fa fa-indent nav_icon"></i> <span >Quản lí Banner</span><span class="fa arrow"></span></a>
            <ul id="banner" class="collapse">
                <li>
                     <a class="nav-link" href="{{ route('admin.banner.index') }}"><i class="fa fa-area-chart nav_icon"></i>Danh sách Banner</a>
                </li>
                <li>
                     <a class="nav-link" href="{{ route('admin.banner.create') }}"><i class="fa fa-area-chart nav_icon"></i>Thêm Banner</a>
                </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="collapse">
            <a class="nav-link" href="{{ route('admin.bill.index') }}"><i class="fa fa-indent nav_icon"></i> <span >Danh sách đơn hàng</span><span class="fa arrow"></span></a>
          </li>
          <li class="nav-item" data-toggle="collapse" href="#category">
            <a class="nav-link" href="#"><i class="fa fa-indent nav_icon"></i> <span >Quản lí Loại sản phẩm</span><span class="fa arrow"></span></a>
            <ul id="category" class="collapse">
                <li>
                     <a class="nav-link" href="{{ route('admin.category.index') }}"><i class="fa fa-area-chart nav_icon"></i>Danh sách Loại sản phẩm</a>
                </li>
                
            </ul>
          </li>
          <li class="nav-item" data-toggle="collapse" href="#product">
            <a class="nav-link" href="#"><i class="fa fa-indent nav_icon"></i> <span >Quản lí sản phẩm</span><span class="fa arrow"></span></a>
            <ul id="product" class="collapse">
                <li>
                     <a class="nav-link" href="{{ route('admin.product.index') }}"><i class="fa fa-area-chart nav_icon"></i>Danh sách sản phảm</a>
                </li>
                <li>
                     <a class="nav-link" href="{{ route('admin.product.new') }}"><i class="fa fa-area-chart nav_icon"></i>Thêm sản phẩm</a>
                </li>
            </ul>
          </li>
          
        </ul>
    </div>
</div>
