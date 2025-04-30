@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Liked Products</h2>

    @if($liked->isEmpty())
        <p>You haven't liked any products yet.</p>
    @else
        <div class="row">
            @foreach($liked as $like)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="{{ asset('storage/' . $like->product->image) }}" class="card-img-top" alt="{{ $like->product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $like->product->name }}</h5>
                            <p class="card-text">{{ $like->product->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
