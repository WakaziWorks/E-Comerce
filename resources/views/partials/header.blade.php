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
                        <a href="#home"><button type="button" class="btn btn-light">Products</button></a>
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
                        <a href="#home"><button type="button" class="btn btn-light">Collections</button></a>
                        <a href="#home"><button type="button" class="btn btn-light">Blog</button></a>
                        <a href="#home"><button type="button" class="btn btn-light">Features</button></a>
                    </div>
                    <div class="header-icons d-flex flex-column flex-lg-row ms-auto">
                        <form class="d-flex" role="search">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Search..." aria-label="Search">
                                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
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
            // Get references to the icon and the popup
            const popupTrigger = document.getElementById('popup-trigger');
            const popup = document.getElementById('popup');

            // Function to toggle the visibility of the popup
            function togglePopup() {
                popup.classList.toggle('show');

                // If the popup is visible, position it below the icon
                if (popup.classList.contains('show')) {
                    const popupRect = popup.getBoundingClientRect();
                    const iconRect = popupTrigger.getBoundingClientRect();
                    const offsetLeft = iconRect.right - popupRect.width; // Adjusting position based on popup width
                    const offsetTop = iconRect.bottom;
                    popup.style.left = offsetLeft + 'px';
                    popup.style.top = offsetTop + 'px';
                }
            }

            // Event listener for clicking on the icon
            popupTrigger.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default action of the anchor tag
                togglePopup();
            });

            // Event listener for clicking outside the popup
            document.addEventListener('click', function(event) {
                if (!popup.contains(event.target) && !popupTrigger.contains(event.target)) {
                    // If the click is outside the popup and the icon
                    popup.classList.remove('show');
                }
            });
        </script>
</header>