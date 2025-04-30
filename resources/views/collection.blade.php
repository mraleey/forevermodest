@extends('frontend.layouts.main')
@section('title', 'Collections')
@section('main-container')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- BANNER-SECTION START -->
    <section class="hero-section ev-common-hero"
        style="background-image: url('{{ url('frontend/assets/images/common-banner/shape-1.png') }}');">
    </section>
    <!-- BANNER-SECTION END -->

    <div class="container-fluid">
        <div class="ev-hero-content">
            <h2 style="color: white">Collections</h2>
            <span><a href="{{ url('index') }}">Home</a> > Collections</span>
        </div>
    </div>

    <!-- Filter Section Start -->
    <div class="product-filters text-center mb-7">
        <form action="{{ route('collections.index') }}" method="GET">
            <div class="btn-group filter-group" role="group" aria-label="Filter Products">
                <button type="submit" name="gender" value="all"
                    class="btn btn-outline-dark filter-btn {{ request('gender') == 'all' ? 'active' : '' }}">All</button>
                <button type="submit" name="gender" value="men"
                    class="btn btn-outline-dark filter-btn {{ request('gender') == 'men' ? 'active' : '' }}">Men</button>
                <button type="submit" name="gender" value="women"
                    class="btn btn-outline-dark filter-btn {{ request('gender') == 'women' ? 'active' : '' }}">Women</button>
                <button type="submit" name="gender" value="kids"
                    class="btn btn-outline-dark filter-btn {{ request('gender') == 'kids' ? 'active' : '' }}">Kids</button>
                <button type="submit" name="gender" value="accessories"
                    class="btn btn-outline-dark filter-btn {{ request('gender') == 'accessories' ? 'active' : '' }}">Accessories</button>
                <button type="submit" name="gender" value="beauty"
                    class="btn btn-outline-dark filter-btn {{ request('gender') == 'beauty' ? 'active' : '' }}">Beauty</button>
                <button type="submit" name="gender" value="shoes"
                    class="btn btn-outline-dark filter-btn {{ request('gender') == 'shoes' ? 'active' : '' }}">Shoes</button>
                <button type="submit" name="gender" value="jewellery"
                    class="btn btn-outline-dark filter-btn {{ request('gender') == 'jewellery' ? 'active' : '' }}">Jewellery</button>
            </div>
        </form>
    </div>
    <!-- Filter Section End -->

    <!-- <div class="container mb-4 text-end">
                    <a href="{{ route('collections.create') }}" class="btn btn-success">
                        <i class="fa fa-plus"></i> Add New Product
                    </a>
                </div> -->

    <!-- PRODUCT SECTION START -->
    <div class="container">
        <div class="row">
            @foreach($collections as $product)
                <div class="col-md-3 mb-4 product" data-gender="{{ $product->gender }}">
                    <div class="card h-100">
                        <div class="product-img position-relative">
                            <a href="{{ route('collections.show', $product->id) }}">

                                <img src="{{ $product->image ? asset('storage/' . $product->image) : url('frontend/assets/images/collection/shape-1.png') }}"
                                    class="card-img-top" alt="{{ $product->name }}">
                            </a>
                            <div
                                class="product-labels d-flex justify-content-between position-absolute top-0 start-0 w-100 p-2">
                                <span class="badge bg-danger">-51%</span>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <ul class="list-inline mb-2">
                                @for($i = 0; $i < 5; $i++)
                                    <li class="list-inline-item"><i class="fa-solid fa-star text-warning"></i></li>
                                @endfor
                            </ul>
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text mb-1">
                                <strong>RS.{{ $product->price }}</strong>
                                <del class="text-muted ms-2">RS.{{ $product->price * 2 }}</del>
                            </p>
                            <div class="d-flex justify-content-center gap-2 mt-3">
                                <a href="{{ route('collections.show', $product->id) }}"
                                    class="btn btn-outline-primary view-details">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <form action="{{ route('liked-products.store', $product->id) }}" method="POST"
                                    style="display:inline">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $collections->links() }}
        </div>
    </div>
    <!-- PRODUCT SECTION END -->

@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function () {
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
            });
        });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            console.log('Script loaded successfully!');

            const addToCartButtons = document.querySelectorAll('.add-to-cart');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault();  // Prevent default action of anchor tags

                    console.log('Button clicked!');

                    const productId = this.dataset.id;
                    const title = this.dataset.title;
                    const price = parseFloat(this.dataset.price);
                    const image = this.dataset.image;

                    let cart = JSON.parse(localStorage.getItem('cart')) || [];
                    console.log({ productId, title, price, image });

                    const existingIndex = cart.findIndex(item => item.id == productId);

                    if (existingIndex !== -1) {
                        cart[existingIndex].quantity += 1;
                    } else {
                        cart.push({
                            id: productId,
                            title: title,
                            price: price,
                            image: image,
                            quantity: 1
                        });
                    }

                    localStorage.setItem('cart', JSON.stringify(cart));
                    console.log('Cart updated:', cart);

                    alert('Product added to cart!');
                });
            });
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endpush