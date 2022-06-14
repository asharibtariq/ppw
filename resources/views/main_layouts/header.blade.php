<nav id="main-navbar">
    <div class="container">
        <div class="navbar-header">
            <div class="navbar-brand">
                <a class="logo" href="{{url('')}}">
                    <img src="{{asset('img/xlogo.png.pagespeed.ic._El0UmxCY_.png')}}" alt="logo">
                </a>
            </div>
            <button class="navbar-toggle-btn">
                <i class="fa fa-bars"></i>
            </button>
            <button class="search-toggle-btn">
                <i class="fa fa-search"></i>
            </button>
        </div>

        <div class="navbar-search">
            <button class="search-btn"><i class="fa fa-search"></i></button>
            <div class="search-form">
                <form method="post" action="#" name="search-form">
                    <input class="input" type="text" name="search" placeholder="Search">
                </form>
            </div>
        </div>

        <ul class="navbar-menu nav navbar-nav navbar-right">
            <li><a href="{{url('')}}">Home</a></li>
            <li><a href="#about">About</a></li>
            <li class="has-dropdown">
                <a href="#causes">Causes</a>
                <ul class="dropdown">
                    <li><a href="{{url('single_cause')}}">Single Cause</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#events">Events</a>
                <ul class="dropdown">
                    <li><a href="{{url('single_event')}}">Single event</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#blog">Blog</a>
                <ul class="dropdown">
                    <li><a href="{{url('blog')}}">Blog Page</a></li>
                    <li><a href="{{url('single_blog')}}">Single Blog</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>
        </ul>

    </div>
</nav>