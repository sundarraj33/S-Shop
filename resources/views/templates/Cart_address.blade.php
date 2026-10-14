@include('templates.link')
<link rel="stylesheet" href="{{ asset('css/Cart_address.css')}}">

<body>
@include('templates.Navbar')



<div class="checkout-container">

   <div class="stepper">
    <div class="step active">
      <div class="step-number">1</div>
      <span>Shopping Cart</span>
    </div>
    <div class="step active">
      <div class="step-number">2</div>
      <span>Shipping Address</span>
    </div>
    <div class="step">
      <div class="step-number">3</div>
      <span>Payment</span>
    </div>
  </div>


    <div id="message" role="status" aria-live="polite"></div>

    <form id="addressForm" action="{{ url('store_address')}} " method="POST">
        @csrf
        <div class="checkout-layout">

            <div>
                <div class="card">
                    <h3 class="card-title">
                        <span class="step">1</span>
                        Contact Information
                    </h3>

                    <div class="form-row">
                        <div class="">
                            <input type="text" name="user_id" value="{{ session('user_id')}}">
                        </div>
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input id="firstName" name="first_name"
                                   type="text" placeholder="First name" required>
                        </div>

                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input id="lastName" name="last_name"
                                   type="text" placeholder="Last name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input id="email" name="email"
                                   type="email" placeholder="you@example.com" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Mobile Number *</label>
                            <input id="phone" name="phone"
                                   type="tel" placeholder="10-digit mobile number"
                                   pattern="[0-9]{10}" maxlength="10" required>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h3 class="card-title">
                        <span class="step">2</span>
                        Delivery Address
                    </h3>

                    <div class="form-group">
                        <label for="address">House No. / Building Name *</label>
                        <input id="address" name="address"
                               type="text" placeholder="Flat 101, ABC Apartments" required>
                    </div>

                    <div class="form-group">
                        <label for="street">Street / Area / Locality *</label>
                        <input id="street" name="street"
                               type="text" placeholder="Street, area or locality" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="pincode">PIN Code *</label>
                            <input id="pincode" name="pincode"
                                   type="text" placeholder="6-digit PIN code"
                                   pattern="[0-9]{6}" maxlength="6" required>
                        </div>

                        <div class="form-group">
                            <label for="city">City *</label>
                            <input id="city" name="city"
                                   type="text" placeholder="Enter city" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="state">State *</label>
                            <input id="state" name="state"
                                   type="text" placeholder="Enter state" required>
                        </div>

                        <div class="form-group">
                            <label for="country">Country *</label>
                            <select id="country" name="country" required>
                                <option value="India" selected>India</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Canada">Canada</option>
                                <option value="Australia">Australia</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="landmark">Landmark (Optional)</label>
                        <input id="landmark" name="landmark"
                               type="text" placeholder="Near bus stop, school, etc.">
                    </div>

                    <label>Address Type</label>
                    <div class="address-types">
                        <label class="address-type">
                            <input type="radio" name="address_type"
                                   value="Home" checked>
                            🏠 Home
                        </label>

                        <label class="address-type">
                            <input type="radio" name="address_type"
                                   value="Work">
                            🏢 Work
                        </label>
                    </div>

                    <div class="default-option">
                        <input type="checkbox" id="defaultAddress"
                               name="is_default" value="1">
                        <label for="defaultAddress">
                            Set as my default shipping address
                        </label>
                    </div>

                    <button type="submit" class="btn">
                        Save & Continue to Payment →
                    </button>
                </div>
            </div>

            <div>
                <div class="card">
                    <h3 class="summary-title">Order Summary</h3>

                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span>₹1,500.00</span>
                    </div>

                    <div class="summary-row">
                        <span>Shipping</span>
                        <span id="shipping">₹50.00</span>
                    </div>

                    <div class="summary-row">
                        <span>Discount</span>
                        <span style="color:green">− ₹100.00</span>
                    </div>

                    <div class="summary-row total">
                        <span>Total</span>
                        <span id="grandTotal">₹1,450.00</span>
                    </div>

                    <div class="delivery-note">
                        🚚 Your order will be delivered to the address
                        provided here.
                    </div>

                    <p style="font-size:12px;color:#777;line-height:1.6">
                        Your address details will be used for delivery
                        and order updates.
                    </p>
                </div>
            </div>

        </div>
    </form>
</div>



<script>
//   const form = document.getElementById("addressForm");
//   const message = document.getElementById("message");

//   form.addEventListener("submit", function(event) {
//       event.preventDefault();

//       if (!form.checkValidity()) {
//           form.reportValidity();
//           return;
//       }

//       message.className = "success";
//       message.textContent =
//           "Address details validated successfully! Connect this form to Laravel to save the address and continue to payment.";

//       message.scrollIntoView({
//           behavior: "smooth",
//           block: "center"
//       });
//   });
</script>

</body>