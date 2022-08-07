
    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                   data-toggle="collapse" href="#navbar-vertical"
                   style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav
                    class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i
                                    class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Shirts</a>
                        <a href="" class="nav-item nav-link">Jeans</a>
                        <a href="" class="nav-item nav-link">Swimwear</a>
                        <a href="" class="nav-item nav-link">Sleepwear</a>
                        <a href="" class="nav-item nav-link">Sportswear</a>
                        <a href="" class="nav-item nav-link">Jumpsuits</a>
                        <a href="" class="nav-item nav-link">Blazers</a>
                        <a href="" class="nav-item nav-link">Jackets</a>
                        <a href="" class="nav-item nav-link">Shoes</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{route('home')}}"
                               class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                            <a href="{{route('shop')}}"
                               class="nav-item nav-link {{ (request()->is('shop')) ? 'active' : '' }}">Shop</a>

                            <a href="#" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            @if (Route::has('login'))

                                <!--Profile setting dropdown -->
                                <div class="navbar-nav ml-auto py-0">
                                    @auth
                                        <!-- Name Profile -->
                                        <div class="ml-3 relative">
                                <span class="inline-flex rounded-md py-2">
                                    @if(Auth::user()->type==='User')
                                        {{ Auth::user()->currentTeam->name }}
                                    @else
                                        {{ Auth::user()->name }}
                                    @endif
                                </span>
                                        </div>

                                        <div class="ml-3 relative">

                                            <x-jet-dropdown align="right" width="48">
                                                <x-slot name="trigger">

                                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())

                                                        <button
                                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                            <img class="h-8 w-8 rounded-full object-cover"
                                                                 src="{{ Auth::user()->profile_photo_url }}"
                                                                 alt="{{ Auth::user()->name }}"/>
                                                        </button>

                                                    @else
                                                        <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </span>
                                                    @endif
                                                </x-slot>

                                                <x-slot name="content">
                                                    <!-- Account Management -->
                                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                                        {{ __('Manage Account') }}
                                                    </div>

                                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                                        {{ __('Profile') }}
                                                    </x-jet-dropdown-link>
                                                    <div class="border-t border-gray-100"></div>
                                                    @can('user_auth')
                                                    <x-jet-dropdown-link href="{{ route('dashboard') }}">
                                                        {{ __('Dashboard') }}
                                                    </x-jet-dropdown-link>
                                                    <div class="border-t border-gray-100"></div>
                                                    @endcan

                                                    @can('admin_auth')
                                                        <x-jet-dropdown-link href="{{ route('admin.dashboard') }}">
                                                            {{ __('Dashboard') }}
                                                        </x-jet-dropdown-link>
                                                        <div class="border-t border-gray-100"></div>
                                                    @endcan

                                                    <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                                        @csrf

                                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                             @click.prevent="$root.submit();">
                                                            {{ __('Log Out') }}
                                                        </x-jet-dropdown-link>
                                                    </form>
                                                </x-slot>
                                            </x-jet-dropdown>
                                        </div>
                                    @else
                                        <a href="{{ route('login') }}"
                                           class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                               class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

