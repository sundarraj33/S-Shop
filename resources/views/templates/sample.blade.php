<!DOCTYPE html>
<html lang="ta">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    :root {
      --primary: #1e293b;
      --accent: #d97706;
      --bg: #f8fafc;
      --card-bg: #ffffff;
      --text: #0f172a;
      --text-muted: #64748b;
      --border: #e2e8f0;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: var(--bg);
      color: var(--text);
    }

    /* Header Navigation */
    header {
      background: #fff;
      border-bottom: 1px solid var(--border);
      padding: 1rem 5%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      letter-spacing: 2px;
      color: var(--primary);
    }

    nav a {
      margin: 0 1rem;
      text-decoration: none;
      color: var(--text-muted);
      font-weight: 500;
    }

    /* Steps Stepper */
    .stepper {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin: 2.5rem 0;
    }

    .step {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: var(--text-muted);
      font-weight: 500;
    }

    .step.active {
      color: var(--primary);
      font-weight: 700;
    }

    .step-number {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.85rem;
    }

    .step.active .step-number {
      background: var(--primary);
      color: white;
    }

    /* Container Layout */
    .cart-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1.5rem 4rem;
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 2rem;
    }

    /* Items Section */
    .cart-items {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .cart-card {
      background: var(--card-bg);
      padding: 1.25rem;
      border-radius: 12px;
      display: flex;
      gap: 1.25rem;
      align-items: center;
      box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
      border: 1px solid var(--border);
    }

    .cart-card img {
      width: 90px;
      height: 110px;
      object-fit: cover;
      border-radius: 8px;
    }

    .item-info {
      flex: 1;
    }

    .item-title {
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 0.25rem;
    }

    .item-meta {
      font-size: 0.85rem;
      color: var(--text-muted);
      margin-bottom: 0.75rem;
    }

    .quantity-control {
      display: inline-flex;
      align-items: center;
      border: 1px solid var(--border);
      border-radius: 6px;
      overflow: hidden;
    }

    .quantity-control button {
      background: #f1f5f9;
      border: none;
      width: 28px;
      height: 28px;
      cursor: pointer;
      font-weight: bold;
    }

    .quantity-control span {
      padding: 0 12px;
      font-size: 0.9rem;
    }

    .item-price {
      font-weight: 700;
      font-size: 1.1rem;
      color: var(--primary);
    }

    .delete-btn {
      background: #fef2f2;
      border: none;
      color: #ef4444;
      padding: 8px 12px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.2s;
    }

    .delete-btn:hover {
      background: #fee2e2;
    }

    /* Summary Card */
    .cart-summary {
      background: var(--card-bg);
      padding: 1.5rem;
      border-radius: 12px;
      box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
      border: 1px solid var(--border);
      height: fit-content;
    }

    .cart-summary h3 {
      font-size: 1.2rem;
      margin-bottom: 1.25rem;
      border-bottom: 1px solid var(--border);
      padding-bottom: 0.75rem;
    }

    .summary-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 0.85rem;
      font-size: 0.95rem;
      color: var(--text-muted);
    }

    .summary-row.discount {
      color: #10b981;
    }

    .summary-row.total {
      font-size: 1.2rem;
      font-weight: 700;
      color: var(--text);
      border-top: 1px solid var(--border);
      padding-top: 1rem;
      margin-top: 1rem;
    }

    .checkout-btn {
      width: 100%;
      background: var(--primary);
      color: white;
      border: none;
      padding: 0.9rem;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      margin-top: 1rem;
      transition: opacity 0.2s;
    }

    .checkout-btn:hover {
      opacity: 0.9;
    }

    @media (max-width: 768px) {
      .cart-container {
        grid-template-columns: 1fr;
      }
    }
  </style>
  @include('templates.link')
</head>
<body>

  <!-- Header -->
 @include('templates.Navbar')
 

  <!-- Stepper -->
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
    <!-- Left: Cart Items List -->
    <div class="cart-items">
      {{-- {{ session('user_id')}} --}}
    
      @php
        $total_sum = 0;

      @endphp

      {{-- {{ $total_sum }} --}}
      @foreach($store_product_details as $store_data) 

       {{ $store_data}}
       @endforeach
      
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

    

    <!-- Right: Order Summary Card -->
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