<style>
            .modal-backdrop {
    display: none !important;
}

body.modal-open {
    overflow: auto !important;
}

</style>
{{-- <link rel="stylesheet" href="{{ asset('css/Cart.css') }}"> --}}
<link rel='stylesheet' href="{{ asset('css/Navbar1.css') }}">


<nav class="navbar">

    <div class="nav-container container-fluid">

        <!-- LOGO -->
                
        <a href="" class="logo">
            <span class="logo-main">S-Shop</span>
            <span class="logo-sub">EST. 2026</span>
        </a>


        <!-- DESKTOP MENU -->
        <div class="nav-menu" id="navMenu">

            <a href="{{ url('/') }}">Home</a>
            <a href="#">New Arrivals</a>
            <a href="#">Men</a>
            <a href="#">Women</a>
            <a href="#">Collections</a>
            <a href="#" class="sale">Sale</a>

        </div>


        <!-- RIGHT SIDE -->
        <div class="nav-actions">

            <!-- SEARCH -->
            <button class="nav-icon">
                <svg viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="7"></circle>
                    <path d="m20 20-4-4"></path>
                </svg>
            </button>


            <!-- ACCOUNT -->
            {{-- <button class="nav-icon desktop-icon">
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="7" r="4"></circle>
                    <path d="M5 21c0-4 3-7 7-7s7 3 7 7"></path>
                </svg>
            </button> --}}
            <button class="icon-btn nav-icon desktop-icon"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#myModal"
                data-bs-backdrop="false">

                @if(session('user_id'))
                    <i class="fa-solid fa-user-check"></i>
                @else
                    <i class="fa-solid fa-user"></i>
                @endif                          
                 
        </button>


            <!-- WISHLIST -->
            <button class="nav-icon desktop-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M20 8.5c0-3-4-5-8-1-4-4-8-2-8 1 0 6 8 10 8 10s8-4 8-10z"></path>
                </svg>
            </button>


            <!-- CART -->
            <button class="nav-icon cart-icon">

                <svg viewBox="0 0 24 24">
                    <path d="M3 3h2l2 13h10l3-9H6"></path>
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="18" cy="20" r="1"></circle>
                </svg>

                <span class="cart-count">2</span>

            </button>


            <!-- MOBILE MENU -->
            <button class="menu-toggle" id="menuToggle">

                <span></span>
                <span></span>
                <span></span>

            </button>

        </div>

    </div>

</nav>


<script>
    const menuToggle = document.getElementById("menuToggle");
const navMenu = document.getElementById("navMenu");

menuToggle.addEventListener("click", function () {

    navMenu.classList.toggle("active");

});
</script>



@include('templates.Login')