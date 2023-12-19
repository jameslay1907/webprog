@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5 mt-3">
            <h2 class="text-center">Form Sitter</h2>
            <form action="{{route('store_sitter')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="firstname">First Name</label>
                            <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname" required value="{{old('firstname')}}">
                            @error('firstname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="lastname">Last Name</label>
                            <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname" value="{{old('lastname')}}">
                            @error('lastname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description">Add Description</label>
                            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" required value="{{old('description')}}">
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="idcard">Upload IDcard</label>
                            <input type="file" name="idcard" class="form-control @error('idcard') is-invalid @enderror" id="idcard" required>
                            @error('idcard')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="place">Upload The Sitter Place</label>
                            <input type="file" name="place" class="form-control @error('place') is-invalid @enderror" id="place" required>
                            @error('place')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="w-100 btn btn-lg" style="background-color: rgba(30, 208, 112, 1)" type="submit">Apply as Pet Sitter</button>
            </form>
        </div>
    </div>
@endsection