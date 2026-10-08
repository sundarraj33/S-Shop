
@include('templates.link')

@include('templates.Navbar')


@php
    $images = $product_image
        ->where('product_id', $product_master->id)->first();

    $all_images = $product_image
        ->where('product_id', $product_master->id);
    
@endphp






<body class="bg-white text-gray-800">
  
    <main class="max-w-96 mx-auto px-5 lg:px-10 pb-10 container">
        
            <div class="grid grid-cols-1 lg:grid-cols-[55%_45%] gap-8 xl:gap-14">


                <div class="w-full">
                    <div class="flex flex-col md:flex-row gap-3">



                        <!-- Desktop Thumbnails -->
                        <div class="hidden md:flex flex-col gap-3 w-20">
                        
                            @foreach($all_images as $image)
                                @if($images->product_color == $image->product_color)                                    

                                    <img onclick="changeImage({{ $image->count() }})" src={{ $image->product_img_url  }}
                                class="w-20 h-24 object-cover border cursor-pointer">                           
                                @endif    
                            @endforeach

                        
                                                       
                        </div>

                        <!-- Main Image -->
                        <div class="relative w-full bg-gray-50 overflow-hidden">
                            
                            <span class="absolute top-3 left-3 z-10 bg-gray-800
                                        text-white text-xs px-3 py-2 rounded">
                                BESTSELLER
                            </span>

                            <img id="mainImage"
                                src= "{{ $product_master->image_url }}"
                                class="w-full max-w-lg mx-auto object-contain" style="height: 600px;width:100%">

                            <button onclick="previousImage()"
                                    class="absolute left-2 top-1/2 -translate-y-1/2
                                        w-9 h-9 bg-white rounded-full shadow">
                                ‹
                            </button>

                            <button onclick="nextImage()"
                                    class="absolute right-2 top-1/2 -translate-y-1/2
                                        w-9 h-9 bg-white rounded-full shadow">
                                ›
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Thumbnails -->
                    <div class="flex md:hidden gap-3 mt-3 overflow-x-auto">
                        <img onclick="changeImage(0)" src="IMAGE_URL_1"
                            class="w-16 h-20 object-cover border shrink-0">

                        <img onclick="changeImage(1)" src="IMAGE_URL_2"
                            class="w-16 h-20 object-cover border shrink-0">

                        <img onclick="changeImage(2)" src="IMAGE_URL_3"
                            class="w-16 h-20 object-cover border shrink-0">
                    </div>
                </div>

                <!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

<div class="pt-3 lg:pt-0 font-['Montserrat']">

    <!-- PRODUCT TITLE -->
    <div class="space-y-1">

        <h1 class="font-['Cormorant_Garamond'] text-6xl md:text-4xl font-bold  text-[#8b651e] leading-tight">
            {{ $product_master->title }}
        </h1>

        <p class="text-sm md:text-base text-gray-500 tracking-widest uppercase">
            {{ $product_master->brand }}
        </p>

        {{-- Star Rating start--}}
        <div class="flex items-center gap-2">

    <!-- Stars -->
    <div class="flex items-center gap-0.5 text-yellow-400">
        <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20">
            <path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.2 1 5.9-5.2-2.8-5.2 2.8 1-5.9L1.5 7.7l5.9-.9L10 1.5z"/>
        </svg>

        <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20">
            <path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.2 1 5.9-5.2-2.8-5.2 2.8 1-5.9L1.5 7.7l5.9-.9L10 1.5z"/>
        </svg>

        <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20">
            <path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.2 1 5.9-5.2-2.8-5.2 2.8 1-5.9L1.5 7.7l5.9-.9L10 1.5z"/>
        </svg>

        <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20">
            <path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.2 1 5.9-5.2-2.8-5.2 2.8 1-5.9L1.5 7.7l5.9-.9L10 1.5z"/>
        </svg>

        <!-- Half star -->
        <div class="relative h-5 w-5">
            <svg class="absolute inset-0 h-5 w-5 text-gray-300 fill-current" viewBox="0 0 20 20">
                <path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.2 1 5.9-5.2-2.8-5.2 2.8 1-5.9L1.5 7.7l5.9-.9L10 1.5z"/>
            </svg>

            <div class="absolute inset-0 w-1/2 overflow-hidden">
                <svg class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                    <path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.2 1 5.9-5.2-2.8-5.2 2.8 1-5.9L1.5 7.7l5.9-.9L10 1.5z"/>
                </svg>
            </div>
        </div>
    </div>

    <!-- Rating -->
    <span class="text-sm font-semibold text-gray-800">
        4.5
    </span>

    <span class="text-sm text-gray-500">
        (124 reviews)
    </span>

</div>
        {{-- Star Rating end --}}

    </div>


    <!-- DIVIDER -->
    <div class="border-b border-gray-200 my-5"></div>


    <!-- PRICE -->
    <div>

        <div class="flex items-center gap-3 flex-wrap">

            <span class="text-2xl md:text-3xl font-semibold text-gray-900">
                ₹{{ $product_master->amount }}
            </span>

            <span class="text-sm text-gray-500 line-through">
                ₹{{ $product_master->mrp_price }}
            </span>

            <span class="text-sm font-semibold text-red-500 bg-red-300 p-2 rounded">
                {{ $product_master->offer }}% OFF
            </span>

        </div>

        <p class="text-xs text-gray-500 mt-2">
            Price inclusive of all taxes
        </p>

    </div>


    <!-- OFFER -->
    <div class="mt-6 overflow-hidden rounded-md border border-dashed border-gray-300">

        <div class="bg-[#fffaf0] px-4 py-3 flex items-center justify-between">

            <span class="text-sm font-medium text-gray-700">
                Get it for
            </span>

            <span class="text-base font-semibold text-green-600">
                ₹280
            </span>

        </div>

        <div class="px-4 py-4 text-sm text-gray-600">

            <div class="flex flex-wrap items-center gap-1">

                <span>
                    Get Flat 30% off upto ₹500
                </span>

                <a href="#" class="text-blue-600 hover:text-blue-800 underline">
                    View All Products
                </a>

            </div>

            <div class="mt-3 flex items-center gap-2">

                <span class="font-medium text-gray-700">
                    Use Code
                </span>

                <span class="px-2 py-1 rounded bg-[#fffaf0] text-[#8b651e] font-semibold tracking-wide">
                    NEW30
                </span>

            </div>

        </div>

    </div>


    <!-- COLOR -->
    <div class="mt-7">

        <div class="flex items-center justify-between mb-3">

            <div>
                <p class="text-sm font-semibold text-gray-900">
                    Select Color
                </p>
            </div>

        </div>


        <div class="flex items-center gap-4">

            <!-- PREVIOUS -->
            <button
                type="button"
                class="flex-shrink-0 w-8 h-8 rounded-full border border-gray-200 text-xl text-gray-500 hover:border-gray-500 hover:text-gray-900 transition">
                ‹
            </button>


            <!-- COLORS -->
            <div class="flex items-center gap-3 flex-wrap">

                @foreach($product_color_data as $color_data)

                    @if($product_master->id == $color_data->product_id)

                        <button
                            type="button"
                            class="product_color_sel w-8 h-8 rounded-full ring-1 ring-gray-300 ring-offset-2 hover:ring-[#8b651e] transition-all duration-200"
                            style="background: {{ $color_data->color }}"
                            value="{{ $color_data->color }}"
                            title="{{ $color_data->color }}"
                        ></button>

                    @endif

                @endforeach

            </div>


            <!-- NEXT -->
            <button
                type="button"
                class="flex-shrink-0 w-8 h-8 rounded-full border border-gray-200 text-xl text-gray-500 hover:border-gray-500 hover:text-gray-900 transition">
                ›
            </button>

        </div>

    </div>


    <!-- SIZE -->
    <div class="mt-8">

        <div class="flex items-center justify-between">

            <div>
                <p class="text-sm font-semibold text-gray-900">
                    Select Size
                </p>               
            </div>

            <a
                href="#"
                class="text-md text-[#8b651e] underline hover:text-[#735318]">
                Size Guide
            </a>

        </div>


        <div class="flex gap-3 mt-4 flex-wrap">

            @foreach(['S', 'M', 'L', 'XL', 'XXL'] as $size)

                <button
                    type="button"
                    class="size-btn selectSize w-12 h-12 rounded-full border border-gray-300 text-sm font-medium text-gray-700 hover:border-[#8b651e] hover:text-[#8b651e] transition-all duration-200"
                    value="{{ $size }}"
                >
                    {{ $size }}
                </button>

            @endforeach

        </div>

    </div>


    <!-- DELIVERY -->
    <div class="mt-4 rounded-md bg-[#f0f6ff] p-2 flex items-start gap-3">

        <div class="flex-shrink-0 text-[#2747ff] text-lg p-2">
           <i class="fa-solid fa-truck-arrow-right"></i> 
        </div>

        <div>

            <p class="text-sm font-medium text-blue-800">
                Check Delivery
            </p>

            <p class="text-xs text-blue-500 mt-1 leading-relaxed">
                Select your size to know your estimated delivery date.
            </p>

        </div>

    </div>


    <!-- ADD TO BAG -->
    <form
        action="{{ url('store_product') }}"
        action=""
        id="myForm"
        method="POST"
        class="mt-5">

        @csrf

        <input
            type="text"
            name="id"
            class="border-1 border-red-300"
            value="{{ $product_master->id }}">

        <input
            type="text"
            name="size"
            class="border-1 border-red-300"
            id="set_size">

        <input
            type="text"
            name="color"
            class="border-1 border-red-300"
            id="set_color">

        <input
            type="text"
            name="user_id"
            id="user_id"
            class="border-1 border-red-300"
            value="{{ session('user_id') }}">


        <button
            type="submit"
            id="add_to_cart"
            class="w-full rounded-md bg-[#8b651e] hover:bg-[#735318] text-white py-4 font-semibold text-sm tracking-[0.15em] transition-all duration-200 flex items-center justify-center gap-3">

            <span class="text-lg">
                🛍
            </span>

            ADD TO BAG

        </button>

    </form>


    <!-- WISHLIST -->
    <button
        type="button"
        class="w-full mt-3 rounded-md border border-gray-300 hover:border-[#8b651e] hover:text-[#8b651e] py-4 font-medium text-sm tracking-wide transition-all duration-200">

        <span class="text-lg mr-1">
            ♡
        </span>

        ADD TO WISHLIST

    </button>

</div>

            </div>
        
    </main>

    <script>

        $(document).ready(function(){
            var id = {{ $product_master->id}}
            var session_id = "{{ session('user_id') }}";
            var color = "";
            var size="";

            

            $("#add_to_cart").click(function(){                

                if(!session_id){
                    $('#myModal').modal('show');                            
                } 

                // $.ajax({
                //     url : "{{ url('store_product')}}",
                //     type: "POST",                    
                //     data : {
                //         _token: "{{ csrf_token() }}",
                //         id : id,
                //         color : color,
                //         size : size
                //     },
                //     success: function(res){
                //         console.log(res);
                //     },
                //     error: function(err){
                //         console.log(err);
                //     }
                // });                
            }); 

            $(".product_color_sel").click(function(){                              
                color =  $(this).val();
                $("#set_color").val(color);  
                $('.product_color_sel').removeClass('ring-offset-2');
                $(this).addClass('ring-offset-2');
            });

            $(".selectSize").click(function(){
                
                set_size =  $(this).val();                      
                $("#set_size").val(set_size);                

                $('.selectSize').removeClass('bg-gray-900 text-white border-gray-900');        
                $(this).addClass('bg-gray-900 text-white border-gray-900');              
            });            
        });

        
        
        $("#myForm").on('submit',function(e){
            var user_id = $("#user_id").val();
            if(user_id == ''){
                 e.preventDefault();
                  $('#myModal').modal('show'); 
                 return false;
            }
        })

        
        let currentImage = 0;


        function changeImage(index) {

            currentImage = index;

            document.getElementById("mainImage").src = images[index];

        }


        function nextImage() {

            currentImage++;

            if (currentImage >= images.length) {
                currentImage = 0;
            }

            changeImage(currentImage);

        }


        function previousImage() {

            currentImage--;

            if (currentImage < 0) {
                currentImage = images.length - 1;
            }

            changeImage(currentImage);

        }


        // function selectSize(button) {
        //     let  = button.innerText.trim();
        //     var set_size = size;
        //     console.log(size);
        //     document.querySelectorAll(".size-btn").forEach(btn => {
        //         btn.classList.remove(
        //             "border-gray-900",
        //             "bg-gray-900",
        //             "text-white"
        //         );

        //         btn.classList.add("border-gray-300");

        //     });


        //     button.classList.remove("border-gray-300");

        //     button.classList.add(
        //         "border-gray-900",
        //         "bg-gray-900",
        //         "text-white"
        //     );

        // }

    </script>

    @include('templates.Login')

</body>