<<<<<<< HEAD
    <header class="header fixed-top">
        <div class="nav">
            
            <div class="f-nav">
                <div class="dropdown" style="margin-left: 30px;">
                    <div class="menu-toggle" onclick="toggleMenu()">
                        <div class="dash"></div>
                        <div class="dash"></div>
                        <div class="dash"></div>
=======
<header>
     <!-- Navigation-->
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
                        <!-- <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Collections
                                </button>
                                <ul class="dropdown-menu dropdown-menu-light">
                                    <li><a class="dropdown-item" href="#">Baby</a></li>
                                    <li><a class="dropdown-item" href="#">Gifts</a></li>
                                    <li><a class="dropdown-item" href="#">Shoes</a></li>
                                    <li><a class="dropdown-item" href="#">Clothing</a></li>
                                    <li><a class="dropdown-item" href="#">Jewellery</a></li>
                                    <li><a class="dropdown-item" href="#">Weddings</a></li>
                                    <li><a class="dropdown-item" href="#">Accesories</a></li>
                                    <li><a class="dropdown-item" href="#">Electronics</a></li>
                                    <li><a class="dropdown-item" href="#">Pet Supplies</a></li>
                                    <li><a class="dropdown-item" href="#">Home & Decor</a></li>
                                    <li><a class="dropdown-item" href="#">Toys & Games</a></li>
                                    <li><a class="dropdown-item" href="#">Bags & Purses</a></li>
                                    <li><a class="dropdown-item" href="#">Bath & Beauty</a></li>
                                    <li><a class="dropdown-item" href="#">Art & Collectibles</a></li>
                                    <li><a class="dropdown-item" href="#">Bookd, Movies & Music</a></li>
                                    <li><a class="dropdown-item" href="#">Paper & Party Supplies</a></li>
                                    <li><a class="dropdown-item" href="#">Craft Supplies & Tools</a></li>
                                </ul>
                                </li>
                            </ul>
                        </div> -->
                        <a href="#collection"><button type="button" class="btn btn-light">Collections</button></a>
                        <a href="#home"><button type="button" class="btn btn-light">Blog</button></a>
                        <a href="#features"><button type="button" class="btn btn-light">Features</button></a>
>>>>>>> c7ab5c83 (updated - links)
                    </div>
                    <div class="dropdown-content">
                        <a href="#">Jewellery</a>
                        <a href="#">Bags & purses</a>
                        <a href="#">Home & decor</a>
                        <a href="#">Accesories</a>
                        <a href="#">Art & collectibles</a>
                        <a href="#">Craft supplies & tools</a>
                        <a href="#">Books, Movies, Music</a>
                    </div>
                </div>
                <div class="search-section">
                    <a class="navbar-brand fw-bold" id="logo" href="{{ route('home') }}">
                        <img src="{{ asset('images/WhatsApp_Image_2024-02-28_at_15.48.15-removebg-preview.png') }}" height="90px" width="110px">
                    </a>
                </div>
            </div>
            <div class="menu-toggle1" onclick="toggleNavs()">
                <div class="dash"></div>
                <div class="dash"></div>
                <div class="dash"></div>
            </div>
            <!-- <div class="nav-container"> -->
                <div class="f-nav-two">
                    <form class="search-form" role="search">
                        <div class="input-group">
                            <input class="form-control me-2" type="search" placeholder="I am looking for..." aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </div>
                    </form>
                </div>
                <div class="f-nav-three">
                    <div class="icons">
                        <a href="{{ route('cart') }}" style="margin: 10px; text-decoration: none;">
                            <img src="{{ asset('images/cart4.svg') }}" />
                            <span>Cart</span>
                        </a>
                        <a href="" style="margin: 10px; text-decoration: none;" id="popup-trigger">
                            <img src="{{ asset('images/person-check.svg') }}" />
                            <span>Account</span>
                        </a>
                        <a href="" style="margin: 10px; text-decoration: none;">
                            <img src="{{ asset('images/patch-question-fill.svg') }}" />
                            <span>Help</span>
                        </a>
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
                </div>
            <!-- </div> -->
            <div class="f-nav-four">
                <ul class="row-btn">
                    <li><a href="{{ route('home') }}"><span>Home</span></a></li>
                    <li><a href="{{ route('products') }}"><span>Products</span></a></li>
                    <li><a href="{{ route('collections') }}"><span>Collections</span></a></li>
                    <li><a href="{{ route('features') }}"><span>Features</span></a></li>
                    <li><a href="{{ route('blog') }}"><span>Blog</span></a></li>
                </ul>
            </div>
        </div>
        <hr style="margin-bottom: 0; margin-top: 0;" />
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

            function toggleMenu() {
                var dropdownContent = document.querySelector('.dropdown-content');
                dropdownContent.style.display === 'block' ? dropdownContent.style.display = 'none' : dropdownContent.style.display = 'block';
            }

            function toggleNavs() {
                var fNavTwo = document.querySelector('.f-nav-two');
                var fNavThree = document.querySelector('.f-nav-three');
                var fNavFour = document.querySelector('.f-nav-four');
                
                // Toggle visibility of f-nav-two and f-nav-three
                fNavTwo.classList.toggle('visible');
                fNavThree.classList.toggle('visible');
                fNavFour.classList.toggle('visible');
            }
        </script>
    </header>