<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flip Shop</title>
    
    @include('templates.link')
</head>

<body>

    <header class="navbar">
        @include('templates.Navbar')
    </header>
   
    @include('templates.slider')


    {{-- {{ $product_master_data }} --}}
    @include('templates.Navbar2',[
            'product_master_data' => $product_master_data,
            'product_color_data' => $product_color_data,
            ])

    <footer>
    </footer>
</body>
</html>