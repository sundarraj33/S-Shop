<!DOCTYPE html>
<html lang="en">
<head>
    @include('templates.link')      
    <link rel="stylesheet" href="{{ asset('css/Cart.css') }}">
</head>

<body>


  @include('templates.notification')  
  @include('templates.Navbar')
 


  @if(!session('user_id'))
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'));
        myModal.show();
    });
</script>
  @endif

  <div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div style="padding:10px; right:0; position: relative;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 18px; "></button>
            </div>
            

            <div class="d-flex justify-center item-center">
                <img src="{{ asset('images/logo.png')}}" style="width:300px;height: 300px" >
            </div>
            
            <div class="">
                <p class="text-dark h5 text-center">Login with OTP</p>
                <p class="text-dark h5 text-center">Enter your log in details</p>
            </div>
            <!-- Modal Body -->
            <form method="post" action="{{url('candidate_login')}}">
                @csrf
            <div class="modal-body">
                
                <div class="" >
                    <p class="text-dark h5 font-bold">Phone <span class="text-danger">*</span> </p>
                    
                </div>

                <input type="text"
                    name='mobile'
                        class="form-control p-4"
                        placeholder="Phone Number">

                <input type="submit" value='Request for OTP' class="btn btn-primary w-full h5 p-2 my-2 h-16">
                        
            </div>
            
            <p class=" p-4 my-4 text-center" style="color:rgba(128, 128, 128, 0.895);font-size:14px">I accept that I have read & understood <br>Privacy Policy and T&Cs.</p>
        </form>
        </div>
    </div>
</div>




  <div class="stepper">
    <div class="step active">
      <div class="step-number">1</div>
      <span>Shopping Cart</span>
    </div>
    <div class="step">
      <div class="step-number">2</div>
      <span>Shipping Address</span>
    </div>
    <div class="step">
      <div class="step-number">3</div>
      <span>Payment</span>
    </div>
  </div>

  <!-- Cart Content -->
  <div class="cart-container">
    <div class="cart-items">
    
      @php
        $total_sum = 0;
      @endphp

      
      @foreach($master_product_details as $master_data)
        @foreach($store_product_details as $store_data)                    
          @if($master_data->id == $store_data->product_id)  

            @php 
              $total_sum += $master_data->amount
            @endphp

            <div class="cart-card" class="product">
                <img src='{{ $master_data->image_url}}' alt="Product">
                <div class="item-info">
                  <div class="item-title">{{ $master_data->title }}</div>
                  <div class="item-meta">Size: {{ $store_data->product_size }} | Color:  {{ $store_data->product_color }}</div>
                   <div class="quantity-control">
                      <button type="button" class="minus">-</button>
                      <span class="quantity">1</span>
                      <button type="button" class="plus">+</button>
                  </div>
              </div>
              <div class="item-price total">₹{{ $master_data->amount }}</div>
              <button class="delete-btn" id='delete_btn' value="{{$store_data->id}}">🗑</button>
            </div>

          @endif
        @endforeach
      @endforeach

    </div>

    <div class="cart-summary">
      <h3>Cart Details</h3>
      <div class="summary-row">
        <span>Subtotal</span>
        <span>₹{{ $total_sum }}.00</span>
      </div>
      <div class="summary-row discount">
        <span>Discount (5%)</span>
        <span>- ₹{{ $total_sum*5/100 }}</span>
      </div>
      <div class="summary-row">
        <span>Shipping Fee</span>
        <span>₹50.00</span>
      </div>
      <div class="summary-row total">
        <span>Total</span>
        <span>₹{{ $total_sum - $total_sum*5/100 + 50}}</span>
      </div>

      <button class="checkout-btn">Continue →</button>
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
                    location.reload();
                },
                error: function(error_res){
                    console.log(res)
                }
            });
        });


        $(".plus").click(function(){  
            let quantityElement = $(this).siblings(".quantity");                    
            let quantity = $(".quantity").text();            
            quantity++;           
            quantityElement.text(quantity);
            updateAmount(product, quantity);
        });


        $(".minus").click(function(){
            let quantityElement = $(this).siblings(".quantity");                    
            let quantity = $(".quantity").text();                               
            
            if (quantity > 1) {
              quantity--;
              quantityElement.text(quantity);
            }          
          updateAmount(product, quantity);
        });

        
        function updateAmount(product, quantity) {
          let price = parseFloat(product.find('.price').text());
          let total = price * quantity;
          product.find('.total').text(total.toFixed(2));
        }
    });
  </script>
</body>
</html>