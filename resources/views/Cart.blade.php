<!DOCTYPE html>
<html lang="en">
<head>
    @include('templates.link')      
    <link rel="stylesheet" href="{{ asset('css/Cart.css') }}">
</head>

<body>

    @include('templates.notification')  
    @include('templates.Navbar')
    {{ session('user_id') }}

    {{-- @foreach($store_product_details as $data)
    {{ $data }}
    @endforeach



    @foreach($master_product_details as $datas)
    {{ $datas }}
    @endforeach --}}
<div class="container">

    <h1 class="title">Your Shopping Cart</h1>

    <!-- Steps -->
    <div class="steps">

        <div class="step active">
            <span class="number">1</span>
            Shopping Cart
        </div>

        <div class="step">
            <span class="number">2</span>
            Shipping Address
        </div>

        <div class="step">
            <span class="number">3</span>
            Payment Method
        </div>

    </div>

    <!-- Cart -->
    <div class="cart-wrapper">

        <!-- Left Side -->
        <div class="cart-items">

            <!-- Product 1 -->


            @foreach($master_product_details as $master_data)
                @foreach($store_product_details as $store_product)                    
                    @if($master_data->id == $store_product->product_id)

                     <div class="cart-item">

                <div class="product-image">
                    <img src='{{ $master_data->image_url}}' alt="Product">
                </div>

                <div class="product-info">

                    <div class="product-name">
                        {{ $master_data->title }}
                    </div>

                    <div class="product-detail">
                        Quantity: 1
                    </div>

                    <div class="product-detail">
                        Size: {{ $store_product->product_size }}
                    </div>

                    <div class="product-detail">
                        Color: {{ $store_product->product_color }}
                    </div>

                    <div class="price">
                        Rs.{{ $master_data->amount }}
                    </div>

                    <button class="delete-btn" id='delete_btn' value="{{$store_product->id}}">
                        🗑
                    </button>

                </div>

            </div>

                    @endif
                @endforeach                       
            @endforeach
            

        </div>

        <!-- Right Side -->
        <div class="cart-summary">

            <h2 class="summary-title">
                Cart Details
            </h2>

            <div class="summary-row">
                <span>Subtotal</span>
                <span>$166.00</span>
            </div>

            <div class="summary-row">
                <span>Discount(10%)</span>
                <span class="discount">- $10</span>
            </div>

            <div class="summary-row">
                <span>Shipping Fee</span>
                <span class="shipping">+ $10</span>
            </div>

            <div class="summary-row total">
                <span>Total</span>
                <span>$166.00</span>
            </div>

            <button class="continue-btn">
                Continue →
            </button>

        </div>

    </div>

</div>

<script>
    $(document).ready(function(){
        
        $(".delete-btn").click(function(){            
            var store_product_id = $(this).val();
            
            $.ajax({
                url : "{{ url('delete_store_product')}}",
                type : "POST",
                data : {
                    _token : "{{ csrf_token() }}",                    
                    store_product_id : store_product_id
                },
                success: function(success_res){
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: success_res.message,
                        confirmButtonColor: '#3085d6'
                    });
                    console.log(success_res);
                },
                error: function(error_res){
                    console.log(res)
                }
            });
        });
    });
</script>

</body>
</html>