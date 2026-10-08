
            <!-- Modal -->
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