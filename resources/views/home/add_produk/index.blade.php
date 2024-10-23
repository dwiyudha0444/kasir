<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASPOS - Add Product</title>
    <link rel="stylesheet" href="addproduk.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="logo">MASPOS</div>
            <div class="user-profile">
                <span class="username">Taufik00</span>
                <img src="profile-icon.png" alt="User Profile" class="profile-icon">
            </div>
        </header>
        <main class="main-content">
            <div class="form-container">
                <h2>Add Product</h2>
                <form>
                    <div class="upload-section">
                        <div class="upload-image">
                            <img src="upload-icon.png" alt="Upload Image">
                            <span>Upload Image</span>
                        </div>
                    </div>
                    <div class="form-fields">
                        <label for="product-name">Product Name</label>
                        <input type="text" id="product-name" name="product-name" value="Product Name 1">
                        <label for="price">Price</label>
                        <input type="text" id="price" name="price" placeholder="Input price">
                        <label for="category">Select Category</label>
                        <select id="category" name="category">
                            <option value="" disabled selected>Select category</option>
                        </select>
                    </div>
                    <div class="form-buttons">
                        <button type="button" class="cancel-btn">Cancel</button>
                        <button type="submit" class="confirm-btn">Confirm</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
