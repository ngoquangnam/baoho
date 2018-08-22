<div class="drop-men">
    <ul class=" nav_1">

        <li class="dropdown at-drop">
            <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span
                        class="number">5</span></a>
            <ul class="dropdown-menu menu1 " role="menu">
                <li><a href="#">

                        <div class="user-new">
                            <p>New user registered</p>
                            <span>40 seconds ago</span>
                        </div>
                        <div class="user-new-left">

                            <i class="fa fa-user-plus"></i>
                        </div>
                        <div class="clearfix"></div>
                    </a></li>
                <li><a href="#">
                        <div class="user-new">
                            <p>Someone special liked this</p>
                            <span>3 minutes ago</span>
                        </div>
                        <div class="user-new-left">

                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="clearfix"></div>
                    </a></li>
                <li><a href="#">
                        <div class="user-new">
                            <p>John cancelled the event</p>
                            <span>4 hours ago</span>
                        </div>
                        <div class="user-new-left">

                            <i class="fa fa-times"></i>
                        </div>
                        <div class="clearfix"></div>
                    </a></li>
                <li><a href="#">
                        <div class="user-new">
                            <p>The server is status is stable</p>
                            <span>yesterday at 08:30am</span>
                        </div>
                        <div class="user-new-left">

                            <i class="fa fa-info"></i>
                        </div>
                        <div class="clearfix"></div>
                    </a></li>
                <li><a href="#">
                        <div class="user-new">
                            <p>New comments waiting approval</p>
                            <span>Last Week</span>
                        </div>
                        <div class="user-new-left">

                            <i class="fa fa-rss"></i>
                        </div>
                        <div class="clearfix"></div>
                    </a></li>
                <li><a href="#" class="view">View all messages</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">{{ Auth::user()->name }}
                    <i class="caret"></i></span><img src="{{ asset('admin/images/wo.jpg') }}"></a>
            <ul class="dropdown-menu " role="menu">
                <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>

    </ul>
</div><!-- /.navbar-collapse -->
<div class="clearfix">

</div>