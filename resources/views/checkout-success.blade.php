@extends('frontend.layouts.main')
@section('title', 'Order Success')
@section('main-container')
<section class="thank-you-section">
    <div class="container text-center">
        <h2>Thank You for Your Order!</h2>
        <p>Your order has been successfully placed.</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Continue Shopping</a>
    </div>
</section>
@endsection
