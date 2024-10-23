<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASPOS - Add Category</title>
    <link rel="stylesheet" href="addkategori.css">
</head>
<body>
@include('home.head')
    <div class="container">
    
        <main class="main-content">
            <div class="form-container">
                <h2>Add Category</h2>
                <form>
                    <label for="category-name">Category Name</label>
                    <input type="text" id="category-name" name="category-name" value="Category 4">
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
