@extends('layouts.app')
  @section('content')]
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="bg-overlay"></div>
                <img src="{{URL::to('/') }}/images/slider1.png" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                  <h5>Mision</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                    <div class="bg-overlay"></div>
                <img src="{{URL::to('/') }}/images/slider1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Vision</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <br>
          <section id="trips">
            <div class="container text-center">
                <h2>Mis Viajes</h2>
                <?php $count=0; ?>
                <div class="row">
                @foreach($data as $row)
                @if($count<=3)
                  <?php $count++; ?>
                @else
                  <div class="row">
                  <?php $count=0; ?>
                @endif
                    <card-picture>
                        <img src="{{ URL::to('/') }}/images/{{ $row->img }}" class="card-img-top" alt="..." data-toggle="modal"
                        data-target="#modalItem"
                        data-img="{{$row->img}}"
                        data-description="{{$row->description}}"
                        data-price="{{$row->price}}"
                        data-title="{{$row->name}}">
                    </card-picture>
                @if($count==0)
                  </div>
                @endif
                <modal-picture>
                    <template v-slot:title>
                        <h5 class="modal-title">{{$row->name}}</h5>
                    </template>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ URL::to('/') }}/images/{{ $row->img }}" class="card-img" alt="...">
                          </div>
                                <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title">{{$row->title}}</h5>
                                    <p class="card-text text-left" >{{$row->description}}</p>
                                    <p class="text-left"><b>Precio: </b>{{$row->price}}</p>
                                  </div>
                                </div>
                        </div>
                      </div>
                </modal-picture>
                @endforeach
            </div>
            <br>
            <contact-form/>
        </section>
   
@endsection
