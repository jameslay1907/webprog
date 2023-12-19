@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4 mt-3">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>  
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('loginError')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>  
            @endif

            <main class="form-login">
                <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                <form action="{{route('authenticate')}}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>        
                    <button class="w-100 btn btn-lg" style="background-color: rgba(30, 208, 112, 1)" type="submit">Login</button>
                </form>
                <small class="d-block mt-3">Don't have an account? <a style="text-decoration: none; color: rgba(30, 208, 112, 1)" href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>
@endsection