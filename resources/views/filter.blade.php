<div class="col-md-2 p-0 border rounded shadow-sm bg-light">
    <div class="container-fluid shadow-sm">
        <div class="row">
            <p class="col-10 my-2 fs-5">Filter</p>
            <i class="col-2 my-3 bi bi-sliders navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleFilter" aria-expanded="false"></i>
        </div>
    </div>
    <div class="collapse" id="collapsibleFilter">
      <div class="container-fluid">
        <div class="navbar-nav">
            <a class="nav-link dropdown-toggle fs-6" href="#petcategory" role="button" data-bs-toggle="collapse" aria-expanded="false">
              Pet Category
            </a>
            <div class="dropdown-menu" id="petcategory">
              @forelse ($animals as $animal)
                <a href="{{route('filter_animal', ['id'=>$animal->id])}}" class="btn btn-light">{{$animal->name}}</a>
              @empty
                  <p>None</p>
              @endforelse
            </div>
          </div>
      </div>
      <div class="container-fluid">
        <div class="navbar-nav">
            <a class="nav-link dropdown-toggle fs-6" href="#services" role="button" data-bs-toggle="collapse" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu" id="services">
              @forelse ($services as $service)
                <a href="{{route('filter_service', ['id'=>$service->id])}}" class="btn btn-light">{{$service->name}}</a>
              @empty
                  <p>None</p>
              @endforelse
            </div>
          </div>
      </div>
      <div class="container-fluid">
        <div class="navbar-nav">
            <a class="nav-link dropdown-toggle fs-6" href="#location" role="button" data-bs-toggle="collapse" aria-expanded="false">
              Location
            </a>
            <div class="dropdown-menu" id="location">
              @forelse ($locations as $location)
                <a href="{{route('filter_location', ['province'=>$location->province])}}" class="btn btn-light">{{$location->province}}</a>
              @empty
                <p>None</p>
              @endforelse
            </div>
          </div>
      </div>
    </div>
</div>