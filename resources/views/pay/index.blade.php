<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASPOS Cart</title>
    <link rel="stylesheet" href="pay.css">
</head>
<body>
@include('home.head')

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="product-info">
                        <div class="product-img">
                            <img src="product1.jpg" alt="Product 1">
                        </div>
                        <div class="product-details">
                            <h3>Product Name 1</h3>
                            <p>Rp. 10,000</p>
                        </div>
                    </td>
                    <td class="quantity">
                        <button class="qty-btn">-</button>
                        <span>2</span>
                        <button class="qty-btn">+</button>
                    </td>
                    <td>Rp. 20,000</td>
                    <td>
                        <button class="remove-btn">Remove Item</button>
                    </td>
                </tr>

                <tr>
                    <td class="product-info">
                        <div class="product-img">
                            <img src="product2.jpg" alt="Product 2">
                        </div>
                        <div class="product-details">
                            <h3>Product Name 2</h3>
                            <p>Rp. 20,000</p>
                        </div>
                    </td>
                    <td class="quantity">
                        <button class="qty-btn">-</button>
                        <span>2</span>
                        <button class="qty-btn">+</button>
                    </td>
                    <td>Rp. 40,000</td>
                    <td>
                        <button class="remove-btn">Remove Item</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="total-section">
            <span>Total</span>
            <span>Rp. 60,000</span>
        </div>

        <div class="action-buttons">
            <button class="btn back-btn">Back to Home</button>
            <button class="btn pay-btn">Pay Bill</button>
        </div>
    </div>
</body>
</html>
