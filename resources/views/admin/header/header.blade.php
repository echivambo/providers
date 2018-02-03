<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
        <div class="top-left-part"><a class="logo" href="{{route('home')}}"><b><span>home</span></b></a></div>
        <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
            <li>
                <form role="search" class="app-search hidden-xs">
                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                </form>
            </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">{{ Auth::user()->name }}</span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('changePassword') }}"><i class="icon-user"></i> Mudar Password</a></li>
                    <li class="divider"></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}">
                            <i class="icon-key"></i> Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>