<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASPOS</title>
    <link rel="stylesheet" href="{{ asset('home.css')}}">
    
</head>
<body>

@include('home.head')

    <div class="container">

        <div class="buttons">
            <button class="btn">+ Add Category</button>
            <button class="btn">+ Add Products</button>
            <button class="btn cart">Cart</button>
        </div>
        <div class="categories">
            <a href="#" class="active">Category 1</a>
            <a href="#">Category 2</a>
            <a href="#">Category 3</a>
        </div>

        <div class="products">
            <!-- Example of one product card -->
            <div class="product-card">
                <img src="product-image.jpg" alt="Product 1">
                <h3>Product Name 1</h3>
                <p>Rp. 10,000</p>
                <button class="details">Details</button>
                <button class="add-to-cart">+ Add to Cart</button>
            </div>

            <!-- Repeat for more products -->
            <!-- Example of another product card -->
            <div class="product-card">
                <img src="product-image.jpg" alt="Product 2">
                <h3>Product Name 2</h3>
                <p>Rp. 15,000</p>
                <button class="details">Details</button>
                <button class="add-to-cart">+ Add to Cart</button>
            </div>
        </div>

        <div class="total-bill">
            <h3>Total Bill: Rp. 60,000</h3>
        </div>
    </div>
</body>

</html>
