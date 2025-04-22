@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Login</h2>

                        <form action="{{ route('login.submit') }}" method="POST">
                            @csrf
                            <div class="mb-2">
                                <label for="email" class="form-label" style="font-size: 14px;">Email:</label>
                                <input 
                                    type="email" 
                                    class="form-control form-control-sm" 
                                    id="email" 
                                    name="email" 
                                    required 
                                    style="font-size: 14px; padding: 5px;">
                                @if ($errors->has('email'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label" style="font-size: 14px;">Password:</label>
                                <input 
                                    type="password" 
                                    class="form-control form-control-sm" 
                                    id="password" 
                                    name="password" 
                                    required 
                                    style="font-size: 14px; padding: 5px;">
                                @if ($errors->has('password'))
                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2" style="font-size: 12px;">
                                <div class="d-flex align-items-center">
                                    <input 
                                        type="checkbox" 
                                        class="form-check-input" 
                                        id="remember" 
                                        name="remember" 
                                        style="width: 17px; height: 22px;">
                                    <label for="remember" class="ms-1">Remember me</label>
                                </div>
                                <a href="{{ route('password.request') }}" class="text-decoration-none" style="font-size: 12px;">Forgot password?</a>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning text-white" style="font-size: 14px; padding: 5px 10px;">LOGIN</button>
                            </div>
                        </form>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
