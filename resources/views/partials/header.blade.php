    <div class="header fixed-top">
        <div class="nav">
            <nav class="f-nav">
                <a class="navbar-brand fw-bold" id="logo" href="{{ route('home') }}">
                    <img src="{{ asset('images/WhatsApp_Image_2024-02-28_at_15.48.15-removebg-preview.png') }}" height="90px" width="110px">
                </a>
                <form class="search-form" role="search">
                    <div class="input-group">
                        <input class="form-control me-2" type="search" placeholder="I am looking for..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </div>
                </form>
                <div class="icons">
                    <a href="{{ route('cart') }}" style="margin: 12px"><img src="{{ asset('images/cart4.svg') }}" /></a>
                    <a href="" style="margin: 12px" id="popup-trigger"><img src="{{ asset('images/person-check.svg') }}" /></a>
                    <a href="" style="margin: 12x"><img src="{{ asset('images/patch-question-fill.svg') }}" /></a>
                </div>
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
            </nav>
            <nav class="f-nav-two">
                <div class="row-btn">
                    <a href="{{ route('home') }}"><button>Home</button></a>
                    <a href="{{ route('products') }}"><button>Products</button></a>
                    <a href="{{ route('collections') }}"><button>Collections</button></a>
                    <a href="{{ route('blog') }}"><button>Blog</button></a>
                    <a href="{{ route('features') }}"><button>Features</button></a>
                    <!-- <a href="{{ route('collaborations') }}"><button>COLLABORATIONS</button></a> -->
                </div>
            </nav>
        </div>
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
    </div>