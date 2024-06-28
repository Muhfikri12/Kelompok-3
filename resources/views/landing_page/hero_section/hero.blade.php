<div id="mySlide" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#mySlide" data-slide-to="0" class="active"></li>
      <li data-target="#mySlide" data-slide-to="1"></li>
      <li data-target="#mySlide" data-slide-to="2"></li>
      <li data-target="#mySlide" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('carousel/car1.jpeg')}}">
        <div class="carousel-caption d-none d-md-block">
          <h5>Menyambut Hari</h5>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('carousel/car2.jpg')}}">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide Kedua</h5>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('carousel/car3.jpeg')}}">
      </div>
    </div>

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
