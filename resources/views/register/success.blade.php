@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3 text-center">
            <img src="{{asset('Image/check-lg.svg')}}" class="rounded-pill mb-2" style="width:100px;height:100px;background-color:rgba(30, 208, 112, 1" alt="">
            <h3>Application Submitted</h3>
            <p class="mb-5">Your application has been submitted and is in our checking period, please wait until we provide feedback via email Thank You.</p>
            <button class="btn btn-lg w-50 mt-5" style="background-color: rgba(30, 208, 112, 1)" type="submit"><a href="/" class="nav-link">Back To Home Page</a></button>
        </div>
    </div>
@endsection