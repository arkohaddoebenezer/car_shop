<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light navigation">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img class="logo" src="{{asset('media/car_logo.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto main-nav ">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dashboard<span><i
                                            class="fa fa-angle-down"></i></span>
                                </a>

                                <!-- Dropdown list -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                                    <a class="dropdown-item" href="dashboard-my-ads.html">Dashboard My Ads</a>
                                    <a class="dropdown-item" href="dashboard-favourite-ads.html">Dashboard
                                        Favourite Ads</a>
                                    <a class="dropdown-item" href="dashboard-archived-ads.html">Dashboard Archived
                                        Ads</a>
                                    <a class="dropdown-item" href="dashboard-pending-ads.html">Dashboard Pending
                                        Ads</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pages <span><i class="fa fa-angle-down"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about-us.html">About Us</a>
                                    <a class="dropdown-item" href="contact-us.html">Contact Us</a>
                                    <a class="dropdown-item" href="user-profile.html">User Profile</a>
                                    <a class="dropdown-item" href="404.html">404 Page</a>
                                    <a class="dropdown-item" href="package.html">Package</a>
                                    <a class="dropdown-item" href="single.html">Single Page</a>
                                    <a class="dropdown-item" href="store.html">Store Single</a>
                                    <a class="dropdown-item" href="single-blog.html">Single Post</a>
                                    <a class="dropdown-item" href="blog.html">Blog</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Listing <span><i class="fa fa-angle-down"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="category.html">Ad-Gird View</a>
                                    <a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto mt-10">

                            @if (Route::has('login'))
                                @if (!Auth::check())
                                    <li class="nav-item">
                                        <a class="nav-link login-button" href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link login-button" href="{{ route('register') }}">Register</a>
                                    </li>
                                @else
                                    {{-- <li class="nav-item">
                                        <a class="nav-link text-white add-button" href="ad-listing.html"><i
                                                class="fa fa-plus-circle"></i> Add Listing</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <x-jet-dropdown-link class="nav-link login-button " href="{{ route('profile.show') }}">
                                            {{ Auth::user()->name }}
                                        </x-jet-dropdown-link>
                                    </li>
                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <li>
                                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                                {{ __('API Tokens') }}
                                            </x-jet-dropdown-link>
                                        </li>
                                    @endif
                                    <li class="nav-item">
                                        <slot class="nav-link login-button" name="content">
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-jet-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-jet-dropdown-link>
                                            </form>
                                        </slot>
                                    </li>
                                @endif
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
