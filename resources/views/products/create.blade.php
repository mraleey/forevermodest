@extends('frontend.layouts.main')
@section('title', 'Add Product')
@section('main-container')

<div class="container mt-5">
    <h2 class="text-center mb-4">Add New Product</h2>

    <div class="card shadow-lg p-4">
        <form action="{{ route('collections.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <!-- Product Name -->
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter product name" required>
                </div>

                <!-- Product Price -->
                <div class="col-md-6 mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="Enter product price" required>
                </div>
            </div>

            <div class="row">
                <!-- Product Description -->
                <div class="col-md-12 mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter product description"></textarea>
                </div>
            </div>

            <div class="row">
                <!-- Product Gender -->
                <div class="col-md-6 mb-3">
                    <label for="gender" class="form-label">Category</label>
                    <select name="gender" id="gender" class="form-select" required>
                        <option value="">Select Category</option>
                        <option value="men">Men</option>
                        <option value="women">Women</option>
                        <option value="kids">Kids</option>
                        <option value="accessories">Accessories</option>
                        <option value="beauty">Beauty</option>
                        <option value="shoes">Shoes</option>
                        <option value="jewellery">Jewellery</option>
                    </select>
                </div>

                <!-- Product Image -->
                <div class="col-md-6 mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary btn-lg">Add Product</button>
            </div>
        </form>
    </div>
</div>

@endsection
