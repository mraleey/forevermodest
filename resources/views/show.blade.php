@extends('frontend.layouts.main')
@section('title', $product->name)
@section('main-container')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- BANNER -->
<section class="hero-section ev-common-hero"
    style="background-image: url('{{ url('frontend/assets/images/common-banner/shape-1.png') }}');">
</section>

<div class="container-fluid">
    <div class="ev-hero-content">
        <h2 style="color: white">{{ $product->name }}</h2>
        <span><a href="{{ url('/') }}">Home</a> > <a href="{{ route('collections.index') }}">Collections</a> >
            {{ $product->name }}</span>
    </div>
</div>

<!-- PRODUCT DETAIL -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->image ? asset('storage/' . $product->image) : url('frontend/assets/images/collection/shape-1.png') }}"
                class="img-fluid rounded" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h3>{{ $product->name }}</h3>
            <ul class="list-inline mb-2">
                @for($i = 0; $i < 5; $i++)
                    <li class="list-inline-item"><i class="fa-solid fa-star text-warning"></i></li>
                @endfor
            </ul>
            <p class="lead">
                <strong>RS.{{ $product->price }}</strong>
                <del class="text-muted ms-2">RS.{{ $product->price * 2 }}</del>
            </p>
            <p>{{ $product->description }}</p>

            <button class="btn btn-success add-to-cart px-4 py-2 rounded-pill shadow-sm d-flex align-items-center" data-id="{{ $product->id }}">
    <i class="fa-solid fa-cart-shopping me-2"></i> 
    <span>Add to Cart</span>
</button>

<style>
    .btn-success.add-to-cart {
        background-color: #28a745;
        border: none;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn-success.add-to-cart:hover {
        background-color: #218838;
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-success.add-to-cart:active {
        background-color: #1e7e34;
        transform: scale(0.98);
    }

    .btn-success.add-to-cart i {
        font-size: 18px;
    }

    .btn-success.add-to-cart span {
        font-size: 16px;
    }
</style>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const button = document.querySelector('.add-to-cart');
        if (!button) return;

        button.addEventListener('click', function (e) {
            e.preventDefault();

            const form = document.createElement('form');
            form.method = 'POST';
            form.action = "{{ route('cart.add') }}";

            const csrfInput = document.createElement('input');
            csrfInput.type = 'hidden';
            csrfInput.name = '_token';
            csrfInput.value = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            form.appendChild(csrfInput);

            const idInput = document.createElement('input');
            idInput.type = 'hidden';
            idInput.name = 'product_id';
            idInput.value = this.dataset.id;
            form.appendChild(idInput);

            document.body.appendChild(form);
            form.submit();
        });
    });
</script>
@endpush
