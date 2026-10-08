    @include('templates.Index_category_navbar')
    @include('templates.link')

    <div class="container py-4">
        <div class="row g-4">

            <!-- Product Card 1 -->

            @foreach($product_master_data as $product_master)
            <div class="col-12 col-lg-3 col-md-4 col-xl-3">
                <div class="card h-100 border-0 shadow-md overflow-hidden">
                
                    <div class="w-100" style="height: 75%;">
                        <a href=" {{ url('show_product/'. $product_master->id )}}">
                            <img src={{ $product_master->image_url }}
                            class="w-100 h-100 object-fit-cover"
                            alt="T-Shirt">
                        </a>
                    </div>
                    
                    <div class="card-body d-flex flex-column">                    
                        <h5 class="card-title fw-bold mb-1">
                            {{ $product_master->title }}
                        </h5>

                        <p class="card-text text-muted small mb-3">
                            {{ $product_master->brand }}
                        </p>
                        
                        <div class="d-flex align-items-center justify-content-between mb-3">

                            <div>
                                <small class="text-muted d-block mb-1">Size</small>
                                <div class="d-flex gap-1">
                                    <button class="btn btn-sm btn-outline-dark">S</button>
                                    <button class="btn btn-sm btn-outline-dark">M</button>
                                    <button class="btn btn-sm btn-outline-dark">L</button>
                                </div>
                            </div>

                            <div>
                                <small class="text-muted d-block mb-1 text-dark h6">Color</small>                            
                                <div class="d-flex gap-2">

                                    @foreach($product_color_data as $color_data)

                                        @if($product_master->id == $color_data->product_id)
                                        <img src="{{ $color_data->img_url }}" style="height: 25px;width:25px " class="rounded-circle border">
                                            
                                        @endif
                                    @endforeach

                                </div>
                            </div>

                        </div>

                        <!-- Price + Add Cart -->
                        <div class="d-flex align-items-center justify-content-between mt-auto">
                            <div>
                                <span class="fw-bold fs-5">₹{{ $product_master->amount }}</span>
                            </div>
                            <button class="btn btn-dark px-3">Add to Cart</button>
                        </div>


                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
