<!DOCTYPE html>
<html>
<head>
    <title>Add New Product</title>
</head>
<body>
    <h1>Add New Product</h1>

    <form action="{{ route('collections.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>

        <label>Price:</label><br>
        <input type="number" name="price" step="0.01" required><br><br>

        <label>Image:</label><br>
        <input type="file" name="image"><br><br>

        <button type="submit">Add Product</button>
    </form>
</body>
</html>
