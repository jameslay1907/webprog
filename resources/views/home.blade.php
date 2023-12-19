@extends('layout')
@section('content')
<div class="row">
  @include('filter')
  <div class="col-lg-10">
      <div class = "row my-3">
          @forelse ($infos as $info)
            <div class="col-md-3 mx-5 my-3 container-fluid border border-1 rounded bg-white">
              <a href="{{route('detail', ['id'=>$info->id])}}">
                <img src="{{asset('Image/'.$info->photo)}}" class="mt-3 container-fluid" alt="Display Picture">
              </a>
              <div class="d-flex container-fluid">
                <div class="me-auto">
                  <p class="fs-6 fw-bold">{{$info->address}}, {{$info->province}}</p>
                  <p class="fw-normal">Rp.{{$info->price}}/day</p>
                </div>
                <div class="d-flex">
                  <i class="bi bi-star-fill me-2" style="color: yellow"></i>
                  <p class="fw-normal">{{$info->rating}}</p> 
                </div>
              </div>
            </div>
          @empty
            <h2 class="text-center">No Post Found</h2>
          @endforelse
      </div>
  </div>
</div>
@endsection