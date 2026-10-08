<link rel='stylesheet' href="{{ asset('css/Slider.css') }}">

<section class="white-fashion-slider">

    <!-- Slide 1 -->
    <div class="white-slide active">

        <div class="white-slide-content">

            <span class="white-offer-tag">
                LIMITED TIME OFFER
            </span>

            <h1>
                SALE
                <strong>50% OFF</strong>
            </h1>

            <p>
                Discover our latest collection
                and refresh your everyday style.
            </p>

            <a href="#" class="white-shop-btn">
                SHOP NOW
                <span>→</span>
            </a>

        </div>


        <div class="white-slide-image">

            <div class="image-shadow"></div>

            <img
                src="{{ asset('images/slider1.png') }}"
                alt="Fashion Sale"
            >

            <div class="floating-offer">
                <small>UP TO</small>
                <strong>50%</strong>
                <span>OFF</span>
            </div>

        </div>

    </div>


    <!-- Slide 2 -->
    <div class="white-slide">

        <div class="white-slide-content">

            <span class="white-offer-tag">
                NEW COLLECTION
            </span>

            <h1>
                NEW
                <strong>ARRIVALS</strong>
            </h1>

            <p>
                Fresh styles designed for
                your everyday moments.
            </p>

            <a href="#" class="white-shop-btn">
                EXPLORE NOW
                <span>→</span>
            </a>

        </div>


        <div class="white-slide-image">

            <div class="image-shadow"></div>

            <img
                src="{{ asset('images/slider2.png') }}"
                alt="New Collection"
            >

            <div class="floating-offer">
                <small>NEW</small>
                <strong>2026</strong>
                <span>STYLE</span>
            </div>

        </div>

    </div>


    <!-- Slide 3 -->
    <div class="white-slide">

        <div class="white-slide-content">

            <span class="white-offer-tag">
                FLASH SALE
            </span>

            <h1>
                BUY 2
                <strong>GET 1 FREE</strong>
            </h1>

            <p>
                Don't miss our exclusive
                limited-time fashion offer.
            </p>

            <a href="#" class="white-shop-btn">
                GRAB OFFER
                <span>→</span>
            </a>

        </div>


        <div class="white-slide-image">

            <div class="image-shadow"></div>

            <img
                src="{{ asset('images/slider3.png') }}"
                alt="Flash Sale"
            >

            <div class="floating-offer">
                <small>LIMITED</small>
                <strong>2+1</strong>
                <span>FREE</span>
            </div>

        </div>

    </div>


    <!-- Navigation -->

    <div class="white-slider-navigation">

        <button class="white-prev">
            ←
        </button>

        <div class="white-slider-progress">
            <span></span>
        </div>

        <span class="white-counter">
            <b id="whiteCurrent">01</b> / 03
        </span>

        <button class="white-next">
            →
        </button>

    </div>

</section>

<script src="{{ asset('js/Slider.js')}}"></script>