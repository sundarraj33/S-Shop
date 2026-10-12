
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@include('templates.link')

<style>
   * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
        background: #f5f6fa;
        color: #222;
        /* padding: 35px 0px; */
    }


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


    .checkout-container {
        max-width: 1100px;
        margin: auto;
    }

    .page-title {
        margin-bottom: 25px;
    }

    .page-title h2 {
        font-size: 28px;
        margin-bottom: 8px;
    }

    .page-title p {
        color: #777;
        font-size: 14px;
    }

    .checkout-layout {
        display: grid;
        grid-template-columns: 1.7fr 1fr;
        gap: 25px;
        align-items: start;
    }

    .card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 3px 15px rgba(0,0,0,.05);
        margin-bottom: 20px;
    }

    .card-title {
        font-size: 19px;
        margin-bottom: 22px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

   
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
    }

    .form-group {
        margin-bottom: 19px;
    }

    label {
        display: block;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    input, select, textarea {
        width: 100%;
        padding: 12px 13px;
        border: 1px solid #d9dce3;
        border-radius: 7px;
        font-size: 14px;
        background: white;
        outline: none;
    }

    input:focus, select:focus, textarea:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37,99,235,.08);
    }

    textarea {
        min-height: 85px;
        resize: vertical;
    }

    .address-types {
        display: flex;
        gap: 12px;
        margin-bottom: 22px;
    }

    .address-type {
        display: flex;
        gap: 8px;
        align-items: center;
        padding: 12px 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        cursor: pointer;
        font-size: 14px;
    }

    .address-type input {
        width: auto;
        accent-color: #2563eb;
    }

    .default-option {
        display: flex;
        gap: 9px;
        align-items: center;
        margin: 5px 0 22px;
        font-size: 14px;
    }

    .default-option input {
        width: auto;
        accent-color: #2563eb;
    }

    .default-option label {
        margin: 0;
        font-weight: normal;
    }

    .btn {
        width: 100%;
        padding: 14px;
        background: #2563eb;
        border: none;
        border-radius: 8px;
        color: white;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
    }

    .btn:hover {
        background: #1d4ed8;
    }

    .summary-title {
        font-size: 19px;
        margin-bottom: 20px;
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 16px;
        font-size: 14px;
        color: #666;
    }

    .summary-row.total {
        border-top: 1px solid #eee;
        padding-top: 17px;
        font-size: 17px;
        color: #222;
        font-weight: bold;
    }

    .delivery-note {
        padding: 13px;
        background: #eff6ff;
        color: #1d4ed8;
        border-radius: 8px;
        font-size: 13px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    #message {
        display: none;
        margin-bottom: 20px;
        padding: 13px;
        border-radius: 7px;
        font-size: 14px;
    }

    #message.success {
        display: block;
        background: #dcfce7;
        color: #166534;
    }

    #message.error {
        display: block;
        background: #fee2e2;
        color: #991b1b;
    }

    @media(max-width: 750px) {
        .checkout-layout {
            grid-template-columns: 1fr;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .card {
            padding: 20px;
        }
    }
</style>


</head>

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

    <form id="addressForm">
        <div class="checkout-layout">

            <div>
                <div class="card">
                    <h3 class="card-title">
                        <span class="step">1</span>
                        Contact Information
                    </h3>

                    <div class="form-row">
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
  const form = document.getElementById("addressForm");
  const message = document.getElementById("message");

  form.addEventListener("submit", function(event) {
      event.preventDefault();

      if (!form.checkValidity()) {
          form.reportValidity();
          return;
      }

      message.className = "success";
      message.textContent =
          "Address details validated successfully! Connect this form to Laravel to save the address and continue to payment.";

      message.scrollIntoView({
          behavior: "smooth",
          block: "center"
      });
  });
</script>

</body>
</html>
