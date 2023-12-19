@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4 mt-3">
            <main class="form-signup">
                <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>
                <form action="{{route('store_user')}}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>  
                    <button class="w-100 btn btn-lg" style="background-color: rgba(30, 208, 112, 1)" type="submit">Sign Up</button>
                </form>
                <small class="d-block mt-3">Already have an account? <a style="text-decoration: none; color: rgba(30, 208, 112, 1) " href="/login">Login Now!</a></small>
            </main>
        </div>
    </div>
@endsection