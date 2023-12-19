@extends('layout')
@section('content')
<div class="row">
    @include('filter')
    <div class="col-md-10 mt-2">
        <div class="container-fluid bg-light rounded border">
            <div class="row px-2 py-4">
                <div class="col-lg-7">
                    <a class="col-1 nav-link rounded-pill" href="{{ route('home') }}" style="background-color: rgba(30, 208, 112, 1);width:25px;height:25px">
                        <i class="bi bi-arrow-left p-1"></i>
                    </a>
                    <img class="mt-1 ps-4" src="{{asset('Image/'.$info->photo)}}" alt="photo" style="width:100%;border-radius:8%">
                </div>
                <div class="col-lg-5 ms-auto">
                    <div class="row">
                        <h6>Meet your host</h6>
                    </div>
                    <div class="container-fluid shadow-sm" style="background-color: rgba(207, 255, 229, 1);border-radius: 15px">
                        <div class="container py-4" style="padding-left: 75px;padding-right: 75px">
                            <div class="row bg-light pb-2 shadow-sm" style="border-radius: 15px">
                                <div class="row mt-2 m-0 justify-content-center">
                                    <img src="{{asset('Image/person.svg')}}" class="rounded-pill" alt="" style="background-color:#D3D3D3;color:white;width:70px;height:70px">
                                    <h6 class="text-center">{{$info->host->name}}</h6>
                                </div>
                                <div class="row m-0">
                                    <div class="col-sm-6">
                                        <p class="text-center m-0">{{$info->host->year}}</p>
                                        <p class="text-center">Year Hosting</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-center m-0">{{$info->host->review}}</p>
                                        <p class="text-center">Reviews</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <p class="m-0">{{$info->host->message}}</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="d-flex pt-3">
                                        <p class="me-3">Show more</p>
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <div class="pt-4">
                                        <button class="btn" type="button" style="background-color: rgba(30, 208, 112, 1)">Message Host</button>
                                    </div>
                                </div>
                                <div class="col-sm-6 ms-auto shadow-sm" style="background-color: rgba(240, 239, 233, 1);border-radius: 15px">
                                    <div class="row">
                                        <div class="col-6 pt-3">
                                            <img src="{{asset('Image/reserve_logo.png')}}" alt="">
                                        </div>
                                        <div class="col-6 pt-3">
                                            <p style="font-size: 10px">CHECK-IN</p>
                                            <P style="font-size: 10px">CHECK-OUT</P>
                                        </div>
                                    </div>
                                    <div class="row px-4 pb-2">
                                        <button class="btn rounded-pill" type="button" style="background-color: rgba(30, 208, 112, 0.76)">reserve</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-5 pb-2">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-7 border shadow-sm pb-4" style="border-radius: 10px">
                            <div class="row">
                                <p>{{$info->address_detail}}</p>
                            </div>
                            <div class="row border-bottom border-dark">
                                <h4>Rp. {{$info->price}}/day</h4>
                            </div>
                            <div class="row">
                                <p>Only accepting {{$info->animal->name}}s</p>
                            </div>
                        </div>
                        <div class="col-lg-3 ms-auto border shadow-sm" style="border-radius: 10px">
                            <h6 class="text-center">Services offered</h6>
                            <ul class="text-left">
                                @forelse ($info->services as $service)
                                    <li>{{$service->name}}</li>
                                @empty
                                    <p>There is no services provided</p>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto">
                    <img src="{{asset('Image/map.png')}}" alt="Map" style="width: 100%">
                </div>
            </div>
        </div>
        <br>
    </div>
</div>   
@endsection