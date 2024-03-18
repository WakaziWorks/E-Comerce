<header class="header fixed-top">
    <div class="container-fluid" style="margin-top: 0px;">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-3">
                <a class="navbar-brand fw-bold" href="#page-top"><img src="{{ asset('images/WhatsApp_Image_2024-02-28_at_15.48.15-removebg-preview.png') }}" height="90px" width="110px"></a>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="container-fluid search">
                    <form class="d-flex position-relative" role="search">
                        <input class="form-control me-2 search-area" type="search" placeholder="What can we help you find?" aria-label="Search" style="box-shadow: none; border-radius: 20px;">
                        <span class="position-absolute top-50 translate-middle-y d-none">
                            <button type="button" class="btn btn-link" style="left: 70px;">
                                <i class="bi bi-x"></i>
                            </button>
                            <button type="button" class="btn btn-link">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <!-- <span class="position-absolute top-50 end-0 translate-middle-y">
                            <button type="button" class="btn btn-link">
                                <i class="bi bi-search"></i>
                            </button>
                        </span> -->
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 text-end">
                <a href="{{ route('cart') }}" style="margin: 12px"><img src="{{ asset('images/cart4.svg') }}" /></a>
                <a href="" style="margin: 12px" id="popup-trigger"><img src="{{ asset('images/person-check.svg') }}" /></a>
                <a href="" style="margin: 12x"><img src="{{ asset('images/patch-question-fill.svg') }}" /></a>
                <div class="popup" id="popup">
                    <div class="popup-content">
                        <h5 style="text-align: center;">Welcome Guest</h5>
                        <p style="text-align: center;">Manage Cart, Orders & Wishlist</p>
                        <hr />
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="signin-btn">Sign In</button></a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="signup-btn">Sign Up</button></a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center" style="margin-top: 0; background-color: #f1e6f4;">
        <div style="width: 50%;">
            <div class="row">
                <div class="col nav-btn">
                    <a href="{{ route('home') }}"><button>HOME</button></a>
                </div>
                <div class="col nav-btn">
                    <a href="{{ route('products') }}"><button>PRODUCTS</button></a>
                </div>
                <div class="col nav-btn">
                    <a href="{{ route('collections') }}"><button>COLLECTIONS</button></a>
                </div>
                <div class="col nav-btn">
                    <a href="{{ route('blog') }}"><button>BLOG</button></a>
                </div>
                <div class="col nav-btn">
                    <a href="{{ route('features') }}"><button>FEATURES</button></a>
                </div>
                <div class="col nav-btn">
                    <a href="{{ route('collaborations') }}"><button>COLLABORATIONS</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container-fluid" style="background-color: blue">
        <h1>Categories</h1>
    </div> -->
    <script>
            const popupTrigger = document.getElementById('popup-trigger');
            const popup = document.getElementById('popup');

            function togglePopup() {
                popup.classList.toggle('show');

                if (popup.classList.contains('show')) {
                    const popupRect = popup.getBoundingClientRect();
                    const iconRect = popupTrigger.getBoundingClientRect();
                    const offsetLeft = iconRect.right - popupRect.width;
                    const offsetTop = iconRect.bottom;
                    popup.style.left = offsetLeft + 'px';
                    popup.style.top = offsetTop + 'px';
                }
            }
            popupTrigger.addEventListener('click', function(event) {
                event.preventDefault();
                togglePopup();
            });

            document.addEventListener('click', function(event) {
                if (!popup.contains(event.target) && !popupTrigger.contains(event.target)) {
                    popup.classList.remove('show');
                }
            });
        </script>
</header>





<!-- <header>
     <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#page-top"><img src="{{ asset('images/WhatsApp_Image_2024-02-28_at_15.48.15-removebg-preview.png') }}" height="90px" width="110px"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="bi-list"></i>
                    </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="navbar-nav me-4 my-3 my-lg-0">
                        <a href="#home"><button type="button" class="btn btn-light">Home</button></a>
                        <a href="#products"><button type="button" class="btn btn-light">Products</button></a>
                        <a href="#collection"><button type="button" class="btn btn-light">Collections</button></a>
                        <a href="#home"><button type="button" class="btn btn-light">Blog</button></a>
                        <a href="#features"><button type="button" class="btn btn-light">Features</button></a>
                    </div>
                    <div class="header-icons d-flex flex-column flex-lg-row ms-auto">
                        <div class="cart-login d-flex flex-column flex-lg-row">
                            <a href="" style="margin-right: 20px;"><img src="{{ asset('images/cart4.svg') }}" /></a>
                            <a href="" id="popup-trigger"><img src="{{ asset('images/person-check.svg') }}" /></a>
                            <div class="popup" id="popup">
                                <div class="popup-content">
                                    <h4>Welcome Guest</h4>
                                    <p>Manage Cart, Orders & Wishlist</p>
                                    <hr />
                                    @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                        @auth
                                            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                        @else
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="signin-btn">Sign In</button></a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="signup-btn">Sign Up</button></a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <script>
            const popupTrigger = document.getElementById('popup-trigger');
            const popup = document.getElementById('popup');

            function togglePopup() {
                popup.classList.toggle('show');

                if (popup.classList.contains('show')) {
                    const popupRect = popup.getBoundingClientRect();
                    const iconRect = popupTrigger.getBoundingClientRect();
                    const offsetLeft = iconRect.right - popupRect.width;
                    const offsetTop = iconRect.bottom;
                    popup.style.left = offsetLeft + 'px';
                    popup.style.top = offsetTop + 'px';
                }
            }

            popupTrigger.addEventListener('click', function(event) {
                event.preventDefault();
                togglePopup();
            });

            document.addEventListener('click', function(event) {
                if (!popup.contains(event.target) && !popupTrigger.contains(event.target)) {
                    popup.classList.remove('show');
                }
            });
        </script>
</header> -->