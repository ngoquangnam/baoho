<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('admin.home') }}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
            </li>
           
            <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Quản lí sản phẩm</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li><a href="{{ route('admin.product.index') }}" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Danh sách sản phảm</a></li>
                    
                    <li><a href="{{ route('admin.product.new') }}" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Thêm sản phẩm</a></li>

        	   </ul>
            </li>
        	 

        </ul>
    </div>
</div>
