<div id="mySlide" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      @foreach($banner as $key => $item)
      <li data-target="#mySlide" data-slide-to="{{$key == 0 ? 'active' : ''}}" class="active"></li>
      @endforeach
    </ol>
    @foreach ($banner as $key => $item)
    <div class="carousel-inner">
        <div class="carousel-item {{$key == 0 ? 'active' : ''}}"  id="slide{{$key}}">
            <img
            class="d-block w-100"
            src="{{ asset('storage/banner/' . $item->photo) }}"
            alt="{{ $item->judul ?? 'Slide ' . $key }}"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>{{$item->judul ?? ''}}</h5>
            <p>{{$item->description ?? ''}}</p>
          </div>
        </div>
    @endforeach


    <a class="carousel-control-prev" href="#mySlide" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#mySlide" data-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

</div>
